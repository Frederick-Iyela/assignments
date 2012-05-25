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

	entry.className = '';
};

bind(addBtn, 'click', function(ev){
	entry = document.createElement('li');
	
	if(listEntry){
		ulList.appendChild(entry);
		entry.innerHTML = listEntry.value;
		listEntry.value = '';
		//entry.className = '';
	}
	
});

bind(listEntry, 'change', function(ev){
	entry = document.createElement('li');
	
	if(listEntry){
		ulList.appendChild(entry);
		entry.innerHTML = listEntry.value;
		listEntry.value = '';
		//entry.className = '';
	}
	
});

bind(document.body, 'click', function(ev) {
	
	if(ev.target.tagName.toLowerCase() == 'li'){
		if(entry.className == 'current'){
			removeCurrent();
		}
		
		var checkEntry = ev.target;
		checkEntry.className = 'current';
	}
});

