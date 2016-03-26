<tr>
    <td class="t_left"></td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?></td>
	<td class="t_description"><?php echo CHtml::encode($data->description); ?></td>
	<td class="t_right"></td>
</tr>