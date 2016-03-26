<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'character-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'name',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userId', array('class'=>'title')); ?>
		<?php echo $form->dropDownList($model,'userId', CHtml::listData($users, 'id', 'username')); ?>
		<?php echo $form->error($model,'userId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classId', array('class'=>'title')); ?>
		<?php echo $form->dropDownList($model,'classId', CHtml::listData($classes, 'id', 'name')); ?>
		<?php echo $form->error($model,'classId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'raceId', array('class'=>'title')); ?>
		<?php echo $form->dropDownList($model,'raceId', CHtml::listData($races, 'id', 'name')); ?>
		<?php echo $form->error($model,'raceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'level'); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hp', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'hp',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'h'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'xp', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'xp',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'xp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->