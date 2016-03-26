<?php
$this->breadcrumbs=array(
	'Character Attributes',
);

$this->menu=array(
	array('label'=>'Create CharacterAttribute', 'url'=>array('create')),
	array('label'=>'Manage CharacterAttribute', 'url'=>array('admin')),
);
?>

<h1>Character Attributes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
