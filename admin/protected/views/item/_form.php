<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description', array('class'=>'title')); ?>
		<?php echo $form->textArea($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typeId', array('class'=>'title')); ?>
		<?php echo $form->dropDownList($model,'typeId', CHtml::listData($types, 'id', 'name'), array('prompt'=>'')); ?>
		<?php echo $form->error($model,'typeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'price'); ?><div class="hint">Price must more than 0</div>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minLevel', array('class'=>'title')); ?>
		<?php echo $form->textField($model,'minLevel'); ?><div class="hint">Minimum level must more than 0</div>
		<?php echo $form->error($model,'minLevel'); ?>
	</div>
				
	<div class="row">
        <?php echo $form->labelEx($model,'imageId', array('class'=>'title')); ?>
        <div class="align">
        	<?php if(!$model->isNewRecord): ?>
        	<?php echo CHtml::image($this->createUrl('/image/load', array('id'=>$model->imageId))); ?>
        	<br/><br/>
        	<?php endif; ?>
        	<?php echo $form->fileField($model,'imageId'); ?>
        </div>
		<?php echo $form->error($model,'imageId'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->