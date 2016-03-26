<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/item.png" style="vertical-align:text-top" /> <span>Settings</span>
    </div>
</div>

<h1>View Setting "<?php echo $model->code; ?>"</h1>

<div class="detai-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'code',
			'name',
			'value',
			'createdTime',
			'createdUserId',
			'updatedTime',
			'updatedUserId',
		),
		'cssFile'=>'main.css'
	)); ?>
</div>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/edit.png', 'Edit this item', array('title'=>'Edit this item', 'border'=>0)), array('update', 'code'=>$model->code), array('title'=>'Edit this item')); ?>
	</div>
</div>