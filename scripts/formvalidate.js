


function formvalidation(){
	
	var accnofold = document.getElementById('accnofold');
	var accno = document.getElementById('accno');
	var invoiceno = document.getElementById('invoiceno');
	var seccode = document.getElementById('seccode');
	var date = document.getElementById('date');
	var totamount = document.getElementById('totamount');
	var passw = document.getElementById('password');
	
	
	
}

if(accnofold.value.length == 0){
	document.getElementById('head').innerText = "All feilds are mandatory";
	accnofold.focus();
	return false;
		
}

if(inputAlphabet(accnofold, "For the account number folder please use alphabet only")){
	if(textNumeric(accno, "Use only numbers")){
		
		if(textNumeric(invoiceno, "Use n umbers only")){
			
			if(lengthDefine(seccode, 6, 8)){
				
				if(date(date, "Select the date")){
					
					if(textNumeric(totamount, "Use only numbers")){
						
						if(textAlphanumeric(passw, "Use only letters and numbers")){
							
							return true;
						}
						
						
					}
					
				}
				
				
			}
			
		}
		
		
		
	}
	
	
	return false;
}

function textNumeric(inputtext, alertmsg){
	var numexpress = /^[0-9]+$/;
	if(inputtext.value.match(numexpress)){
		return true;
	}
	else{
		document.getElementById('invoiceno').innerText = alertMsg; 
		inputtext.focus();
		return false;
	}
}

function textNumeric(inputtext, alertmsg){
	var numexpress = /^[0-9]+$/;
	if(inputtext.value.match(numexpress)){
		return true;
	}
	else{
		document.getElementById('totamount').innerText = alertMsg; 
		inputtext.focus();
		return false;
	}
}

function textAlphanumeric(inputtext, alertmsg){
	var alphaexp = /^[0-9a-zA-Z]+$/;
	if(inputtext.vale.match(alphexp)){
		return true;
	}else{
		document.getElementById('password').innerText = alertmsg;
		
	}
	
}

function lengthDefine(inputtext, min, max){
 var uinput = inputtext.value;
	if(uinput.length >= min && uinput.length <= max){
		return true;
	}else{
		document.getElementById('p2').innerText = "* Please enter between "
		+min+ " and " +max+ " characters *"; 
		
		inputtext.focus();
		return false;
 }
}
