<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/item.png" style="vertical-align:text-top" /> <span>Items</span>
    </div>
</div>

<h1>Item Recoveries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
