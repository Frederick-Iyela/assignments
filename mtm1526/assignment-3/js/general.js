// JavaScript Document

var isHidden = false;

$(document).ready(function() {
	$('form').on('submit', function(ev) {
		
		ev.preventDefault();
		
		var chosenColour = $('#color').val();
		
		switch($('#property').val()){
			case 'Background Colour':
				$('.circle').css('background-color', chosenColour);
			break;
			
			case 'Border Colour':
				$('.circle').css('border-color', chosenColour);
			break;
			
			case 'Colour':
				$('.circle span').css('color', chosenColour);
			break;
		}
		
	});
	
	$('#hide-show').on('click', function(){
		if(isHidden==false){
			$('.circle').hide().fadeOut(500);
			isHidden = true;
		}
		else{
			$('.circle').hide().fadeIn(500);
			isHidden = false;
		}
	});
	
});