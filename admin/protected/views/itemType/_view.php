<tr>
    <td class="t_left"></td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	</td>
	<td width="150px">
		<?php echo $data->isEquipment ? 'Yes' : 'No'; ?>
	</td>
	<td class="t_right"></td>
</tr>