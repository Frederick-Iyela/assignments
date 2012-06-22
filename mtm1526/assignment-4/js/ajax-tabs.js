// JavaScript Document

$(document).ready(function(){
	
	var entry;
	
	var checkEntry;
	
	$.get('earth.html', function(data){
	
		$('#fillme').load('earth.html');

	});

	$('#earth').on('click', function(){
		
		removeCurrent();
		$(this).addClass('current');
		
		$('#fillme').load('earth.html');

	});
	
	$('#jupiter').on('click', function(){
		removeCurrent();
		$(this).addClass('current');
		
		$('#fillme').load('jupiter.html');

	});

	$('#mars').on('click', function(){
		removeCurrent();
		$(this).addClass('current');
		
		$('#fillme').load('mars.html');

	});


	$('#venus').on('click', function(){
		removeCurrent();
		$(this).addClass('current');
	
		$('#fillme').load('venus.html');
		
	});
	
	
	var removeCurrent = function() {

		$('nav li').removeClass('current');
	};
	
});