<?php
$this->breadcrumbs=array(
	'Item Recoveries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ItemRecovery', 'url'=>array('index')),
	array('label'=>'Create ItemRecovery', 'url'=>array('create')),
	array('label'=>'Update ItemRecovery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ItemRecovery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemRecovery', 'url'=>array('admin')),
);
?>

<h1>View ItemRecovery #<?php echo $model->id; ?></h1>

<div class="detail-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'itemId',
			'hp',
			'createdTime',
			'createdUserId',
			'updatedTime',
			'updatedUserId',
		),
		'cssFile'=>'main.css'
	)); ?>
</div>