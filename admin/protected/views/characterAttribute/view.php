<?php
$this->breadcrumbs=array(
	'Character Attributes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CharacterAttribute', 'url'=>array('index')),
	array('label'=>'Create CharacterAttribute', 'url'=>array('create')),
	array('label'=>'Update CharacterAttribute', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CharacterAttribute', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CharacterAttribute', 'url'=>array('admin')),
);
?>

<h1>View CharacterAttribute #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'characterId',
		'attributeId',
		'value',
		'createdTime',
		'createdUserId',
		'updatedTime',
		'updatedUserId',
	),
)); ?>
