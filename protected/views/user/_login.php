<div class="form">
<?php 
    $loginId = 'login-'.uniqid();
    $wLoginForm = $this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableAjaxValidation'=>false,
        'enableClientValidation'=>false,
        'focus'=>array($loginModel,'email'),
    ));
?>
<p class="note"><?php //echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

<?php echo $wLoginForm->errorSummary($loginModel); ?>

<div class="row">
    <?php echo $wLoginForm->labelEx($loginModel,'email'); ?>
    <?php echo $wLoginForm->textField($loginModel,'email'); ?>
    <?php echo $wLoginForm->error($loginModel,'email'); ?>
</div>
<div class="row">
    <?php echo $wLoginForm->labelEx($loginModel,'password'); ?>
    <?php echo $wLoginForm->passwordField($loginModel,'password') ?>
</div>
<div>
    <?php echo CHtml::ajaxSubmitButton(Yii::t('login','Login'), Yii::app()->createUrl('user/loginRegistry'),array('replace' => '#authenticater'),array('name'=>$loginId,'id'=>$loginId)); ?>
</div>
<?php $this->endWidget(); ?>
</div>
<script type="text/javascript">
	$('#timeDatasPopUp .ui-widget').removeClass('ui-widget');
</script>
<!-- form -->