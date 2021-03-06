<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-recovery-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'itemId', array('class'=>'title')); ?>
		<?php echo CHtml::encode($item->name); ?>
		<?php echo $form->error($model,'itemId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'hp'); ?>
		<?php echo $form->error($model,'hp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->