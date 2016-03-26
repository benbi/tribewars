<?php
$this->breadcrumbs=array(
	'Character Attributes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CharacterAttribute', 'url'=>array('index')),
	array('label'=>'Create CharacterAttribute', 'url'=>array('create')),
	array('label'=>'View CharacterAttribute', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CharacterAttribute', 'url'=>array('admin')),
);
?>

<h1>Update CharacterAttribute <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>