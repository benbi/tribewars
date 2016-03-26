<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/images.png" style="vertical-align:text-top" /> <span>Images</span>
    </div>
</div>

<h1>Create Image</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>