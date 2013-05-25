// JavaScript Document
var numcourse = 0;
var lastname = null;
var firstname = null;
var email = null;
var contact = null;
var firstcourse = null;
var secondcourse = null;
var thirdcourse = null;
var fourthcourse = null;
var fifthcourse = null;
var sixthcourse = null;
var seventhcourse = null;
var eighthcourse = null;

function checknumcourse(numberofcourse)
{
	document.getElementById('nextbutton2').style.visibility='visible';

numcourse = numberofcourse
var idtag = null;
var inwords = null;
var idtag = null; // so that everytime it is called, it is initialized to null
	
	for(var u=0; u<=10; u++)
		{
			switch(u)
			{
				case 1:
					inwords = "first";
					break;
				case 2:
					inwords = "second";
					break;
				case 3:
					inwords = "third";
					break;
				case 4:
					inwords = "fourth";
					break;
				case 5:
					inwords = "fifth";
					break;
				case 6:
					inwords = "sixth";
					break;
				case 7:
					inwords = "seventh";
					break;
				
				
				default:
					inwords = "first";
					break;
			}
			
			idtag = inwords + "course";
			IDTAG = inwords + "Course";
			document.getElementById(IDTAG).style.visibility='hidden';
			document.getElementById(idtag).style.visibility='hidden';
		}
	
var idtag = null;
var inwords = null;
var idtag = null; // so that everytime it is called, it is initialized to null
	
	
		for(var i=0; i<=numcourse; i++)
		{
			switch(i)
			{
				case 1:
					inwords = "first";
					break;
				case 2:
					inwords = "second";
					break;
				case 3:
					inwords = "third";
					break;
				case 4:
					inwords = "fourth";
					break;
				case 5:
					inwords = "fifth";
					break;
				case 6:
					inwords = "sixth";
					break;
				case 7:
					inwords = "seventh";
					break;

				
				default:
					inwords = "first";
					break;
			}
			
			idtag = inwords + "course";
			IDTAG = inwords + "Course";
			document.getElementById(IDTAG).style.visibility='visible';
			document.getElementById(idtag).style.visibility='visible';
		}
}


function retrievevalue()			// retrieving all information
{

var information = new Array(lastname, firstname, email, contact, firstcourse, secondcourse, thirdcourse, fourthcourse, fifthcourse, sixthcourse, seventhcourse);

		for (var m=0; m<=12; m++)
		{
			if(information[m] == null)
			{
				continue;
			}
						
			idtagvaluevisibility = "c" + m;
			document.getElementById(idtagvaluevisibility).style.visibility='visible';
			
			var valueinfo = isNaN(information[m]);
			var valueinformation = information[m];
			var valueforM = null;
			
			if (valueinfo == false) 
			{
			    if (valueinformation == 1) {
			        valueforM = "Cybercrime/E. Hacking";
			    }
			    if (valueinformation == 2) {
			        valueforM = "Patent";
			    }
			    if (valueinformation == 3) {
			        valueforM = "Technology Development";
			    }
			    if (valueinformation == 4) {
			        valueforM = "Linux Kernel";
			    }
			    if (valueinformation == 5) {
			        valueforM = "Programming";
			    }
			    if (valueinformation == 6) {
			        valueforM = "Networking";
			    }
			    if (valueinformation == 7) {
			        valueforM = "Embedded Technology";
			    }
			    if (valueinformation == 8) {
			        valueforM = "Open Source";
			    }
			    if (valueinformation == 9) {
			        valueforM = "Database Administration";
			    }
			    if (valueinformation == 10) {
			        valueforM = "Latest Technology";
			    }
			    if (valueinformation == 11) {
			        valueforM = "Windows 8";
			    }
			    if (valueinformation == 12) {
			        valueforM = "Android OS";
			    }
			    if (valueinformation == 13) {
			        valueforM = "Cloud Technology";
			    }
			    if (valueinformation == 14) {
			        valueforM = "Mobile Technology";
			    }
			    		
			    idtagvalue = "confirmvalue" + m;
			    document.getElementById(idtagvalue).innerHTML = valueforM;
			}
			else
			{
			    idtagvalue = "confirmvalue" + m;
			    document.getElementById(idtagvalue).innerHTML = information[m];
			}
			
		}
	/**document.getElementById("confirmvalue0").innerHTML = lastname;
	document.getElementById("confirmvalue1").innerHTML = firstname;
	document.getElementById("confirmvalue2").innerHTML = email;
	document.getElementById("confirmvalue3").innerHTML = contact;
	document.getElementById("confirmvalue4").innerHTML = firstcourse;
	document.getElementById("confirmvalue5").innerHTML = secondcourse;
	document.getElementById("confirmvalue6").innerHTML = thirdcourse;
	document.getElementById("confirmvalue7").innerHTML = fourthcourse;
	**/
}

function sendvaluelastname(lname)
{
	document.getElementById('lastname').style.color='#999';
	lastname = lname;
}

function sendvaluefirstname(fname)
{
	document.getElementById('firstname').style.color='#999';
	firstname = fname;
}

function sendvalueemail(emailadd)
{
	document.getElementById('e-mail').style.color='#999';
	email = emailadd;
}

function sendvaluecontact(contactnum)
{
	document.getElementById('contact').style.color='#999';
	contact = contactnum;
}

function sendvaluefirstc(firstcoursE)
{
	document.getElementById('firstcourse').style.color='#999';
	firstcourse = firstcoursE;
	firstcourse = stringvalue(firstcourse);
}
function sendvaluesecondc(secondcoursE)
{
	document.getElementById('secondcourse').style.color='#999';
	secondcourse = secondcoursE;
	secondcourse = stringvalue(secondcourse);
}
function sendvaluethirdc(thirdcoursE)
{
	document.getElementById('thirdcourse').style.color='#999';
	thirdcourse = thirdcoursE;
	thirdcourse = stringvalue(thirdcourse);
}
function sendvaluefourthc(fourthcoursE)
{
	document.getElementById('fourthcourse').style.color='#999';
	fourthcourse = fourthcoursE;
	fourthcourse = stringvalue(fourthcourse);
}
function sendvaluefifthc(fifthcoursE)
{
	document.getElementById('fifthcourse').style.color='#999';
	fifthcourse = fifthcoursE;
	fifthcourse = stringvalue(fifthcourse);
}
function sendvaluesixthc(sixthcoursE)
{
	document.getElementById('sixthcourse').style.color='#999';
	sixthcourse = sixthcoursE;
	sixthcourse = stringvalue(sixthcourse);
}
function sendvalueseventhc(seventhcoursE)
{
	document.getElementById('seventhcourse').style.color='#999';
	seventhcourse = seventhcoursE;
	seventhcourse = stringvalue(seventhcourse);
}


function enableselect()
{
	document.getElementById('coursereg').style.visibility='visible';
	document.getElementById('numselectcourse').style.visibility='visible';
}

/**function stringvalue(categorynumber)
{

			switch(categorynumber)
			{
				case 1:
					inwords1 = "CyberCrime/Ethical Hacking";
					break;
				case 2:
					inwords1 = "Patent";
					break;
				case 3:
					inwords1 = "Technology Development";
					break;
				case 4:
					inwords1 = "Linux Kernel";
					break;
				case 5:
					inwords1 = "Programming";
					break;
				case 6:
					inwords1 = "Networking";
					break;
				case 7:
					inwords1 = "Embedded Technology";
					break;
				case 8:
					inwords1 = "Open Source";
					break;
				case 9:
					inwords1 = "Database Administration";
					break;
				case 10:
					inwords1 = "Latest Technology";
					break;
				case 11:
					inwords1 = "Windows 8";
					break;
				case 12:
					inwords1 = "Android OS";
					break;
				case 13:
					inwords1 = "Cloud Technology";
					break;
				case 14:
					inwords1 = "Mobile Technology";
					break;
				default:
					inwords1 = "first";
					break;
			}
			
			return inwords1;
}**/