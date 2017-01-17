jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 1
        if (!isNaN(currentVal) && currentVal >1) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } 
        else
         {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(1);
        }
    });




		var radioButtons = $("input[type='radio'][name='rr']");
		var radioStates = {};
		$.each(radioButtons, function(index, rd) 
		{
		    radioStates[rd.value] = $(rd).is(':checked');
		});

		radioButtons.click(function()
		 {
		    
		    var val = $(this).val();  
		    $(this).attr('checked', (radioStates[val] = !radioStates[val]));    
		    
		    $.each(radioButtons, function(index, rd) 
		    {
		        if(rd.value !== val) {
		            radioStates[rd.value] = false; 
		        }
		    });
		});


});
