<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shadowbox.css" />
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.4.2.min.js" type="text/javascript"></script>	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/menu.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/incrementing.js" type="text/javascript"></script>
    
	<title><?php echo CHtml::encode(Setting::value('APP_NAME') .' - ' .$this->pageTitle); ?></title>
</head>

<body>
	<?php include('header.php') ?>	    
    <div id="wrapper">    	
    	<?php include('leftColumn.php') ?>
        <div id="right_column">     
			<div id="rc_body">            
				<?php echo $content; ?>
				
				<div class="clear"></div>
				        
            </div>
            
            <div id="footer"> <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/gblogo.png" align="left" /> <p> © <?php echo date('Y'); ?> Arakiri. All rights reserved.<br />Powered by <a href="http://www.gamerbreed.com"><strong>GamerBreed</strong></a> </p></div>
            <!-- rc_body Finish -->
        </div>
        <!-- right container Finish --><div class="clear"></div>
    </div>
    <!-- wrapper Finish -->
</body>
</html>