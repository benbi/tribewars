<?php 
$this->setPageTitle('Login');
?>

<!-- Start container whole -->
	<div id="container_whole" >
    	<h1>Login</h1>
    	
    	<?php $this->widget('FlashMessage'); ?>
    	
    		<div class="form">
				<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'login-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
			)); ?>
			
				<p class="note">Fields with <span class="required">*</span> are required.</p>
			
				<div class="row">
					<?php echo $form->labelEx($model,'username', array('class'=>'title')); ?>
					<?php echo $form->textField($model,'username'); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>
			
				<div class="row">
					<?php echo $form->labelEx($model,'password', array('class'=>'title')); ?>
					<?php echo $form->passwordField($model,'password'); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>
			
				<div class="row buttons">
					<?php echo CHtml::submitButton('Login'); ?>
				</div>
			
			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
<!-- End container whole -->
