// JavaScript Document

$(document).ready(function() {
	$(form).on('submit', function(ev) {
		
		ev.preventDefault();
		
		var chosenColour = $('#color').val();
		
		switch($('#property').val()){
			case 'Background Colour':
				$('.circle').css('background-color', chosenColour);
			break;
			
			case 'Border Colour':
			break;
			
			case 'Colour':
			break;
		}
		
	});
	
});