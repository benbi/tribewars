<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastLoginTime'); ?>
		<?php echo $form->textField($model,'lastLoginTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdTime'); ?>
		<?php echo $form->textField($model,'createdTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'createdUserId'); ?>
		<?php echo $form->textField($model,'createdUserId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedTime'); ?>
		<?php echo $form->textField($model,'updatedTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedUserId'); ?>
		<?php echo $form->textField($model,'updatedUserId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->