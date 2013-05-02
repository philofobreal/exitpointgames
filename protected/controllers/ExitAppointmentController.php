<?php

class ExitAppointmentController extends GxController {
	
	public function actionIndex(){
		$model = new BillingInformations;
		$freeTimes = new ExitAppointmentFree;
		$partialMessage = self::actionSetAppointment();
		$this->render('create', array('model' => $model, 'freeTimes' => $freeTimes, 'partialMessage' => $partialMessage));
	}
	
	public function actionListTimes($from = null, $to = null, $room = null) {
            if($room == null){
                $room = exitConfig::ROOM_NAME_MADNESS;
            }
            
            $wData = null;
            if($from != null){
                if(!(Zend_Date::isDate($from,'YYYY-MM-dd HH:mm:ss'))){
                    die;
                }
            } else {
                $fromDate = new Zend_Date($from,'YYYY-MM-dd HH:mm:ss');

                //$fromDate->addDay(1);
                $strFromMinDate = $fromDate->toString('YYYY-MM-dd');
                
                $fromDateTime = new Zend_Date($strFromMinDate,'YYYY-MM-dd');
                $from = $fromDateTime->toString('YYYY-MM-dd HH:mm:ss');
            }
            if($to != null){
                if(!(Zend_Date::isDate($to,'YYYY-MM-dd HH:mm:ss'))){
                    die;
                }
            } else {
                $toDate = new Zend_Date($from,'YYYY-MM-dd HH:mm:ss');
                //$toDate->addMonth(1);
                $toDate->addWeek(1);
                $toDate->addHour(23);
                $toDate->addMinute(59);
                $toDate->addSecond(59);
                $to = $toDate->toString('YYYY-MM-dd HH:mm:ss');
                $fromDateTime = new Zend_Date($from,'YYYY-MM-dd HH:mm:ss');
                $wTodayObj = new Zend_Date();
                $wTodayStr = $wTodayObj->toString('YYYY-MM-dd');
                $wToday = new Zend_Date($wTodayStr,'YYYY-MM-dd');
                if($wToday->isLater($fromDateTime)){
                    $from = $wToday->toString('YYYY-MM-dd HH:mm:ss');
                }
            }

            $condition = '';
            $stmtParams = array();
            $wasParam = false;
            if($from != null){
                $condition = 'Appointment.appointment_from_date > :from';
                $stmtParams[':from'] = $from;
                $wasParam = true;
            }

            if($from != null){
                if($wasParam == true){
                    $condition .= ' and ';
                }
                $condition .= 'Appointment.appointment_from_date < :to';
                $stmtParams[':to'] = $to;
                $wasParam = true;
            }
            
            if($room != null){
                if($wasParam == true){
                    $condition .= ' and ';
                }
                $condition .= 'room.room_name = :roomName';
                $stmtParams[':roomName'] = $room;
            }
            
            $wGetTodayStrObj = new Zend_Date();
            $wGetTodayStr = $wGetTodayStrObj->__toString('YYYY-MM-dd');
            $wTodayStrObj = new Zend_Date($wGetTodayStr,'YYYY-MM-dd');
            $wTodayStrFrom = $wTodayStrObj->toString('YYYY-MM-dd HH:mm:ss');
            $wTodayStrObj->addHour(23);
            $wTodayStrObj->addMinute(59);
            $wTodayStrObj->addSecond(59);
            $wTodayStrTo = $wTodayStrObj->toString('YYYY-MM-dd HH:mm:ss');
            
            $todayCondition = 'Appointment.appointment_from_date > :fromToday and Appointment.appointment_from_date < :toToday and room.room_name = :roomName';
            $todayParams = array(
                ':fromToday' => $wTodayStrFrom,
                ':toToday' => $wTodayStrTo,
                ':roomName' => $room
            );
            // appointments
            $tlCriteria = new CDbCriteria;
            $tlCriteria->alias = 'Appointment';
            $tlCriteria->join = 'INNER JOIN room ON Appointment.appointment_room_id = room.room_id';
            $tlCriteria->condition = $todayCondition;
            $tlCriteria->params = $todayParams;
            $tlCriteria->order = 'Appointment.appointment_from_date';
            $wTimeLists = ExitAppointment::model()->findAll($tlCriteria);
            $j = 0;
            foreach ($wTimeLists as $wTimeList){
                $wFromTimePoint = new Zend_Date($wTimeList->appointment_from_date,'YYYY-MM-dd HH:mm:ss');
                $wToTimePoint = new Zend_Date($wTimeList->appointment_to_date,'YYYY-MM-dd HH:mm:ss');
                $wData['appointments'][$j]['till'] = $wFromTimePoint->toString('HH:mm:ss').' - '.$wToTimePoint->toString('HH:mm:ss');
                $j++;
            }
            
            // appointments end
            $criteria = new CDbCriteria;
            $criteria->alias = 'Appointment';
            $criteria->join = 'INNER JOIN exit_appointment_status ON Appointment.appointment_status = exit_appointment_status.status_id';
            $criteria->join = 'INNER JOIN room ON Appointment.appointment_room_id = room.room_id';
            $criteria->condition = $condition;
            $criteria->params = $stmtParams;
            $criteria->order = 'Appointment.appointment_from_date';
            $wListDatas = ExitAppointment::model()->findAll($criteria);
            
            if($wListDatas != null){
                $i = 0;
                foreach($wListDatas as $wListData){
                    $wActListData = $wListData->getAttributes();
                    $wActListDataStatus = $wListData->appointmentStatus->getAttributes();
                    $wData['times'][$i]['time'] = $wActListData['appointment_from_date'];
                    if($wActListData['appointment_status'] != exitConfig::PERSON_SHOWED_DIARY_STATUS_NEW){
                        $wActListData['appointment_status'] = exitConfig::PERSON_SHOWED_DIARY_STATUS_BOOKED;
			$wActListDataStatus['status_name'] = exitConfig::PERSON_SHOWED_DIARY_INFO_BOOKED;
                    }
                    $wData['times'][$i]['status'] = $wActListData['appointment_status'];
                    $wData['times'][$i]['status_name'] = $wActListDataStatus['status_name'];
                    $wData['times'][$i]['room_name'] = $wListData->appointmentRoom->room_name;
                    $i++;
                }
            }
            
            //$this->layout=false;
            header('Content-type: application/json');
            echo CJSON::encode($wData);
            Yii::app()->end();
        }
        
        public function getUniqId() {
            $uniqId = uniqid();
            $isUnique = false;
            do {
                $wIsUnique = ExitAppointment::model()->find('appointment_code = :uniqId', array(':uniqId' => $uniqId));
                if($wIsUnique == null){
                    $isUnique = true;
                    return $uniqId;
                }
            } while ($isUnique == false);
        }
	
	public function actionSetAppointment() {
		//For transactions
		Yii::app()->db->autoCommit = false;
		$transAction = Yii::app()->db->beginTransaction();
		
		$message = '';
		$userId = Yii::app()->user->getId();
                $wUserData = User::model()->find('id = :id',array(':id'=>$userId));
                $userMail = $wUserData->email;
                
		if($userId == null) {
			$message = Yii::t('ExitAppointment','Nincs bejelentkezve! Foglalása érvénytelen.');
		} else if($_POST != null){
			$validatorAlpha = new Zend_Validate_Alpha(array('allowWhiteSpace' => true));
			$validatorAlphaNum = new Zend_Validate_Alnum(array('allowWhiteSpace' => true));
			
			// $message = Yii::t('ExitAppointment','User Id = '.$userId);
			if(
				($this->actionValidatePayerName($_POST['BillingInformations']['payer_name'],1) == 1)
				AND($this->actionValidatePayerZipcode($_POST['BillingInformations']['payer_zipcode'],1) == 1)
				AND($this->actionValidatePayerCity($_POST['BillingInformations']['payer_city'],1) == 1)
				AND($this->actionValidateAddress($_POST['BillingInformations']['payer_street'],1) == 1)
				AND($this->actionValidatePayerHouseNum($_POST['BillingInformations']['payer_housenum'],1) == 1)
				AND($this->actionValidatePayerPhone($_POST['BillingInformations']['payer_phone'],1) == 1)
				AND($this->actionValidateTime($_POST['ExitAppointment']['appointment_from_date'],1)==1)
			)
			{
				// saving appointment with Transaction
				$message = Yii::t('ExitAppointment', 'Itt lesz a mentés...');
				
				if($_POST['BillingInformations']['have_to_add_bill'] == true) {
					$addBill = 1;
				} else {
					$addBill = 0;
				}
				
				$wExitAppointment = ExitAppointment::model()->find('appointment_from_date = :appointmentDate AND appointment_status = :freeAppStatus AND appointment_room_id = :roomId',
					array(':appointmentDate'=>$_POST['ExitAppointment']['appointment_from_date'],':freeAppStatus' => exitConfig::EXIT_FREE_APPOINTMENT,':roomId' => $_POST['ExitAppointment']['appointment_room_id']));
				if($wExitAppointment != null){
                                    $wExitAppointment->setAttributes(array(
                                            'appointment_modified' => new CDbExpression('NOW()'),
                                            'appointment_status' => exitConfig::EXIT_RESERVED_APPOINTMENT,
                                            'appointment_booker_id' => $userId                   
                                    ));
                                    $superOk = $wExitAppointment->save();
                                    $exitAppointmentData = $wExitAppointment->getAttributes();
                                } else {
                                    $superOk = false;
                                }

				//var_dump($exitAppointmentData);
				
				if(($wExitAppointment != null)AND($superOk == true)) {

					// make Billing Information
					$billingInformation = new BillingInformations();
					$billingInformation->setAttributes(array(
						'appointment_id' => $exitAppointmentData['appointment_id'],
						'payer_name' => $_POST['BillingInformations']['payer_name'],
						'payer_zipcode' => $_POST['BillingInformations']['payer_zipcode'],
						'payer_city' => $_POST['BillingInformations']['payer_city'],
						'payer_street' => $_POST['BillingInformations']['payer_street'],
						'payer_housenum' => $_POST['BillingInformations']['payer_housenum'],
						'payer_phone' => $_POST['BillingInformations']['payer_phone'],
						'have_to_add_bill' => $_POST['BillingInformations']['have_to_add_bill']
					));
					
					$superOk = $billingInformation->save();
					if($superOk == true) {
						$message = Yii::t('ExitAppointment','Köszönjük a foglalást!');
						$transAction->commit();
                                                self::appointmentMail($userMail,$wExitAppointment->appointment_from_date,$wExitAppointment->appointment_code,$wExitAppointment->appointment_room_id,$billingInformation);
					} else {
						$message = Yii::t('ExitAppointment','Hiba a feldolgozás során...');
						$transAction->rollback();
					}
				} else {
					$transAction->rollback();
					$message = Yii::t('ExitAppointment','Az időpontot a tranzakció elött befoglalták.');
				}
			} else {
				$message = Yii::t('ExitAppointment','Invalid információ! Foglalása érvénytelen.');
			}
		}
		
		$this->renderPartial('_setAppointment',array('message' => $message),false,true);
	}
	
        	
        public function appointmentMail($email,$fromDate,$appointmentCode,$roomId,$billingInformation) {
            $wRoom = Room::model()->find('room_id = :room_id',array(':room_id' => $roomId));
            $message = '<h3>Kedves '.$billingInformation->payer_name.',</h3>';
            $message .= '<p>A foglalást rögzítettük rendszerünkben az alábbi adatokkal:</p>';
            $message .= '<p>Név:'.$billingInformation->payer_name.' </br>';
            $message .= 'Cím:'.$billingInformation->payer_zipcode.' '.$billingInformation->payer_city.', '.$billingInformation->payer_street.' '.$billingInformation->payer_housenum.' </br>';
            $message .= 'Telefon:'.$billingInformation->payer_phone.'</p>';
            $message .= '<p>A játék időpontja:'.$fromDate.' </br>';
            $message .= 'Pálya neve:'.$wRoom->room_name.' </p>';
            $message .='<p>A foglalás véglegesítéshez az alábbi foglalási kódot tüntesd fel az utalás Közlemény rovatában.</p>';
            $message .='<p>Foglalási kód: '.$appointmentCode.'</p>';
			$message .='<p>Utalás részletei:</p>';
			$message .='<p>Számlatulajdonos: ExitPoint Games Kft. </br>Számlaszám: Unicredit Bank: 10918001-00000103-56950001 </br>Összeg: bruttó 9000 Ft.- </br>Közlemény:'.$appointmentCode.'</p>';
            $message .='<p>Részvételi feltételek:</p>';
            $message .='<p>A játékban 2-3-4 fős csoportok vehetnek részt. Négynél több embert egy csoportban nem tudunk
fogadni, mind a helyszínek kialakítása és mérete, mind a feladványok mennyisége miatt. Ha
egyszerre többen jönnétek, vagy foglaljatok azonos időben a másik pályánkra, vagy ugyanarra
egymás után. 
Kérünk benneteket, hogy a játék kezdeti időpontja előtt minimun 10 perccel jelenjetek meg.
A következő játékot veszélyeztető mértékű késés esetén (15 perc) fenntartjuk a jogot a játék
megtagadására. Ha a mi hibánkból hiúsul meg a játék, 50% kedvezménnyel ajánlunk fel nektek -
egy a számotokra is megfelelő időpontban - másik játéklehetőséget. 
A játékban való részvétel feltétele a betöltött 14. életév, ennek hiányában a szülői kiséret. 
A játékban minimális angol nyelvtudás szükségeltetik egyes feladatok megoldásához. </p>';
            $message .='<p>Viselet: csak azért mert hozzánk jössz, nem kell tréning felszerelés. Csinosban és hétköznapiban
is megfelelsz, nem kell kúszni-mászni a feladatok megoldásához. Télen fűtés és ruhatár fokozza a
komfort érzést.</p>';
            $message .='<p>A játék ára: 9000 Ft/csoport. (az ár bruttó ár)</p>';
            $message .='<p>Lemondás és módosítás:</p>';
            $message .='<p>72 órával az időpont előtt még van lehetőségetek lemondani és módosítani az időpontot. Kérjük
ezt jelezzétek emailben az info@exitpoint.hu mailcímen vagy telefonon. Amennyiben a foglalt
és kifizetett idópontban nem jelentek meg, úgy utólag már nem áll módunkban másik időpontot
biztosítani helyette.</p>';
            $message .='<p>Nagyon jó szórakozást kívánunk!</p>';
            $message .='<p>ExitPoint Game Masterek</p>';
            $message .='<p>Ezt az email-t a rendszer automatikusan küldte, kérjük ne válaszolj rá.</p>';
            
            BogiMailer::sendEmail($email, Yii::t('user','Exitpoint Appointment'), $message);
        }
        
        public function actionTestAppointmentMail(){
            $billinfo = new BillingInformations();
            $billinfo->setAttributes(array(
                'payer_name' => 'Lofasz',
                'payer_zipcode' => '1111',
                'payer_phone' => '1234567891',
                'payer_city' => 'Lofasz',
                'payer_street'=> 'Lofasz',
                'payer_housenum' => '1'
            ));
            self::appointmentMail('dnasztanovics@gmail.com','2012-04-02 19:05:00','ezegykod',1,$billinfo);
        }
        
        public function actionGetBillForm($dateTime = null, $room = null) {
            
            $wNow = new Zend_Date();
            
            $cs=Yii::app()->clientScript;
            $cs->scriptMap=array(
               '*.js' => FALSE,
               '*.css' => FALSE
            );
            
            if($dateTime == null){
                $dateTime = $_POST['dateTime'];
            }
                       
            if($room == null){
                if(isset($_POST['room'])){
                    $room = $_POST['room'];
                }
                if($room == null){
                    $room = exitConfig::ROOM_NAME_MADNESS;
                }
            }

            if(Yii::app()->user->isGuest == 0){
                
                //var_dump($dateTime);
                $wRoomNumber = null;
                $wRoom = Room::model()->find('room_name = :roomName',array(':roomName' => $room));
                if($wRoom != null){
                    $wRoomNumber = $wRoom->room_id;
                }
                
                if((Zend_Date::isDate($dateTime,'YYYY-MM-dd HH:mm:ss'))AND($wRoomNumber != null)) {
                    $wDateTime = new Zend_Date($dateTime,'YYYY-MM-dd HH:mm:ss');
                    if(!$wDateTime->isEarlier($wNow)){                  
                        $wAppointment = ExitAppointment::model()
                            ->with('appointmentStatus','billingInformations','appointmentBooker')
                            ->find('appointment_from_date = :dateTime and appointment_status = :freeAppmnt and appointment_room_id = :roomId',array(':dateTime' => $dateTime,':freeAppmnt' => exitConfig::EXIT_FREE_APPOINTMENT, ':roomId' => $wRoomNumber));
                        if($wAppointment != null) {
                            $billingInformations = new BillingInformations();
                            $errorMsg = null;
                        } else {
                            $billingInformations = null;
                            $errorMsg = Yii::t('ExitAppointment', 'Az időpont már le van foglalva, kérjük keressen másikat!');
                        }

                        $this->renderPartial('_userForm',array(
                            'wAppointment' => $wAppointment,
                            'wBillingInformations' => $billingInformations,
                            'errorMsg' => $errorMsg
                        ),FALSE,TRUE);
                    } else {
                        $errorMsg = Yii::t('ExitAppointment', 'Az időpont már elmúlt, kérjük válasszon másikat!');
                        
                        $this->renderPartial('_msg',array(
                            'errorMsg' => $errorMsg
                        ),FALSE,TRUE);
                    }
                }
            } else {
                Yii::app()->session['redirectUrl'] = array('controller' => 'ExitAppointment/getBillForm','params'=>array('dateTime' => $dateTime,'room'=>$room));
                $this->redirect(Yii::app()->createUrl('user/loginRegistry'));
            }
	}
        	
	public function actionValidatePayerName($payer_name = null, $isPHPQuery = null){
		$validatorAlphaNum = new Zend_Validate_Alnum(array('allowWhiteSpace' => true));
		if($payer_name == null){
			$result = 0;
		} elseif(!$validatorAlphaNum->isValid($payer_name)) {
			$result = 0;
		} else {
			$result = 1;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
        
        public function actionValidateAddress($payer_address = null, $isPHPQuery = null){
		if(($payer_address != null)AND(preg_match('/^[\w áÁéÉíÍóÓöÖőŐúÚüÜűŰ.]+$/', $payer_address))){
			$result = 1;
		} else {
			$result = 0;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
	
	public function actionValidatePayerCity($payer_city = null, $isPHPQuery = null){
		$validatorAlpha = new Zend_Validate_Alpha(array('allowWhiteSpace' => true));
		if($payer_city == null){
			$result = 0;
		} elseif(!$validatorAlpha->isValid($payer_city)) {
			$result = 0;
		} else {
			$result = 1;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
	
	public function actionValidatePayerZipcode($payer_zipcode = null, $isPHPQuery = null){
		$validatorNum = new Zend_Validate_PostCode('hu_HU');
		if($payer_zipcode == null){
			$result = 0;
		} elseif(!$validatorNum->isValid($payer_zipcode)) {
			$result = 0;
		} else {
			$result = 1;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
	
	public function actionValidatePayerHouseNum($payer_housenum = null, $isPHPQuery = null){
		$validatorAlphaNum = new Zend_Validate_Alnum(array('allowWhiteSpace' => true));
		if($payer_housenum == null){
			$result = 0;
		} elseif(!$validatorAlphaNum->isValid($payer_housenum)) {
			$result = 0;
		} else {
			$result = 1;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
	
	public function actionValidatePayerPhone($payer_phone = null, $isPHPQuery = null){
		$validatorAlphaNum = new Zend_Validate_Alnum();
		if($payer_phone == null){
			$result = 0;
		} elseif(!$validatorAlphaNum->isValid($payer_phone)) {
			$result = 0;
		} else {
			$result = 1;
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
	}
	
	public function actionValidateTime($time = null, $isPHPQuery = null) {
		$validatorDate = new Zend_Validate_Date('yyyy-MM-dd HH:mm:ss');
		//var_dump($time, $validatorDate->isValid($time));

		if($time == null){
			$result = 0;
		} elseif(!$validatorDate->isValid($time)) {
			$result = 0;
		} else {
			$wIsTimeAvailable = ExitAppointment::model()->find('appointment_from_date = :appointmentDate',array(':appointmentDate'=>$time));
			if($wIsTimeAvailable == null) {
				$result = 0;
			} else {
				$wTimeInfos = $wIsTimeAvailable->getAttributes();
				if($wTimeInfos['appointment_status'] != exitConfig::EXIT_FREE_APPOINTMENT){
					$result = 0;
				} else {
					$result = 1;
				}
			}
		}
		
		if(($isPHPQuery == null)OR($isPHPQuery == 0)) {
			$this->renderPartial('_validator',array('result' => $result),false,true);
		} else {
			return $result;
		}
		
	}
}
