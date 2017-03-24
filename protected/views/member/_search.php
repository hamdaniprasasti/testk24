<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_member'); ?>
		<?php echo $form->textField($model,'id_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_member'); ?>
		<?php echo $form->textField($model,'alamat_member',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_member'); ?>
		<?php echo $form->textField($model,'tgl_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telfon_member'); ?>
		<?php echo $form->textField($model,'telfon_member',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->