<div id="left_column">
	<a href="index.html" id="nav_home" >&nbsp;</a>
    <ul id="menu_left">
    	<li>
        	<a href="#">Character</a>
            	<?php $this->widget('zii.widgets.CMenu',array('id'=>'bob',
					'items'=>array(
						array('label'=>'Home', 'url'=>array('site/index')),
						array('label'=>'Register', 'url'=>array('user/create'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Classes', 'url'=>array('classes/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Races', 'url'=>array('race/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Item Types', 'url'=>array('itemType/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Items', 'url'=>array('item/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Attributes', 'url'=>array('attribute/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Characters', 'url'=>array('character/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Stats', 'url'=>array('stat/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>                    
		</li>
                
		<li>
			<a href="#">Characteristics</a>
			<ul class="mlin_item">
            	<li><a href="races.html">Races</a></li>
                <li><a href="classes.html">Classes</a></li>
				<li><a href="attributes.html">Attributes</a></li>
				<li><a href="skills.html">Skills</a></li>
			</ul>
		</li>
		<li>
        	<a href="#">More</a>
			<ul class="mlin_item">
            	<li><a href="#">Quests</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="item.html">Items</a></li>
			</ul>
		</li>
    	<li><a href="#">Setting</a></li>
	</ul>            
</div>