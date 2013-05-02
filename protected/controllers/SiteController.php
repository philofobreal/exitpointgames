<?php

class SiteController extends Controller
{
    public function init()
    {
        
    }
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
                
            $this->layout = false;
            Yii::app()->clientScript->registerCoreScript('jquery');
            $this->render('index');
	}
        
        public function actionMadness()
	{
                
            $this->layout = false;
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.tools.min.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.easing.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.fancybox.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/smoothscroll.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.tinyscrollbar.min.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/base.js',CClientScript::POS_HEAD);
            
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/clientside/css/main.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/clientside/css/lightbox.css');

            $this->render('madness');
	}
        
        public function actionRabbithole()
	{
                
            $this->layout = false;
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.tools.min.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.easing.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.fancybox.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/smoothscroll.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jquery.tinyscrollbar.min.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/base.js',CClientScript::POS_HEAD);
            
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/clientside/css/main.css');
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/clientside/css/lightbox.css');

            $this->render('rabbithole');
	}
        
        public function actionWeekpicker(){
            $this->layout = false;
            Yii::app()->getClientScript()->registerCoreScript('jquery');
            Yii::app()->clientScript->registerCoreScript('yiiactiveform');
            Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/clientside/js/jQueryUI/js/jquery-ui-1.8.20.custom.min.js',CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/clientside/js/jQueryUI/css/custom-theme/jquery-ui-1.8.20.custom.css');
            $this->render('weekpicker');
        }

        /**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin($redirectUrl = null)
	{
                
		$model = new LoginForm;
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
        
        public function actionLogedIn(){
            if(Yii::app()->user->id != null)
                echo '1';
            else 
                echo '0';
        }
}