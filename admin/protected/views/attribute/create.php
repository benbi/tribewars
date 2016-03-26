<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/attributes.png" style="vertical-align:text-top" /> <span>Attributes</span>
    </div>
</div>

<h1>Create Attribute</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/back.png', 'Back', array('title'=>'Back', 'border'=>0)), array('index'), array('title'=>'Back')); ?>
	</div>
</div>