<?php
$this->renderPartial('_form', array(
		'model' => $model,
                'freeTimes' => $freeTimes,
		'buttons' => 'create'));
?>