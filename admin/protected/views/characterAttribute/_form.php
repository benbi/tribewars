<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'character-attribute-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'characterId'); ?>
		<?php echo $form->textField($model,'characterId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'characterId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attributeId'); ?>
		<?php echo $form->textField($model,'attributeId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'attributeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdTime'); ?>
		<?php echo $form->textField($model,'createdTime'); ?>
		<?php echo $form->error($model,'createdTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createdUserId'); ?>
		<?php echo $form->textField($model,'createdUserId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'createdUserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedTime'); ?>
		<?php echo $form->textField($model,'updatedTime'); ?>
		<?php echo $form->error($model,'updatedTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedUserId'); ?>
		<?php echo $form->textField($model,'updatedUserId',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'updatedUserId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->