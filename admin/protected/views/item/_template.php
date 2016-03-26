<?php echo '{summary}'; ?>

<table cellpadding="0" cellspacing="0" class="tinfo">
    <thead>
        <tr>
            <td class="t_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/table/h_left.jpg" border="0" /></td>
            <td class="t_picture">Image</td>
            <td class="t_name">Name</td>
            <td>Type</td>
            <td>Is Equipment</td>
            <td>Minimum Level</td>
            <td>Cost</td>            
            <td class="t_right"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/table/h_right.jpg" border="0" /></td>
        </tr>
    </thead>
    <tbody>
    	<?php echo '{items}'; ?>
    </tbody>
</table>

<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl .'/images/add.png', 'Create new item', array('title'=>'Create new item', 'border'=>0)), array('create'), array('title'=>'Create new item')); ?>
	</div>
	<?php echo '{pager}'; ?>
</div>