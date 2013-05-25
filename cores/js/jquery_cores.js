// JavaScript Document
var countclick = 0;
var idvalue = null;
var selectvalue = null;
var selectnumvalue = 0;
var selectidA1 = 0;
var selectidA2 = 0;
var selectidA3 = 0;
var selectidA4 = 0;
var selectidA5 = 0;
var selectidA6 = 0;
var selectidA7 = 0;
var selectidA8 = 0;


// var create for session to control schedule and availability...
var session = 0;

function marksubmit(){
	alert("Want to proceed your registration?");
	form.submit();	
}

function checkselect(selectidcode, whatvalue){		// controls redundancy of input
	var markmuya1 = 0;
	var markmuya2 = 0;
	var markmuya3 = 0;
	var markmuya4 = 0;
	var markmuya5 = 0;
	var markmuya6 = 0;
	var markmuya7 = 0;
	var markmuya8 = 0;
	var markmuya9 = 0;
	var markmuya10 = 0;
	var markmuya11 = 0;
	
	var schedconflict1 = 0;
	var schedconflict2 = 0;
	var schedconflict3 = 0;

	
	$("#submitbutton").show("slow");
	$("#statusname").hide("slow");
	$("#status").hide("slow");
	$("#statusname2").hide("slow");
	$("#status2").hide("slow");

	
	switch(selectidcode){
		case 1:
			selectidA1 = whatvalue;
			break;
		case 2:
			selectidA2 = whatvalue;
			break;
		case 3:
			selectidA3 = whatvalue;
			break;
		case 4:
			selectidA4 = whatvalue;

			break;
		case 5:
			selectidA5 = whatvalue;
			break;
		case 6:
			selectidA6 = whatvalue;
			break;
		case 7:
			selectidA7 = whatvalue;
			break;
		case 8:
			selectidA8 = whatvalue;
			break;
		default:
			alert("Error in values switching");
	}
	arrayvalues = new Array(8);
	arrayvalues = new Array(selectidA1, selectidA2, selectidA3, selectidA4, selectidA5, selectidA6, selectidA7, selectidA8);
	
	for(var count=0; count<=7; count++){
		
		var varvar = 0;
		varvar = arrayvalues[count];
		var markmuyamuya = parseInt(varvar);

		switch(markmuyamuya){
		case 0:
			break;
		case 1:
			markmuya1 = markmuya1 + 1;
			schedconflict1 = schedconflict1 + 1;
			break;
		case 2:
			markmuya2 = markmuya2 + 1;
			schedconflict1 = schedconflict1 + 1;
			break;
		case 3:
			markmuya3 = markmuya3 + 1;
			schedconflict2 = schedconflict2 + 1;
			break;
		case 4:
			markmuya4 = markmuya4 + 1;
			schedconflict2 = schedconflict2 + 1;
			break;
		case 5:
			markmuya5 = markmuya5 + 1;
			break;
		case 6:
			markmuya6 = markmuya6 + 1;
			break;
		case 7:
			markmuya7 = markmuya7 + 1;
			break;
		case 8:
			markmuya8 = markmuya8 + 1;
			break;
		case 9:
			markmuya9 = markmuya9 + 1;
			schedconflict3 = schedconflict3 + 1;
			break;
		case 10:
			markmuya10 = markmuya10 + 1;
			schedconflict3 = schedconflict3 + 1;
			break;
		case 11:
			markmuya11 = markmuya11 + 1;
			break;
		default:
			alert("Mark Muya!");
			break;
		}	
	} 				
	markmuyaarray = new Array(12);
	markmuyaarray = new Array(markmuya1, markmuya2, markmuya3, markmuya4, markmuya5, markmuya6, markmuya7, markmuya8, markmuya9, markmuya10, markmuya11);
	muyamark = new Array(3);
	muyamark = new Array(schedconflict1, schedconflict2, schedconflict3);
	
	for(var everyvalue = 0; everyvalue <= 10; everyvalue++){
		
			if(markmuyaarray[everyvalue] == 0 || markmuyaarray[everyvalue] == 1){
				continue;
			}
						
			if(markmuyaarray[everyvalue] > 1){
				
						$("#statusname").show("slow");
						$("#status").text('You have two common courses.');
						$("#status").show("slow");
						$("#submitbutton").hide("slow");
			}
			
	}
	for(var everyvalu = 0; everyvalu <= 2; everyvalu++){

		
			if(muyamark[everyvalu] == 2){
				
						$("#statusname2").show("slow");
						$("#status2").text("There's a sked conflict.");
						$("#status2").show("slow");
						$("#submitbutton").hide("slow");
			}
	}
	
}


$(document).ready(function() {
	$("#howmany").hide();
	$("#statusname2").hide();
	$("#statusname").hide();

	for(var m=3; m<=8; m++){
		idvalue = "#choice" + m;
		selectvalue = "#select" + m + "row";
		$(idvalue).hide();
		$(selectvalue).hide();
	}
    	 
	$("#yesmore").click(function(){				//on click of yes
		if(countclick == 0){
			$("#howmany").toggle("slow");
			$(this).val("No");
			countclick = 1;
		}
		else{
			$("#howmany").toggle("slow");
			$(this).val("Yes");
			countclick = 0;
			
		}
		
		for(var u=3; u<=8; u++){						//hides every select and choice or as a refresher...
		idvalue = "#choice" + u;
		selectvalue = "#select" + u + "row";
		$(idvalue).hide();
		$(selectvalue).hide();
		}
		
		});
	
	$("#selectnum").change(function(){				
		
		for(var y=8; y>=3; y--){						//reset hiding of values
		idvalue = "#choice" + y;
		selectvalue = "#select" + y + "row";
		$(idvalue).hide("slow");
		$(selectvalue).hide("slow");
		}
		
		selectnumvalue = $(this).val();				//retrieve value then show courses
		for(var a=selectnumvalue; a>=3; a--){
		idvalue2 = "#choice" + a;
		selectvalue2 = "#select" + a +"row";
		$(idvalue2).show("slow");
		$(selectvalue2).show("slow");
		}
		});
		
	
});

