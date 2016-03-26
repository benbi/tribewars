<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/2.png" style="vertical-align:text-top" /> <span>Races</span>
    </div>
</div>
  
<table cellpadding="0" cellspacing="0" >
                	<thead>
                    	<tr>
                        	<td class="t_left"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/table/h_left.jpg" border="0" /></td>
                            <td class="t_name" style="padding-left:10px;">Add new race</td>
                            <td class="t_right"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/table/h_right.jpg" border="0" /></td>
                        </tr>
                    </thead>
                </table>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
