<?php
$this->breadcrumbs=array(
	'Character Attributes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CharacterAttribute', 'url'=>array('index')),
	array('label'=>'Manage CharacterAttribute', 'url'=>array('admin')),
);
?>

<h1>Create CharacterAttribute</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>