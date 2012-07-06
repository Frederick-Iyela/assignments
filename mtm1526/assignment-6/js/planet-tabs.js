// JavaScript Document

$(document).ready(function(){
	$('#earth').on('click', function(e){
		e.preventDefault();
		$('#fillme').load('includes/earth.php');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	
});