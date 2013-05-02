<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'billing-informations-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>
		<div class="row">
		<?php //echo $form->labelEx($model,'appointment_id'); ?>
		<?php //echo $form->dropDownList($model, 'appointment_id', GxHtml::listDataEx(ExitAppointment::model()->findAll(array('limit'=>100)),'appointment_id','appointment_from_date')); ?>
		<?php //echo $form->error($model,'appointment_id'); ?>
		<?php echo $form->labelEx($freeTimes,'appointment_from_date'); ?>
		<?php echo $form->dropDownList($freeTimes, 'appointment_from_date', GxHtml::listDataEx(ExitAppointmentFree::model()->findAll(array('limit'=>100)),'appointment_from_date','appointment_from_date')); ?>
		<?php echo $form->error($freeTimes,'appointment_from_date'); ?>
		
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_name'); ?>
		<?php echo $form->textField($model, 'payer_name', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'payer_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_phone'); ?>
		<?php echo $form->textField($model, 'payer_phone', array('maxlength' => 50)); ?>
		<?php echo $form->error($model,'payer_phone'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_zipcode'); ?>
		<?php echo $form->textField($model, 'payer_zipcode', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'payer_zipcode'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_city'); ?>
		<?php echo $form->textField($model, 'payer_city', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'payer_city'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_street'); ?>
		<?php echo $form->textField($model, 'payer_street', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'payer_street'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'payer_housenum'); ?>
		<?php echo $form->textField($model, 'payer_housenum', array('maxlength' => 25)); ?>
		<?php echo $form->error($model,'payer_housenum'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'have_to_add_bill'); ?>
		<?php echo $form->checkBox($model, 'have_to_add_bill'); ?>
		<?php echo $form->error($model,'have_to_add_bill'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->