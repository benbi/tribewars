<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/settings.png" style="vertical-align:text-top" /> <span>Settings</span>
    </div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'settings-list',
	'itemView'=>'_view',
	'template'=>$this->renderPartial('_template', null, true, true),
	'pagerCssClass'=>'floatright',
	'pager'=>array(
		'id'=>'settings-list-pager',
		'header'=>'',
		'htmlOptions'=>array('class'=>'pnav')
	),
)); ?>