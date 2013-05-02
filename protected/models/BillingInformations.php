<?php

Yii::import('application.models._base.BaseBillingInformations');

class BillingInformations extends BaseBillingInformations
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}