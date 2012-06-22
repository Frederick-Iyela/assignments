// JavaScript Document

$(document).ready(function(){
	
	var entry;
	
	var checkEntry;
	
	$.get('earth.html', function(data){
		
		$('#fillme').load('earth.html');

	});

	$('#earth').on('click', function(ev){
		
		checkEntry = ev.target;
		checkEntry.className = 'current';
		
		$('#fillme').load('earth.html');

	});
	
	$('#jupiter').on('click', function(ev){
		removeCurrent();
		checkEntry = ev.target;
		checkEntry.className = 'current';
		
		$('#fillme').load('jupiter.html');

	});

	$('#mars').on('click', function(ev){
		removeCurrent();
		checkEntry = ev.target;
		checkEntry.className = 'current';
		
		$('#fillme').load('mars.html');

	});


	$('#venus').on('click', function(ev){
		removeCurrent();
		checkEntry = ev.target;
		checkEntry.className = 'current';
	
		$('#fillme').load('venus.html');
		
	});
	
	
	var removeCurrent = function() {

		checkEntry.className = '';
	};
	
});