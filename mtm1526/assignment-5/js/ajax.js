// JavaScript Document
$(document).ready(function(){

	$('#canada').on('click', function(){

		$('#fillme').load('canada.html');
	});
	
	$('#us').on('click', function(){

		$('#fillme').load('america.html');
	});

});