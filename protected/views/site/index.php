<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu">
    <head>
        <title>exitpoint</title>

        <META name="viewport" content="width=device-width , initial-scale=0.6, maximum-scale=0.6; user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="language" content="Hungarian, English, Spanish" />
        <meta name="doc-type" content="HTML5" />
        <meta name="doc-class" content="Published" />
        <meta name="distribution" content="Global" />
        <meta name="resource-type" content="document" />

        <meta name="revisit-after" content="5 days" />
        <meta name="robots" content="index,follow" />
        <meta name="author" content="www.fustos.com" />
        <meta name="copyright" content="Copyright (c) 2011 fustos.com" />

        <meta name="description" content=""/>
        <meta name="keywords" content=""/>

        <link type="image/ico" rel="Shortcut Icon" href="images/favicon.ico"/> 
	
    </head>
<style type="text/css">
* {
	margin:0px;
	padding:0px;
	border:none;
}
html {
	background:#DFE0DA;
}
html, body {
	width:100%;
	min-width:400px;
	height:100%;
	min-height:600px;
}
body {
	background: #000;
}
.centerClass {
	width:400px;
	height:600px;
	margin:auto;
        background:url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/nyitolap.jpg) center no-repeat;
}
.imgMap {
	display:none;
	width:100%;
	height:100%;
}
.link a{
	width:200px;
	height:200px;
	position: absolute;
}
.link_1 a{
	margin: 50px 200px;
	background:url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/openSiteSprite.png) 0px 0px no-repeat;
}
.link_2 a{
	margin: 260px 200px;
	background:url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/openSiteSprite.png) 0px -201px no-repeat;
}
.link_1 a:hover{
	margin: 50px 200px;
	background:url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/openSiteSprite.png) -200px 0px no-repeat;
}
.link_2 a:hover{
	margin: 260px 200px;
	background:url(<?php echo Yii::app()->getBaseUrl(true); ?>/images/openSiteSprite.png) -200px -201px no-repeat;
}
/*
a.linkTag_1 {
	background:url(/images/openSiteSprite.png) 0px 0px no-repeat;
}
a.linkTag_1:hover {
	border:#FF0000;
	background:1url(/images/openSiteSprite.png) -200px 0px no-repeat;
}
a.linkTag_2 {
	background:url(/images/openSiteSprite.png) 0px -201px no-repeat;
}
a.linkTag_2:hover {
	background:1url(/images/openSiteSprite.png) -200px -201px no-repeat;
}*/
</style>
</head>
<body>
<div class="centerClass">
<div class="link link_1"><?php echo CHtml::link(Yii::t('exitpoint',''),array('site/madness')); ?></div>
<div class="link link_2"><?php echo CHtml::link(Yii::t('exitpoint',''),array('site/rabbithole')); ?></div>
</div>
</body>
</html>

<?php
    //var_dump(Yii::app()->cms->createUrl('Base'));
    //$this->widget('cms.widgets.CmsBlock',array('name'=>'Base'));
?>