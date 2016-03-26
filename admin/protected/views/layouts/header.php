	<div id="header_wrapper">
        <div id="header">
            <div id="logo"></div>  
            <div id="header_right">
                <ul id="menu_top">
                	<li><?php echo CHtml::link('Home', Yii::app()->homeUrl); ?></li>
                	<li><?php echo CHtml::link('About', array('/site/page', 'view'=>'about')); ?></li>
                    <!-- <li><a href="#">Themes</a></li>
                    <li><a href="#">Setting</a></li>
                    <li><a href="#">Users</a></li> -->
                </ul>
                <div id="user_info">
					<?php echo CHtml::image(Yii::app()->theme->baseUrl .'/images/no-image.jpg', '', array('id'=>'avatar', 'width'=>'70', 'height'=>'70')); ?>
                    <div id="info">
                        Welcome<?php if($this->user != null) :?>, <?php echo $this->user->username; ?> <?php endif; ?>!
                        <h5>Welcome to Admin Panel</h5>
                        
                        <div id="nav_info">
                            <!-- <a href="#" id="nav_profile" >&nbsp;</a>
                            <a href="#" id="nav_messages" >&nbsp;</a> -->
                            <?php echo CHtml::link('&nbsp;', array('/site/logout'), array('id'=>'nav_logout')); ?>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
	</div>