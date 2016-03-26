<div id="rc_title">
    <div id="rc_title_in" style="padding-left:12px;">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/8.png" style="vertical-align:text-top" /> <span>Attributes</span>
    </div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'attributes-list',
	'itemView'=>'_view',
	'template'=>$this->renderPartial('_template', null, true, true),
	'pagerCssClass'=>'floatright',
	'pager'=>array(
		'id'=>'attributes-list-pager',
		'header'=>'',
		'htmlOptions'=>array('class'=>'pnav')
	),
)); ?>
