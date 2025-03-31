function loadData(data)
{
	if(data=="btn1")
	{
		document.getElementById("para").innerHTML="paragraph about iphone X";
		document.getElementById("img").src="images/iphonex.jpg";
	}
	
	else if(data=="btn2")
	{
		document.getElementById("para").innerHTML="paragraph about iphone 11 pro";
		document.getElementById("img").src="images/iphone11.png";
	}
	
	else if(data=="btn3")
	{
		document.getElementById("para").innerHTML="paragraph about iphone 12 pro";
		document.getElementById("img").src="images/iphone12.png";
	}
	
	else alart("Invalid")
	
}

function checkpassword(){
	v1=document.getElementById("pwd1").value;
	v2=document.getElementById("pwd2").value;
	
	if(v1!=v2){
		alart("Password mismatch");
		return false;
	}
	else{
		alart("Password are matching!!!!!!");
		return true;
}
}
		
		function enableButton(){
			if (document.getElementById("chechbox").checked){
				
				document.getElementById("submitBtn").disable=false;
			}
			else{
				document.getElementById("submitBtn").disable=true;
			}
		}
		
		
function priceForLoop(){
	var iphone =[
	 {name : "iphone 11" , price : "$800"},
	 {name : "iphone 11 pro" , price : "$1100"},
	 {name : "iphone 15 pro max" , price : "$1400"}
	 ];
	 
	 var message ="list of phone (using for loop) <br>";
	 var len=iphone.length;
	 //for(initialization ; condition ; iteration ;)
		 
	 for (var i =0 ; i < len ;i++){
		 message+=iphone[i].name + ":" + iphone[i].phone + "<br>";
	 }
	 document.getElementById("para").innerHTML=message;
	 document.getElementById("img").src="images/backgroundiphone.jpg";
}

function productForInLoop(){
	var iphone={
		"iphonr X":"$800",
		"iphone 11 pro" :"$1100",
		"iphone 15 pro max" : "$1400"
	};
	var message="list of phone (using for loop) <br>";
	//for (variable in object )
		for (var key in iphone ){
			message += key +"; " + iphone[key]+"<br>";
		}
		
	document.getElementById("para").innerHTML=message;
	document.getElementById("img").src="images/backgroundiphone.jpg";
	
}
function priceHigher() {
	var iphone ={
		"iphonr X":800,
		"iphone 11 pro" :1100,
		"iphone 15 pro max" : 1400
		};
		var message="prices<br>";
		
			for(var phone in iphone){
				if(iphone[phone] >1000){
					message += phone + ": " + iphone[phone] + "<br>";
				}
			}
			document.getElementById("para").innerHTML=message;
}



function priceLower() {	
	var iphone ={
		"iphonr X":800,
		"iphone 11 pro" :1100,
		"iphone 15 pro max" : 1400
		};
		var message="prices<br>";
		
			for(var phone in iphone){
				if(iphone[phone] <1000){
					message += phone + ": " + iphone[phone] + "<br>";
				}
			}
			document.getElementById("para").innerHTML=message;
	} 
	