<div class="form">


<?php 
$appointmentFormId = 'save-'.uniqid();
$form = $this->beginWidget('GxActiveForm', array(
    'id' => 'admin-appointment-form',
    'action' => Yii::app()->createUrl('nimda/setAdminForm'),
    'enableAjaxValidation' => false,
));?>
    <p class="note">
        <?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
    </p>
    <h3><?php echo $wAppointment->appointment_from_date; ?></h3>
    <?php echo $form->hiddenField($wAppointment,'appointment_from_date'); ?>
    <h3><?php echo $wAppointment->appointmentRoom->room_name; ?></h3>
    <h3><?php if (isset($wAppointment->appointmentBooker->email)){ echo $wAppointment->appointmentBooker->email; }?></h3>
    <?php echo $form->hiddenField($wAppointment,'appointment_room_id'); ?>
    <h4><?php echo Yii::t('ExitAppointment', 'Appointment code:'); ?> <?php echo $wAppointment->appointment_code; ?></h4>
    <?php echo $form->hiddenField($wAppointment,'appointment_code'); ?>
    
    <h5><?php echo Yii::t('ExitAppointment', 'Last changeing time:');?> <?php echo $wAppointment->appointment_modified; ?></h5>
    <?php echo $form->errorSummary($wAppointment); ?>
	<div class="row">
        <?php echo $form->labelEx($wAppointment->appointmentStatus,'appointment_status'); ?>
        <?php echo $form->dropDownList($wAppointment->appointmentStatus, 'status_id', GxHtml::listDataEx(AppointmentStatus::model()->findAll(array('limit'=>100)),'status_id','status_name')); ?>
        <?php echo $form->error($wAppointment->appointmentStatus,'appointment_status'); ?>
        </div><!-- row -->
        
        <?php // var_dump($wAppointment->billingInformations[0]->getAttributes()); exit(); ?>
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_name'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_name', array('maxlength' => 255)); ?>
        <?php echo $form->error($wBillingInformations,'payer_name'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_phone'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_phone', array('maxlength' => 50)); ?>
        <?php echo $form->error($wBillingInformations,'payer_phone'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_zipcode'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_zipcode', array('maxlength' => 4)); ?>
        <?php echo $form->error($wBillingInformations,'payer_zipcode'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_city'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_city', array('maxlength' => 100)); ?>
        <?php echo $form->error($wBillingInformations,'payer_city'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_street'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_street', array('maxlength' => 100)); ?>
        <?php echo $form->error($wBillingInformations,'payer_street'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'payer_housenum'); ?>
        <?php echo $form->textField($wBillingInformations, 'payer_housenum', array('maxlength' => 25)); ?>
        <?php echo $form->error($wBillingInformations,'payer_housenum'); ?>
        </div><!-- row -->
        <div class="row">
        <?php echo $form->labelEx($wBillingInformations,'have_to_add_bill'); ?>
        <?php echo $form->checkBox($wBillingInformations, 'have_to_add_bill'); ?>
        <?php echo $form->error($wBillingInformations,'have_to_add_bill'); ?>
        </div><!-- row -->
<div>
    <?php echo CHtml::ajaxSubmitButton(Yii::t('app', 'Save'), Yii::app()->createUrl('nimda/setAdminForm'),array('replace' => '#timeDatas'),array('name'=>$appointmentFormId,'id'=>$appointmentFormId)); ?>
</div>
<?php
    //echo GxHtml::submitButton(Yii::t('app', 'Save'));
    $this->endWidget();
?>
</div><!-- form -->
