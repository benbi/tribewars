<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/images.png" style="vertical-align:text-top" /> <span>Images</span>
    </div>
</div>

<h1>View Image #<?php echo $model->id; ?></h1>

<div class="detail-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			array(
				'label'=>'Image',
				'type'=>'raw',
				'value'=>CHtml::image(Yii::app()->controller->createUrl('image/load', array('id'=>$model->id))),
			),
			'type',
			'name',
			'width',
			'height',
		),
		'cssFile'=>'main.css'
	)); ?>
</div>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/add.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('create'), array('title'=>'Create new item')); ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/edit.png', 'Create new item', array('title'=>'Edit this item', 'border'=>0)), array('update', 'id'=>$model->id), array('title'=>'Edit this item')); ?>
	</div>
</div>