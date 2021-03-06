<?php

/**
 * This is the model base class for the table "exit_appointment_status".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AppointmentStatus".
 *
 * Columns in table "exit_appointment_status" available as properties of the model,
 * followed by relations of table "exit_appointment_status" available as properties of the model.
 *
 * @property integer $status_id
 * @property string $status_name
 *
 * @property ExitAppointment[] $exitAppointments
 */
abstract class BaseAppointmentStatus extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exit_appointment_status';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AppointmentStatus|AppointmentStatuses', $n);
	}

	public static function representingColumn() {
		return 'status_name';
	}

	public function rules() {
		return array(
			array('status_name', 'required'),
			array('status_name', 'length', 'max'=>45),
			array('status_id, status_name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'exitAppointments' => array(self::HAS_MANY, 'ExitAppointment', 'appointment_status'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'status_id' => Yii::t('app', 'Status'),
			'status_name' => Yii::t('app', 'Status Name'),
			'exitAppointments' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('status_id', $this->status_id);
		$criteria->compare('status_name', $this->status_name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}