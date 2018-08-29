var check = "yes";
//request box//
function expand(box){	
	var text = document.getElementById('req_text'); 

    if (check=="yes") {
     box.style.height = "230px";
	 text.style.marginTop = "200px";
	 check = "no";
    }
	else{
     box.style.height = "200px";
	 text.style.marginTop = "0px";
	 check = "yes";
	}
}
//suggest box//
var valid = "yes";

function show(dabba){
	var font = document.getElementById('suggest_text');

	if (valid=="yes") {
     dabba.style.height = "180px";
     dabba.style.width = "20%";
     font.style.visibility = "visible";
     valid = "no";
	}
	else{
		dabba.style.height = "100px"; 
		dabba.style.width = "30%";
		font.style.visibility = "hidden";
		valid = "yes";
	}
}

var num = 1;

function news(){

	var color = document.getElementById('news');

	switch(num){

		case 1 : color.style.backgroundColor = "#00023d";
		           break;
        case 2 : color.style.backgroundColor = "#000cff";
                   break;
        case 3 : color.style.backgroundColor = "#373fef";
                   break;     
        case 4 : color.style.backgroundColor = "#5e65ff";
                   break;
        case 5 : color.style.backgroundColor = "#999dff";
                   break;
        case 6 : color.style.backgroundColor = "#babcff";
                   break;     
        case 7 : color.style.backgroundColor = "#d6d7ff";
                   break;
        case 8 : color.style.backgroundColor = "#ffffff";
                   break;           
        case 9 : color.style.backgroundColor = "black";
                   break;           
	}
	num = num + 1 ;
	if (num == 10) {
		num = 1;
	};
}

var clk = "ya";

function chat(){

	var icon = document.getElementById('chat_icon');
	var div = document.getElementById('chat');
  var txt = document.getElementById('chat_txt');
    
    if(clk=="ya"){
    	icon.style.width = "50%";
    	div.style.marginLeft = "0%";
    	div.style.backgroundColor = "red";
    	div.style.width="50%";    
        txt.style.display="block";
        txt.style.marginLeft="55%";
        txt.style.marginTop="-135px";
    	clk = "no";


    }
     else{   

     	div.style.width = "25%";
    	div.style.marginLeft = "25%";   
    	icon.style.width = "100%"; 
    	div.style.backgroundColor = "transparent";      
        txt.style.display="none";
    	clk = "ya";
 
     }

}
