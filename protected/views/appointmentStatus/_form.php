<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'appointment-status-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'status_name'); ?>
		<?php echo $form->textField($model, 'status_name', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'status_name'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('exitAppointments')); ?></label>
		<?php echo $form->checkBoxList($model, 'exitAppointments', GxHtml::encodeEx(GxHtml::listDataEx(ExitAppointment::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->