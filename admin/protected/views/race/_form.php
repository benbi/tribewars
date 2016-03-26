

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classes-form',
	'enableAjaxValidation'=>false,
  'method'=>'post',
  'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>



<div class="main_info">
    <div class="c_name">
    	
        <?php echo $form->labelEx($model,'name'); ?></br>
        <em>Name of the race.</em>
		<?php echo $form->textField($model,'name',array('size'=>15,'maxlength'=>15)); ?></br>
         <div class="form_error"><?php echo $form->error($model,'name'); ?></div>
    </div>
    
    <div class="c_description">
    	
        <?php echo $form->labelEx($model,'description'); ?><br/>
        <em>Describe your race.</em>
        <?php echo $form->textArea($model,'description',array('cols'=>60,'rows'=>5)); ?><br/>
        <div class="form_error"><?php echo $form->error($model,'description'); ?></div>
    </div>

      <div class="c_imguploader">
        <?php echo $form->labelEx($model,'imageId'); ?>
		</br>
        <em>Select an image for your race.</em>
       
        <?php echo $form->fileField($model,'imageId'); ?><!--<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/slc_img.jpg" border="0"/></a>-->
          <div class="form_error"><?php echo $form->error($model,'imageId'); ?></div>
    </div>
    <div class="clear"></div>
    <div class="o_divider"></div>
    <div class="addnew"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?><!--<a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/add_new_type.jpg" border="0" /></a> --></div>
    
</div>
<!-- main_info Finish --><?php $this->endWidget(); ?>
