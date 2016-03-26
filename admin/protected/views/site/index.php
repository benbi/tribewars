<!-- Start container whole -->
	<div id="container_whole" >
		<div id="main_mov">
			<div id="mov_img">
				<div id="mov_details">
             		&nbsp;
            	</div>
			</div>
			
          	<h1 id="welcometitle">Welcome to Arakiri</h1>
			
          	<div class="mov_info">
            	<p id="home_info"><p>GAMERBREED gives you the power to create your own original online real-time browser-based MMO on your website. It's fully customizable, giving you control over armies, worlds, cities, quests, resources and much, much more. Also, if you have knowledge of HTML you will be able to create themes for your own unique game!</p>

<p>
The project is still under development and it will be released under GPL licence in July this year. In the meanwhile keep up to date with the project progress in the forum or check the latest designs!</p>
            </div>
			
			<?php if(Yii::app()->user->isGuest): ?>
			<h2>Login</h2>
			
			<?php $this->widget('FlashMessage'); ?>
    	
	    		<div class="form">
					<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'action'=>array('/site/login'),
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
			<?php endif; ?>
		</div> 
  	</div>
<!-- End container whole -->