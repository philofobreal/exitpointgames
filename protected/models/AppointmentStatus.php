<?php

Yii::import('application.models._base.BaseAppointmentStatus');

class AppointmentStatus extends BaseAppointmentStatus
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}