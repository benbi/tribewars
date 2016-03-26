<div id="rc_title">
    <div id="rc_title_in" style="padding-left:6px;">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/heroes.png" style="vertical-align:text-top" /> <span>Characters</span>
    </div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'id'=>'characters-list',
	'itemView'=>'_view',
	'template'=>$this->renderPartial('_template', null, true, true),
	'pagerCssClass'=>'floatright',
	'pager'=>array(
		'id'=>'characters-list-pager',
		'header'=>'',
		'htmlOptions'=>array('class'=>'pnav')
	),
)); ?>