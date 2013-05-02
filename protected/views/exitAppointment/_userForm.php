<?php 
    $appointmentFormId = 'save-'.uniqid();
?>


<div class="form">
<form id="appointment-form" action="<?php echo CHtml::normalizeUrl('ExitAppointment/setAppointment'); ?>" method="post">
    <p class="note">
        <?php echo Yii::t('userForm','A <span class="required">*</span> jelölt mezők kitöltése kötelező'); ?>
    </p>
    <h3><?php echo $wAppointment->appointment_from_date; ?></h3>
    <input name="ExitAppointment[appointment_from_date]" id="ExitAppointment_appointment_from_date" type="hidden" value="<?php echo $wAppointment->appointment_from_date; ?>" />
    <input name="ExitAppointment[appointment_room_id]" id="ExitAppointment_appointment_room_id" type="hidden" value="<?php echo $wAppointment->appointment_room_id; ?>" />
    <div class="row">
        <label for="BillingInformations_payer_name" class="required">
            <?php echo Yii::t('userForm','Név / Cégnév'); ?> <span class="required">*</span>
        </label>
        <?php echo CHtml::textField('BillingInformations[payer_name]', null, array('id' => 'BillingInformations_payer_name')); ?>
        <div class="errorMessage" id="BillingInformations_payer_name_em_" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_payer_phone" class="required">
            <?php echo Yii::t('userForm','Telefon'); ?> <span class="required">*</span>
        </label><span class="forexample">(06203755055)</span>
        <?php echo CHtml::textField('BillingInformations[payer_phone]', null, array('id' => 'BillingInformations_payer_phone','maxlenght'=>50)); ?>
        <div class="errorMessage" id="BillingInformations_payer_phone_em_" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_payer_zipcode" class="required">
            <?php echo Yii::t('userForm','Irányítószám'); ?><span class="required">*</span>
        </label>
        <?php echo CHtml::textField('BillingInformations[payer_zipcode]', null, array('id' => 'BillingInformations_payer_zipcode','maxlenght'=>4)); ?>
        <div class="errorMessage" id="BillingInformations_payer_zipcode_em_" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_payer_city" class="required">
            <?php echo Yii::t('userForm','Város'); ?> <span class="required">*</span>
        </label>
        <?php echo CHtml::textField('BillingInformations[payer_city]', null, array('id' => 'BillingInformations_payer_city','maxlenght'=>100)); ?>
        <div class="errorMessage" id="BillingInformations_payer_city_em_" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_payer_street" class="required">
            <?php echo Yii::t('userForm','Közterület neve, fajtája'); ?> <span class="required">*</span>
        </label>
        <?php echo CHtml::textField('BillingInformations[payer_street]', null, array('id' => 'BillingInformations_payer_street','maxlenght'=>100)); ?>
        <div class="errorMessage" id="BillingInformations_payer_street_em_" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_payer_housenum" class="required">
            <?php echo Yii::t('userForm','Házszám'); ?> <span class="required">*</span>
        </label>
        <?php echo CHtml::textField('BillingInformations[payer_housenum]', null, array('id' => 'BillingInformations_payer_housenum','maxlenght'=>25)); ?>
        <div class="errorMessage" id="BillingInformations_payer_housenum" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <label for="BillingInformations_have_to_add_bill">
            <?php echo Yii::t('userForm','Számlát igényel'); ?> 
        </label>
        <?php echo CHtml::checkBox('BillingInformations[have_to_add_bill]', true, array('id' => 'BillingInformations_have_to_add_bill','value'=>1)); ?>
        <div class="errorMessage" id="BillingInformations_have_to_add_bill" style="display:none"></div>
    </div><!-- row -->
    <div class="row">
        <?php echo CHtml::ajaxSubmitButton(Yii::t('app', 'Save'), Yii::app()->createUrl('exitAppointment/setAppointment'),array('replace' => '#timeDatas'),array('name'=>$appointmentFormId,'id'=>$appointmentFormId)); ?>
    </div><!-- row -->
</form></div><!-- form -->