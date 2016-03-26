<tr>
    <td class="t_left"></td>
	<td class="t_name" width="30%">
		<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'code'=>$data->code)); ?>
	</td>
	<td class="t_name" width="30%">
		<?php echo CHtml::encode($data->name); ?>
	</td>
	<td class="t_name" width="40%">
		<?php echo $data->value; ?>
	</td>
	<td class="t_right"></td>
</tr>