<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/attributes.png" style="vertical-align:text-top" /> <span>Characters</span>
    </div>
</div>

<h1>View Character #<?php echo $model->id; ?></h1>

<div class="detail-view">
<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
			array(
				'label'=>'Race Name',
				'type'=>'raw',
				'value'=>$model->race->name		
			),
			array(
				'label'=>'Class Name',
				'type'=>'raw',
				'value'=>$model->classes->name		
			),
			'user.username',
			'level',
			'xp',
		),
		'cssFile'=>'main.css'
		//'itemTemplate'=>$this->renderPartial('_viewTemplate', null, true, true),
	)); 
?>
</div>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/add.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('create'), array('title'=>'Create new item')); ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/edit.png', 'Create new item', array('title'=>'Edit this item', 'border'=>0)), array('update', 'id'=>$model->id), array('title'=>'Edit this item')); ?>
	</div>
	<div class="floatright toolboxright">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/delete.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('delete', 'id'=>$model->id), array('title'=>'Delete this item', 'onclick'=>'return confirm("Are you sure do delete this item?");')); ?>
	</div>
</div>