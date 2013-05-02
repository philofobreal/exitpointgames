<?php

class RegisterForm extends CFormModel
{
	public $email;

	public function rules()
	{
		return array(
			// email is required
			array('email', 'required'),
		);
	}
}
