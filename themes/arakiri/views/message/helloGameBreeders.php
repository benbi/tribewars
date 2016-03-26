<?php
$this->breadcrumbs=array(
	'Message'=>array('message/index'),
	'HelloGameBreeders',
);?>
<h1>Answer</h1>
<h2><?php echo $time?></h2>
<p>No, he is not!</p>
<p><?php echo CHtml::link("Goodbye", array("message/goodbye"))?></p>
