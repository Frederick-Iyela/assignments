// JavaScript Document

var addBtn = document.getElementById('add-btn');
var ulList = document.getElementById('todo-list');
var entry;
var listEntry = document.getElementById('item');

var bind = function(elem, ev, func){
	if(window.addEventListener){
		elem.addEventListener(ev, func, false);
	}
	else{
		elem.attachEvent('on' + ev, func);
	}
};

var removeCurrent = function() {

	var todoEntry = document.getElementsByTagName('li');
	var total = todoEntry.length;

	for(var i = 0; i < total; i++){

		todoEntry[i].className = '';
	}
};

bind(addBtn, 'click', function(ev){
	entry = document.createElement('li');
	
	if(listEntry){
		ulList.appendChild(entry);
		entry.innerHTML = '<a>' + listEntry.value + '</a>';
		listEntry.value = '';
		entry.className = '';
	}
	
});

bind(listEntry, 'change', function(ev){
	entry = document.createElement('li');
	
	if(listEntry){
		ulList.appendChild(entry);
		entry.innerHTML = '<a>' + listEntry.value + '</a>';
		listEntry.value = '';
		entry.className = '';
	}
	
});

