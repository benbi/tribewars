<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itemId')); ?>:</b>
	<?php echo CHtml::encode($data->itemId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hp')); ?>:</b>
	<?php echo CHtml::encode($data->hp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdTime')); ?>:</b>
	<?php echo CHtml::encode($data->createdTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdUserId')); ?>:</b>
	<?php echo CHtml::encode($data->createdUserId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedTime')); ?>:</b>
	<?php echo CHtml::encode($data->updatedTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedUserId')); ?>:</b>
	<?php echo CHtml::encode($data->updatedUserId); ?>
	<br />


</div>