<?php

class NimdaController extends Controller
{  
        public function filters(){
            return array(
                'accessControl',
            );
        }
        
        //http://www.yiiframework.com/doc/api/1.1/CAccessControlFilter
        public function accessRules(){
            return array(
                array(
                    'allow',
                    'actions' => array('index', 'login', 'listTimesAdmin', 'getBillFormAdmin', 'setAdminForm','makeTimesMadness','makeTimesRabbitHole'),
                    'expression' => 'Yii::app()->user->isAdmin()==1'
                ),
                array(
                    'deny',
                    'actions' => array('index', 'login', 'listTimesAdmin', 'getBillFormAdmin', 'setAdminForm','makeTimesMadness','makeTimesRabbitHole'),
                    'expression' => 'Yii::app()->user->isAdmin()==0'
                )
            );
        }
        
        
	public function actionIndex()
	{
            $this->layout = 'main_admin';
                $cs=Yii::app()->clientScript;
                $cs->scriptMap=array(
                    'jquery.yiiactiveform.js' => TRUE
                );
            $this->render('index');
	}

	public function actionLogin()
	{
		$this->render('login');
	}
        
        
        public function actionListTimesAdmin($from = null, $to = null, $room = null) {
            if($room == null){
                $room = exitConfig::ROOM_NAME_MADNESS;
            }
            $wData = null;

            // appointments end

            if($from != null){
                if(!(Zend_Date::isDate($from,'YYYY-MM-dd HH:mm:ss'))){
                    die;
                }
            } else {
                $fromDate = new Zend_Date($from,'YYYY-MM-dd HH:mm:ss');
                $fromDate->addMonth(-1);
                $from = $fromDate->toString('YYYY-MM-dd HH:mm:ss');
            }
            if($to != null){
                if(!(Zend_Date::isDate($to,'YYYY-MM-dd HH:mm:ss'))){
                    die;
                }
            } else {
                $toDate = new Zend_Date($from,'YYYY-MM-dd HH:mm:ss');
                $toDate->addMonth(2);
                $to = $toDate->toString('YYYY-MM-dd HH:mm:ss');
            }

            $condition = '';
            $stmtParams = array();
            $wasParam = false;
            if($from != null){
                $condition = 'appointment_from_date > :from';
                $stmtParams[':from'] = $from;
                $wasParam = true;
            }

            if($from != null){
                if($wasParam == true){
                    $condition .= ' and ';
                }
                $condition .= 'appointment_from_date < :to';
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
            
            $wStatusDatas = AppointmentStatus::model()->findAll();
            foreach($wStatusDatas as $wStatusData){
                    $wData['timeStatus'][] = $wStatusData->getAttributes();
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
                    /*if($wActListData['appointment_status'] != exitConfig::PERSON_SHOWED_DIARY_STATUS_NEW){
                        $wActListData['appointment_status'] = exitConfig::PERSON_SHOWED_DIARY_STATUS_BOOKED;
                    } */
                    $wData['times'][$i]['status'] = $wActListData['appointment_status'];
                    $wData['times'][$i]['status_name'] = $wActListDataStatus['status_name'];
		    $wData['times'][$i]['appointment_code'] = $wActListData['appointment_code'];
                    
                    //var_dump($wListData->billingInfrormations == null); exit;
                    if($wListData->appointmentBooker != null){
                        $bookerData = $wListData->appointmentBooker->getAttributes();
                        $wData['times'][$i]['user_mail'] = $bookerData['email'];
                    }
                    
                    if($wListData->billingInformations != null){
                        $billInfos = $wListData->billingInformations;
                        $billInfos = $billInfos[0];
                        //var_dump($billInfos[0]);
                        $wData['times'][$i]['billing_information'] = $billInfos->getAttributes();                        
                    }
                    $wData['times'][$i]['room_name'] = $wListData->appointmentRoom->room_name;
                    $i++;
                }
            }
            
            //$this->layout=false;
            header('Content-type: application/json');
            echo CJSON::encode($wData);
            Yii::app()->end();
        }
        
        public function actionMakeTimesMadness(){
            ini_set('max_execution_time', 500);
            Zend_Date::setOptions(array('fix_dst' => false));
            
            $latestAppointment = ExitAppointment::getLatestAppointment(exitConfig::ROOM_MADNESS);
            $bigestTime = new Zend_Date($latestAppointment,'YYYY-MM-dd HH:mm:ss');
            
            if($latestAppointment == null){
                $seasonAddDay = 0;
            } else {
                $seasonAddDay = 1;
            }
            
            $biggestDay = $bigestTime->toString('YYYY-MM-dd');
            $fromDateTime = new Zend_Date($biggestDay,'YYYY-MM-dd');
            //$fromDateTime->setTimezone('GMT');
            $fromDateTime->addDay($seasonAddDay);
            
            //For transactions
	    Yii::app()->db->autoCommit = false;
            
            for($i = 0; $i<exitConfig::EXIT_SEASON_IN_DAY; $i++){
                echo $fromDateTime->get(Zend_Date::WEEKDAY_DIGIT).' day -'.$fromDateTime->toString('YYYY-MM-dd').'</br>';
                
                $transAction = Yii::app()->db->beginTransaction();
                
                $fromTimes = new Zend_Date($fromDateTime->toString('YYYY-MM-dd'),'YYYY-MM-dd');
                $fromTimes->setTimezone('GMT');
                $fromTimes->setTime(exitConfig::MADNESS_START_HOUR.':'.exitConfig::MADNESS_START_MINUTE,'HH:mm');
                
                $superOk = false;
                $wasDateTime = false;

                for($j = 0; $j < exitConfig::MADNESS_DAILY_TIMES; $j++){
                    $wStartDateTime = null;
                    $wEndDateTime = null;
                    
                    $wStartDateTime = $fromTimes->toString('YYYY-MM-dd HH:mm:ss');
                    $fromTimes->addMinute(exitConfig::MADNESS_LONG_MINUTE);
                    $wEndDateTime = $fromTimes->toString('YYYY-MM-dd HH:mm:ss');
                    echo $wStartDateTime.' - '.$wEndDateTime.'<br/>';
                    if(($superOk == true)or($wasDateTime == false)){
                        $uniqueId = $this->getUniqId();
                            $wNewAppTime = new ExitAppointment();
                            $wNewAppTime->setAttributes(array(
                                'appointment_code' => $uniqueId,
                                'appointment_from_date' => $wStartDateTime,
                                'appointment_to_date' => $wEndDateTime,
                                'appointment_status' => exitConfig::EXIT_FREE_APPOINTMENT,
                                'appointment_modified' => new CDbExpression("NOW()"),
                                'appointment_room_id' => exitConfig::ROOM_MADNESS
                            ));
                        $superOk = $wNewAppTime->save();
                        $wasDateTime == true;
                    }
                    $fromTimes->addMinute(exitConfig::MADNESS_REST_MINUTE);
                }
                
                if($superOk == true){
                    $transAction->commit();
                    $message = Yii::t('ExitAppointment','Sikeres dátumfelvétel.');
                } else {
                    $transAction->rollback();
                    $message = Yii::t('ExitAppointment','Hiba a feldolgozás során...');
                }
                
                $fromDateTime->addDay(1);
            }
        }
        
        public function actionMakeTimesRabbitHole(){
            ini_set('max_execution_time', 500);
            
            $latestAppointment = ExitAppointment::getLatestAppointment(exitConfig::ROOM_RABBITHOLE);
            $bigestTime = new Zend_Date($latestAppointment,'YYYY-MM-dd HH:mm:ss');
            
            if($latestAppointment == null){
                $seasonAddDay = 0;
            } else {
                $seasonAddDay = 1;
            }
            
            $biggestDay = $bigestTime->toString('YYYY-MM-dd');
            $fromDateTime = new Zend_Date($biggestDay,'YYYY-MM-dd');
            $fromDateTime->addDay($seasonAddDay);
            
            //For transactions
	    Yii::app()->db->autoCommit = false;
            
            for($i = 0; $i<exitConfig::EXIT_SEASON_IN_DAY; $i++){
                echo $fromDateTime->get(Zend_Date::WEEKDAY_DIGIT).' day -'.$fromDateTime->toString('YYYY-MM-dd').'</br>';
                
                $transAction = Yii::app()->db->beginTransaction();
                
                $fromTimes = new Zend_Date($fromDateTime->toString('YYYY-MM-dd'),'YYYY-MM-dd');
                $fromTimes->setTimezone('GMT');
                $fromTimes->setTime(exitConfig::RABBITHOLE_START_HOUR.':'.exitConfig::RABBITHOLE_START_MINUTE,'HH:mm');
                
                $superOk = false;
                $wasDateTime = false;

                for($j = 0; $j < exitConfig::RABBITHOLE_DAILY_TIMES; $j++){
                    
                    $wStartDateTime = $fromTimes->toString('YYYY-MM-dd HH:mm:ss');
                    $fromTimes->addMinute(exitConfig::RABBITHOLE_LONG_MINUTE);
                    $wEndDateTime = $fromTimes->toString('YYYY-MM-dd HH:mm:ss');
                    echo $wStartDateTime.' - '.$wEndDateTime.'<br/>';
                    if(($superOk == true)or($wasDateTime == false)){
                        $uniqueId = $this->getUniqId();
                            $wNewAppTime = new ExitAppointment();
                            $wNewAppTime->setAttributes(array(
                                'appointment_code' => $uniqueId,
                                'appointment_from_date' => $wStartDateTime,
                                'appointment_to_date' => $wEndDateTime,
                                'appointment_status' => exitConfig::EXIT_FREE_APPOINTMENT,
                                'appointment_modified' => new CDbExpression("NOW()"),
                                'appointment_room_id' => exitConfig::ROOM_RABBITHOLE
                            ));
                        $superOk = $wNewAppTime->save();
                        $wasDateTime == true;
                    }
                    $fromTimes->addMinute(exitConfig::RABBITHOLE_REST_MINUTE);
                }
                
                if($superOk == true){
                    $transAction->commit();
                    $message = Yii::t('ExitAppointment','Sikeres dátumfelvétel.');
                } else {
                    $transAction->rollback();
                    $message = Yii::t('ExitAppointment','Hiba a feldolgozás során...');
                }
                
                $fromDateTime->addDay(1);
            }
        }
        
        public function actionGetBillFormAdmin($dateTime = null,$room = null) {
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
                
                $wRoomNumber = null;
                $wRoom = Room::model()->find('room_name = :roomName',array(':roomName' => $room));
                if($wRoom != null){
                    $wRoomNumber = $wRoom->room_id;
                }
                
		if((Zend_Date::isDate($dateTime,'YYYY-MM-dd HH:mm:ss'))AND($wRoomNumber != null)) {
			$wAppointment = ExitAppointment::model()
				->with('appointmentStatus','billingInformations','appointmentBooker','appointmentRoom')
				->find('appointment_from_date = :dateTime and appointment_room_id = :roomId',array(':dateTime' => $dateTime,':roomId' => $wRoomNumber));

			if($wAppointment != null) {
				if($wAppointment->billingInformations == null) {
                                    $billingInformations = new BillingInformations();
				} else {
                                    $billingInformations = $wAppointment->billingInformations[0];
                                }
                                //var_dump($wAppointment->billingInformations);exit();
			}
			
			$this->renderPartial('_adminForm',array(
				'wAppointment' => $wAppointment,
                                'wBillingInformations' => $billingInformations
			),false,true);
			/* $this->render('_adminForm',array(
				'wAppointment' => $wAppointment
			)); */
		}
		
	}
        
        public function actionSetAdminForm(){
                //For transactions
                Yii::app()->db->autoCommit = false;
                $transAction = Yii::app()->db->beginTransaction();
                $superOk = false;
                $message = null;
                if($_POST != null){
                    //
                    if($_POST["ExitAppointment"]["appointment_from_date"] != null){
                        $dateTime = $_POST["ExitAppointment"]["appointment_from_date"];
                        if(Zend_Date::isDate($dateTime,'YYYY-MM-dd HH:mm:ss')) {
                            $wAppointment = ExitAppointment::model()
                                ->with('appointmentStatus','billingInformations','appointmentBooker')
                                ->find('appointment_from_date = :dateTime AND appointment_room_id = :roomId',array(':dateTime' => $dateTime,':roomId' => $_POST['ExitAppointment']['appointment_room_id']));
                        }
                    }
                    // if it changes to free
                    if($_POST["AppointmentStatus"]["status_id"] == exitConfig::EXIT_FREE_APPOINTMENT){
                        $wAppointment->setAttributes(array(
                            'appointment_booker_id' => null,
                            'appointment_code' => self::getUniqId(),
                            'appointment_status' => exitConfig::EXIT_FREE_APPOINTMENT,
                            'appointment_modified' => new CDbExpression("NOW()")
                        ));
                        if($wAppointment->billingInformations != null){
                            foreach ($wAppointment->billingInformations as $billingInfo){
                                $superOk = $billingInfo->delete();
                            }
                        }
                        
                        if((($wAppointment->billingInformations == null)AND($wAppointment->appointmentBooker == null))OR($superOk == true)){
                            $superOk = $wAppointment->save();                            
                        }

                    } else if($_POST["AppointmentStatus"]["status_id"] != null){
                        $userId = $wAppointment->appointment_booker_id;
                        if($userId == null){
                            $userId = Yii::app()->user->getId();
                        }
                        
                        $wAppointment->setAttributes(array(
                            'appointment_booker_id' => $userId,
                            'appointment_status' => $_POST["AppointmentStatus"]["status_id"],
                            'appointment_modified' => new CDbExpression("NOW()")
                        ));
                        $superOk = $wAppointment->save();
                        
                        if($wAppointment->billingInformations != null){
                            if($superOk == true){
                                $superOk = $wAppointment->billingInformations[0]->delete();
                            }
                        }
			
			if(
				($this->actionValidatePayerName($_POST['BillingInformations']['payer_name'],1) == 1)
				AND($this->actionValidatePayerZipcode($_POST['BillingInformations']['payer_zipcode'],1) == 1)
				AND($this->actionValidatePayerCity($_POST['BillingInformations']['payer_city'],1) == 1)
				AND($this->actionValidateAddress($_POST['BillingInformations']['payer_street'],1) == 1)
				AND($this->actionValidatePayerHouseNum($_POST['BillingInformations']['payer_housenum'],1) == 1)
				AND($this->actionValidatePayerPhone($_POST['BillingInformations']['payer_phone'],1) == 1)
			)
			{
                            $billingInformation = new BillingInformations();
                            $billingInformation->setAttributes(array(
                                'appointment_id' => $wAppointment->appointment_id,
                                'payer_name' => $_POST['BillingInformations']['payer_name'],
                                'payer_zipcode' => $_POST['BillingInformations']['payer_zipcode'],
                                'payer_city' => $_POST['BillingInformations']['payer_city'],
                                'payer_street' => $_POST['BillingInformations']['payer_street'],
                                'payer_housenum' => $_POST['BillingInformations']['payer_housenum'],
                                'payer_phone' => $_POST['BillingInformations']['payer_phone'],
                                'have_to_add_bill' => $_POST['BillingInformations']['have_to_add_bill']
                            ));
                            
                            if($superOk == true){
                                $superOk = $billingInformation->save();
                            }                            
                        }
                    }
                    
                    if($superOk == true){
                        $transAction->commit();
                        $message = Yii::t('ExitAppointment', 'Success');
                    } else {
                        $transAction->rollback();
                        $message = Yii::t('ExitAppointment', 'Failed');
                    }
                }
                
                $this->renderPartial('_setAdminForm',array(
                    'message' => $message
                ),false,true);
                //var_dump($_POST["AppointmentStatus"]["status_id"]);
		//var_dump($_POST["ExitAppointment"]);
                //var_dump($_POST['BillingInformations']);
                
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
        
}