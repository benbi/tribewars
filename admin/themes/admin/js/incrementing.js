$(function() {

    $("td.r_loop div").append('<div class="inc button">+</div><div class="dec button">-</div>');

    $(".button").click(function() {
        var $button = $(this);
		var $maxvalue = 49;
        var oldValue = $button.parent().find("input").val();
    
        if ($button.text() == "+") {
				if(oldValue <= $maxvalue){
    	  var newVal = parseFloat(oldValue) + 1;
    	  // AJAX save would go here
		}
    	} else {
    	  // Don't allow decrementing below zero
    	  if (oldValue >= 1) {
    	      var newVal = parseFloat(oldValue) - 1;
    	      // AJAX save would go here
    	  }
    	}
    	$button.parent().find("input").val(newVal);
    });

});