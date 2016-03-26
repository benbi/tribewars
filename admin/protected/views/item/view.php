<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/item.png" style="vertical-align:text-top" /> <span>Items</span>
    </div>
</div>

<h1>View Item #<?php echo $model->id; ?></h1>

<div class="detail-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'type.name',
			'name',
			'description',
			'price',
			'minLevel',
			'createdTime',
			'createdUserId',
			'updatedTime',
			'updateUserId',
		),
		'cssFile'=>'main.css'
		//'itemTemplate'=>$this->renderPartial('_viewTemplate', null, true, true),
	)); ?>
</div>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/add.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('create'), array('title'=>'Create new item')); ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/edit.png', 'Edit this item', array('title'=>'Edit this item', 'border'=>0)), array('update', 'id'=>$model->id), array('title'=>'Edit this item')); ?>
		
		<?php if($model->type->isEquipment): ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/assign.png', 'Assign attribute to this item', array('title'=>'Assign attribute to this item', 'border'=>0)), array('/itemAttribute/assign','id'=>$model->id), array('title'=>'Assign attribute to this item')); ?>
		<?php else: ?>
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/assign.png', 'Assign recovery to this item', array('title'=>'Assign recovery to this item', 'border'=>0)), array('/itemRecovery/assign','id'=>$model->id), array('title'=>'Assign recovery to this item')); ?>
		<?php endif; ?>
	</div>
	<div class="floatright toolboxright">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/delete.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('delete', 'id'=>$model->id), array('title'=>'Delete this item', 'onclick'=>'return confirm("Are you sure do delete this item?");')); ?>
	</div>
</div>