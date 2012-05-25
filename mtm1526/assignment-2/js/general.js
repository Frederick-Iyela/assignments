// JavaScript Document

var addBtn = document.getElementById('add-btn');
var ulList = document.getElementById('todo-list');
var listForm = document.getElementById('list-form');
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

bind(addBtn, 'click', function(ev){
	entry = document.createElement('li');
	
	if(listEntry){
		ulList.appendChild(entry)
		entry.innerHTML = listEntry.value;
		listEntry.value = '';
	}
	
});