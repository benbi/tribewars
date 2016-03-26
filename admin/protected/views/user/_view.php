<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastLoginTime')); ?>:</b>
	<?php echo CHtml::encode($data->lastLoginTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdTime')); ?>:</b>
	<?php echo CHtml::encode($data->createdTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdUserId')); ?>:</b>
	<?php echo CHtml::encode($data->createdUserId); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedTime')); ?>:</b>
	<?php echo CHtml::encode($data->updatedTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedUserId')); ?>:</b>
	<?php echo CHtml::encode($data->updatedUserId); ?>
	<br />

	*/ ?>

</div>