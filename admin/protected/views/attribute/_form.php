<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'attributes-form',
	'enableAjaxValidation'=>false,
  'method'=>'post',
  'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'name',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageId', array('class'=>'title')); ?>
		<?php echo $form->fileField($model,'imageId'); ?>
		<?php echo $form->error($model,'imageId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->