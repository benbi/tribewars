<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/attributes.png" style="vertical-align:text-top" /> <span>Attributes</span>
    </div>
</div>

<h1>View Attribute #<?php echo $model->id; ?></h1>

<div class="detail-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
			array(
	      		'label'=>'Image',
	      		'type'=>'raw',
	      		'value'=>CHtml::image(Yii::app()->controller->createUrl('image/load', array('id'=>$model->imageId))),
	    	),
		),
		'cssFile'=>'main.css'
		//'itemTemplate'=>$this->renderPartial('_viewTemplate', null, true, true),
	)); ?>
</div>