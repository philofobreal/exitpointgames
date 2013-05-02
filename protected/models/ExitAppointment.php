<?php

Yii::import('application.models._base.BaseExitAppointment');

class ExitAppointment extends BaseExitAppointment
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
        
        public static function getLatestAppointment($roomId) {
            $biggestDate = Yii::app()->db->createCommand()
                ->select('MAX(appointment_from_date) biggestTime')
                ->from('exit_appointment')
                ->where('appointment_room_id = :roomId',array(':roomId' => $roomId))
                ->queryRow();
            return $biggestDate['biggestTime'];
        }
}