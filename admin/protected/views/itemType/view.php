<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/item.png" style="vertical-align:text-top" /> <span>Item Types</span>
    </div>
</div>

<h1>View Item Type #<?php echo $model->id; ?></h1>

<div class="detail-view">
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'id',
			'name',
			'createdTime',
			'createdUserId',
			'updatedTime',
			'updatedUserId',
		),
		'cssFile'=>'main.css'
		//'itemTemplate'=>$this->renderPartial('_viewTemplate', null, true, true),
	)); ?>
</div>