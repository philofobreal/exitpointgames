<?php

class UserController extends GxController {

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
                    'actions' => array('index', 'create', 'delete','admin', 'update', 'view', 'loginPartial', 'loginRegistry'),
                    'expression' => 'Yii::app()->user->isAdmin()==1'
                ),
                
                array(
                    'deny',
                    'actions' => array('index', 'create', 'delete','admin', 'update', 'view'),
                    'expression' => 'Yii::app()->user->isAdmin()==0'
                )
            );
        }
    
	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'User'),
		));
	}

	public function actionCreate() {
		$model = new User;


		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'User');


		if (isset($_POST['User'])) {
			$model->setAttributes($_POST['User']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'User')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('User');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new User('search');
		$model->unsetAttributes();

		if (isset($_GET['User']))
			$model->setAttributes($_GET['User']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
        
        public function actionLoginRegistry(){
            $userMessage = null;
            $wLogin = new LoginForm();
            $wRegister = new RegisterForm();
            
            $cs=Yii::app()->clientScript;
            $cs->scriptMap=array(
               '*.js' => FALSE,
               '*.css' => FALSE
            );
            Yii::app()->clientScript->registerScript('','$(\'#timeDatasPopUp\').find(\'.ui-state-default\').addClass(\'__notTheDatePicker__\');',CClientScript::POS_LOAD);
            if(isset($_POST['LoginForm']))
            {
                    $validator = new Zend_Validate_EmailAddress();
                    if ($validator->isValid($_POST['LoginForm']['email'])) {
                        $wLogin->attributes=$_POST['LoginForm'];
                        // validate user input and redirect to the previous page if valid
                        if($wLogin->validate() && $wLogin->login()){
                            if(Yii::app()->session['redirectUrl'] != null){
                                $this->redirect($this->createUrl(Yii::app()->session['redirectUrl']['controller'],Yii::app()->session['redirectUrl']['params']));
                            } else {
                                $this->redirect(Yii::app()->user->returnUrl);
                            }
                        }
                    } else {
                        $userMessage = Yii::t('user','Invalid email address!');
                    }
            } elseif (isset($_POST['RegisterForm'])) {
                $validator = new Zend_Validate_EmailAddress();
                if ($validator->isValid($_POST['RegisterForm']['email'])) {
                    $wIsUser = User::model()->find('email = :email', array(':email' => $_POST['RegisterForm']['email']));
                    if($wIsUser == null){
                        $wPassword = self::generatePassword();
                        Yii::app()->db->autoCommit = false;
                        $transAction = Yii::app()->db->beginTransaction();
                        
                        $wNewUser = new User();
                        $wNewUser->setAttributes(array(
                            'id' => null,
                            'email' => $_POST['RegisterForm']['email'],
                            'password' => $wNewUser->hashPassword($wPassword),
                            'createtime' => new CDbException('NOW()'),
                            'superuser' => 0,
                            'status' => 'new',
                            'lastvisit' => new CDbException('NOW()'),
                        ));
                        
                        $superOk = $wNewUser->save();
                        if($superOk == true) {
                                $userMessage = Yii::t('user','Thank you for register, your password has sent on email!');
                                $transAction->commit();
                                self::registrationMail($_POST['RegisterForm']['email'],$wPassword);
                        } else {
                                $userMessage = Yii::t('user','Sorry');
                                $transAction->rollback();
                        }
                        
                    } else {
                        $userMessage = Yii::t('user','You have an identity in this address!');
                    }
                } else {
                    $userMessage = Yii::t('user','Invalid email address!');
                }
            }
            
            $this->renderPartial('_loginRegistry',array('userMessage' => $userMessage),false,true);
        }
        
        public function registrationMail($email,$password) {
            $message = '<p>Regisztrációdat rögzítettük.</p>';
            $message .= '<p>Email: '.$email.'</p><p>Jelszó: '.$password.'</p></br>';
            $message .='<p>Foglaláshoz használd a megadott mailcímet és a kapott kódot.</p>';
            $message .='<p>Amennyiben nem Te kezdeményezted a regisztrációt, kérjük, tekintsd levelünket tárgytalannak.</p>';
            $message .='<p>Üdv, </br>ExitPoint Game Masterek</p>';
            $message .='<p>Ezt az email-t a rendszer automatikusan küldte, kérjük ne válaszolj rá!</p>';
            BogiMailer::sendEmail($email, Yii::t('user','Exitpoint Registration'), $message);
        }
        
        public function actionLoginPartial(){
            $this->layout = false;
            $cs=Yii::app()->clientScript;
            $cs->scriptMap=array(
               '*.js' => FALSE,
               '*.css' => FALSE
            );
            $loginModel = new LoginForm();
            $this->render('_login',array('loginModel' => $loginModel));
        }
        
        public function actionRegisterPartial() {
            $this->layout = false;
            $cs=Yii::app()->clientScript;
            $cs->scriptMap=array(
               '*.js' => FALSE,
               '*.css' => FALSE
            );
            $registerModel = new RegisterForm();
            $this->render('_register',array('registerModel' => $registerModel));
        }

        public function generatePassword() {
            $length = 10;
            $chars = array_merge(range(0,9), range('a','z'), range('A','Z'));
            shuffle($chars);
            $password = implode(array_slice($chars, 0, $length));
            return $password;
        }

        /* public function actionRenderLogin() {
            $wLogin = new LoginForm();
        } */
}