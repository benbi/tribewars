<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shadowbox.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.qtip.css" />
		
	<!-- aToolTip css -->
	<link type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/atooltip.css" rel="stylesheet"  media="screen" />
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/ssf4.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/shadowbox.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.qtip.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/atooltip/js/jquery.atooltip.min.js"></script>

	<script type="text/javascript"> 
		Cufon.replace('#container_whole h1');
		Cufon.replace('#container_left h1');
		Cufon.replace('.wm_body h1');
		Cufon.replace('#container_rb h1', {
			textShadow: '#333 1px 1px, #333 -1px -1px'
		});

		$(function() {
			<?php if($this->layout == "//layouts/column2" || $this->layout == "column2"): ?>
			$('html, body').animate({ scrollTop: $('#container_right').offset().top }, 'slow');
			<?php else: ?>
			$('html, body').animate({ scrollTop: $('#container_whole').offset().top }, 'slow');
			<?php endif; ?>
		});
	</script>

	<title><?php echo CHtml::encode(Setting::value('APP_NAME') .' - ' .$this->pageTitle); ?></title>
</head>

<body>

<div id="footerImg">

  <!-- Start Header -->
  <div id="header">
    <ul id="menu">
      <li id="menus1">
        <h1 class="menuTitle">General</h1>
          <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>Yii::app()->homeUrl),
				array('label'=>'Inventory',  'url'=>array('/inventory/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Players List', 'url'=>array('/player/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
      </li>
      <li id="menus2">
        <h1 class="menuTitle">City</h1>
        <ul>
           <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Market', 'url'=>array('/market'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
        </ul>
      </li>
      <li id="menus3">
        <h1 class="menuTitle">Pages</h1>
      
      </li>
      <li id="menus4">
        <h1 class="menuTitle">Setting</h1>
       
      </li>
    </ul>
  </div>
  <!-- End header -->

  <!-- Start wrapper -->

  <div id="wrapper">

    <!-- Start wrapper_content -->
    <div id="wrapper_content">

		<?php echo $content; ?>
		
      <div style="clear:both"></div>

      <div id="footer"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/gblogo.png" align="left" /> <p> © <?php echo date('Y'); ?> Arakiri. All rights reserved.<br />
        Powered by <a href="http://www.gamerbreed.com"><strong>GamerBreed</strong></a> </p></div>

    </div>
    <!-- End wrapper_content -->

    <div style="clear:both"> </div>

  </div>
  <!-- End wrapper -->

</div>
<!-- End footerImg -->


</body>
</html>
