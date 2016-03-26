<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/1.png" style="vertical-align:text-top" /> <span>Classes</span>
    </div>
</div>

<h1>Update Class <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>