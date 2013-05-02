<div id="authenticater">
<div id="userMessage"><?php echo $userMessage; ?></div>
<?php
$this->widget('zii.widgets.jui.CJuiTabs', array(
    'tabs' => array(
        'Login' => array('ajax' => Yii::app()->createUrl('user/loginPartial')),
        'Register' => array('ajax' => Yii::app()->createUrl('user/registerPartial')),
    ),
    // additional javascript options for the tabs plugin
    /*'options'=>array(
        'collapsible'=>true,
    ),*/
));
?>
</div>
