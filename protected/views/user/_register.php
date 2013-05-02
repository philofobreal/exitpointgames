
<?php $registerId = 'register-'.uniqid(); ?>
<div class="form">
<?php echo CHtml::beginForm(); ?>
<p class="note"><?php //echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

<?php echo CHtml::errorSummary($registerModel); ?>

<div class="row">
    <?php echo CHtml::activeLabel($registerModel,'email'); ?>
    <?php echo CHtml::activeTextField($registerModel,'email') ?>
</div>

<div>
    <?php echo CHtml::ajaxSubmitButton(Yii::t('login','Register'), Yii::app()->createUrl('user/loginRegistry'),array('replace' => '#authenticater'),array('name'=>$registerId,'id'=>$registerId)); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div>
<!-- form -->