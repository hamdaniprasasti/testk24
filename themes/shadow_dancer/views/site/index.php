<?php
  $baseUrl = Yii::app()->theme->baseUrl;
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://www.google.com/jsapi');
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile($baseUrl.'/js/jquery.gvChart-1.0.1.min.js');
  $cs->registerScriptFile($baseUrl.'/js/pbs.init.js');
  $cs->registerCssFile($baseUrl.'/css/jquery.css');

?>
<div id="mainmenu">

  <?php $this->widget('zii.widgets.CMenu',array(
    'items'=>array(
      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    ),
  )); ?>
</div>
<br><br>
<h1>Welcome to<?php echo CHtml::encode(Yii::app()->name); ?></h1>
