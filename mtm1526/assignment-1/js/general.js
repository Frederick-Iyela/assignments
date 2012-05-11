var letter = '';

while(!letter){
	letter = prompt('Please enter a letter');
}

var limit = 20;


for(var i = 0; i < limit - 1; i++){
	
	if(i < (limit / 2)){
		var j = -1;
		while(j < i){
		document.write(letter);
		j++;
		}
	}
	
	else{
		var k = ((limit - 1) - i);
		while(k){
		document.write(letter);
			k--;
		}
	}
	
	document.write('<br>');
}
