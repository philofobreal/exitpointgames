<?php

class AppointmentStatusController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'AppointmentStatus'),
		));
	}

	public function actionCreate() {
		$model = new AppointmentStatus;


		if (isset($_POST['AppointmentStatus'])) {
			$model->setAttributes($_POST['AppointmentStatus']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->status_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'AppointmentStatus');


		if (isset($_POST['AppointmentStatus'])) {
			$model->setAttributes($_POST['AppointmentStatus']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->status_id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'AppointmentStatus')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('AppointmentStatus');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new AppointmentStatus('search');
		$model->unsetAttributes();

		if (isset($_GET['AppointmentStatus']))
			$model->setAttributes($_GET['AppointmentStatus']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}