<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/item.png" style="vertical-align:text-top" /> <span>Items</span>
    </div>
</div>

<h1>Update Item Recovery <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'item'=>$item)); ?>