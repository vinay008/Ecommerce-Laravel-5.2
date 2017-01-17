var media = $('#id_media');
  if (media.length) {
      var mediaDefaultValue = $('.file1 span.value').text();
	    var mediaCharLimit = 20;

	    $('.file1 .bt-value').click(function(){
	        $('#id_media').click();
	    });

	    media.on('change', function() {
	        var value = this.value.replace("C:\\fakepath\\", "");
	        var newValue;
	        var valueExt;
	        var charLimit;

	        if (value) {
	            newValue = value;
	            valueExt = value.split('.').reverse()[0];
	            if (newValue.length > mediaCharLimit) {
	                charLimit = mediaCharLimit - valueExt.length;

	                // truncate chars.
	                newValue = $.trim(value).substring(0, charLimit) + '…';

	                // if file name has extension, add it to newValue.
	                if (valueExt.length) {
	                    newValue += valueExt;
	                }
	            }
	        }
	        else {
        newValue = mediaDefaultValue;
      }
    $(this).parent().find('span.value').text(newValue);
  });
}