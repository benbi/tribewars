<tr>
    <td class="t_left"></td>
	<td class="t_picture">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/image/load/<?php echo CHtml::encode($data->imageId);  ?>" />
	</td>
	<td class="t_name">
		<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	</td>
	<td class="t_right"></td>
</tr>