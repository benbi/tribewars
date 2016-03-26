<div id="rc_title">
    <div id="rc_title_in">
    <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/ticons/attributes.png" style="vertical-align:text-top" /> <span>Stats</span>
    </div>
</div>

<?php foreach (Stat::model()->getClasses() as $keyClass => $valueClass): ?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stats-form-'.$keyClass,
    'enableAjaxValidation'=>false,
    'method'=>'post',
  ));
  print "<table cellpadding=\"0\" cellspacing=\"0\" class=\"tinfo tcattributes\">";
    print "<thead>";
      print "<tr>";
	    print '<td class="t_left"><img src="'.Yii::app()->theme->baseUrl.'/images/table/h_left.jpg" border="0" /></td>';
        print "<td class=\"t_name\" width=\"80px\">$valueClass</td>";
        foreach (Stat::model()->getCharacterAttributes() as $keyAttributes => $valueAttributes) {
          print "<td>".CHtml::image(Yii::app()->controller->createUrl('image/load', array('id'=>$valueAttributes)))."</td>";
        }
		print '<td class="t_right"><img src="'.Yii::app()->theme->baseUrl.'/images/table/h_right.jpg" border="0" /></td>';
      print "</tr>";
    print "</thead>";
    print "<tbody>";
    foreach (Stat::model()->getRaces() as $keyRace => $valueRace) {
      print "<tr>";
	   print '<td class="t_left"></td>';
        print "<td class='t_name'>$valueRace</td>";
        foreach (Stat::model()->getCharacterAttributes() as $keyAttributes => $valueAttributes) {
          print '<td class="r_loop" align="center"><div style="width:65px;"><input type="text" name="Stat['.$keyRace.']['.$keyClass.']['.$keyAttributes.']" id="" class="t" placeholder="" style="width:30px"';
          if (isset($data[$keyRace][$keyClass][$keyAttributes])) {
            print ' value="'.$data[$keyRace][$keyClass][$keyAttributes].'"';
          }
          print ' /></div></td>';
        }
		print '<td class="t_right"></td>';
      print "</tr>";
    }
    print "</tbody>";
  print "</table>";
?>
<div>
	<div class="floatleft toolboxleft">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>
	<div class="floatright">
		<span>Every Save button only save the current class.</span>
	</div>
</div>
<?php
  $this->endWidget();
?>

<div class="clear"></div>
<?php endforeach; ?>