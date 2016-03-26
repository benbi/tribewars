<tr>
    <td class="t_left"></td>
	<td class="t_picture">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/load/<?php echo CHtml::encode($data->imageId);  ?>" />
	</td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	</td>
	<td>
		<?php echo CHtml::encode($data->type->name); ?>
	</td>
	<td>
		<?php echo $data->type->isEquipment ? 'Yes' : 'No'; ?>
	</td>
	<td>
		<?php echo $data->minLevel; ?>
	</td>
	<td>
		<?php echo $data->price; ?>
	</td>
	<td class="t_right"></td>
</tr>