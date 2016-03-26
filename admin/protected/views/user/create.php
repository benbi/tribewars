<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<!-- Start container whole -->
      <div id="container_whole" >
       <div id="main_mov">
              <div id="mov_img">
                <div id="mov_details">
                
               <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
     
                </div>
              
               <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home_img.jpg"  />
               
                </div>
              <div class="mov_info">
                <h3 id="welcometitle">Welcome to admin</h3>
                <p id="home_info">Ut et augue ut sapien sodales volutpat in ac arcu. Curabitur eleifend massa id sem vehicula eget convallis ante ultrices. Vivamus et mauris leo. Aliquam dapibus purus nec lacus congue imperdiet. Vivamus ac mi lacus. Phasellus sodales justo a leo bibendum elementum. Vivamus consectetur sollicitudin arcu, quis viverra risus fringilla in...</p>
                </div>
                
                <a href="#login-wrapper" rel="shadowbox[html];height=240;width=330;options=overlayOpacity:1;"><img class="login_btn" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/login.png"  /></a>
                
            </div>
            
      </div>
      <!-- End container whole -->

