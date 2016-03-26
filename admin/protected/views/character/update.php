<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/attributes.png" style="vertical-align:text-top" /> <span>Characters</span>
    </div>
</div>

<h1>Update Character <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array(
		'model'=>$model,
		'races'=>$races,
		'classes'=>$classes,
		'attributes'=>$attributes,
		'users'=>$users
)); ?>