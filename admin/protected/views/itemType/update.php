<?php
$this->breadcrumbs=array(
	'Item Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemType', 'url'=>array('index')),
	array('label'=>'Create ItemType', 'url'=>array('create')),
	array('label'=>'View ItemType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemType', 'url'=>array('admin')),
);
?>

<h1>Update Item Type <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>