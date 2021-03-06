<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_member'); ?>
		<?php echo $form->textField($model,'nama_member',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_member'); ?>
		<?php echo $form->textField($model,'alamat_member',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'alamat_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_member'); ?>
		<?php echo $form->textField($model,'tgl_member'); ?>
		<?php echo $form->error($model,'tgl_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_member'); ?>
		<?php echo $form->textField($model,'email_member',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_member'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telfon_member'); ?>
		<?php echo $form->textField($model,'telfon_member',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'telfon_member'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->