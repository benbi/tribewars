<tr>
    <td class="t_left"></td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	</td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->race->name), array('/race/view', 'id'=>$data->id)); ?>
	</td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->classes->name), array('/classes/view', 'id'=>$data->id)); ?>
	</td>
	<td>
		<?php echo CHtml::encode($data->level); ?>
	</td>
	<td>
		<?php echo CHtml::encode($data->xp); ?>
    </td>
	<td class="t_right"></td>
</tr>