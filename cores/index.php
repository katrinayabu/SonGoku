<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CoRES Registration</title>
<link rel="icon" href="img/cores.png" />
<link type="text/css" rel="stylesheet" href="css/index.css" />
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery_cores.js"></script>
<script language="javascript" type="text/javascript" src="js/ajaxgold.js"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="javascript">
var vos = 0;
function display(text){
	var chosenv = "";
	switch(vos){
		case 1:
			chosenv = "targetDiv1";
			break;
		case 2:
			chosenv = "targetDiv2";
			break;
		case 3:
			chosenv = "targetDiv3";
			break;
		case 4:
			chosenv = "targetDiv4";
			break;
		case 5:
			chosenv = "targetDiv5";
			break;
		case 6:
			chosenv = "targetDiv6";
			break;
		case 7:
			chosenv = "targetDiv7";
			break;
		case 8:
			chosenv = "targetDiv8";
			break;
		default:
			alert("ERROR: chosen variable");
	}
	
	document.getElementById(chosenv).innerHTML = text;
}

function listvalues(valueofselection){

	vos = parseInt(valueofselection);
	var chosen = "";
	switch(vos){
		case 1:
			chosen = "choice1";
			break;
		case 2:
			chosen = "choice2";
			break;
		case 3:
			chosen = "choice3";
			break;
		case 4:
			chosen = "choice4";
			break;
		case 5:
			chosen = "choice5";
			break;
		case 6:
			chosen = "choice6";
			break;
		case 7:
			chosen = "choice7";
			break;
		case 8:
			chosen = "choice8";
			break;
		default:
			alert("ERROR: chosen variable");
	}
	
	document.getElementById(chosen).style.color='#000';
	postDataReturnText('courseselect.php', '', display);
}

</script>

<!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* this 1px negative margin can be placed on any of the columns in this layout with the same corrective effect. */
ul.nav a { zoom: 1; }  /* the zoom property gives IE the hasLayout trigger it needs to correct extra whiltespace between the links */
</style>
<![endif]--></head>

<body>

<div class="container">
<table width="100%">
  <tr>
  	<td colspan="3">
  <div class="header">
  <table width="100%" border="0">
    <tr>
      <td><img src="img/coresLogo.png" width="240px" height="231px" alt="Insert Logo Here" name="Insert_logo" id="Insert_logo" style="display:block; margin-left:10px;" /></td>
      <td><center><b><span id="theme">TRACING THE ROOTS, CHANGING THROUGH TRANSIENT TIME, UPHOLDING AND DEVELOPING THROUGH VAST OF YEARS</span></b></center></td>
      <td><img src="img/coe.png" width="107px" height="102px" style="margin-left: 10px;" /></td>
      <td><img src="img/PUPLogo.png" width="112px" height="112px" /></td>
    </tr>
  </table>    
  <!-- end .header --></div>
  		</td>
 	</tr>
  <tr>
    <td width="51%"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="480" id="FlashID" accesskey="1" tabindex="1" title="cores">
      <param name="movie" value="media/cores.swf">
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="swfversion" value="6.0.65.0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="media/cores.swf" width="640" height="480">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="swfversion" value="6.0.65.0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object></td> <!-- flash place -->
    <td width="6%">&nbsp;</td> <!-- imageregister -->
    <td width="43%">
   <!-- <img src="img/sidebar_reg.png" style="float:left;" /> -->
  <div class="sidebar1">
   	<div class="contentborder">
    <form action="success.php" method="post">
    <table width="455" border="0" cellspacing="0" cellpadding="3"  align="center">
      <tr>
        <td width="81"><b><span>Name</span></b></td>
        <td width="106">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      	<td><span id="lastname" class="sidebartext1" >Last:</span></td>
        <td><input class="sidebartextbox" required autofocus type="name" name="last_name"  onFocus="document.getElementById('lastname').style.color='#000'" onBlur="document.getElementById('lastname').style.color='#999'" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span id="firstname" class="sidebartext1">First:</span></td>
        <td><input class="sidebartextbox" required type="name" name="first_name"  onFocus="document.getElementById('firstname').style.color='#000'" onBlur="document.getElementById('firstname').style.color='#999'" /></td>
      </tr>
      <tr>
      	<td><b><span>Contacts</span></b></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span id="e-mail" class="sidebartext1">E-mail:</span></td>
        <td><input class="sidebartextbox" required type="email" name="email"  onFocus="document.getElementById('e-mail').style.color='#000'" onBlur="document.getElementById('e-mail').style.color='#999'" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span id="contact" class="sidebartext1">Contact #:</span></td>
        <td><input class="sidebartextbox" required type="name" name="contact"  onFocus="document.getElementById('contact').style.color='#000'" onBlur="document.getElementById('contact').style.color='#999'" /></td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td><span id="school" class="sidebartext1">School:</span></td>
        <td><input class="sidebartextbox" required type="name" name="school"  onFocus="document.getElementById('school').style.color='#000'" onBlur="document.getElementById('school').style.color='#999'" /></td>
      </tr>
       <tr>
        <td>&nbsp;</td>
        <td><span id="course" class="sidebartext1">Course:</span></td>
        <td><input class="sidebartextbox" required type="name" name="BSin"  onFocus="document.getElementById('course').style.color='#000'" onBlur="document.getElementById('course').style.color='#999'" /></td>
      </tr>
      <tr>
      	<td colspan="3"><b><span id="year" class="sidebartext1">Year</span></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="sidebartextbox" required type="name" name="year" style="width:50px; height:25px;" onFocus="document.getElementById('year').style.color='#000'" onBlur="document.getElementById('year').style.color='#999'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><span id="section" class="sidebartext1">Section</span></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="sidebartextbox" required type="name" name="section" style="width:50px; height:25px;" onFocus="document.getElementById('section').style.color='#000'" onBlur="document.getElementById('section').style.color='#999'" /></td>
        </tr>
      <tr>
        <td><b><span>Seminars</span></b></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr id="select1row">
        <td>&nbsp;</td>
        <td><span id="choice1" class="sidebartext1">1st Choice:</span></td>
        <td><select id="targetDiv1" class='sidebartextdrop' required name='select1' type='name' onFocus="listvalues('1')" onBlur="document.getElementById('choice1').style.color='#999'" onChange='checkselect(1, this.value)'></select></td>
      </tr>
      <tr id="select2row">
        <td>&nbsp;</td>
        <td><span id="choice2" class="sidebartext1">2nd Choice:</span></td>
        <td><select id="targetDiv2" class="sidebartextdrop" required name="select2" type="name" onFocus="listvalues('2')" onBlur="document.getElementById('choice2').style.color=#999" onChange="checkselect(2, this.value)" /></select></td>
      </tr>
      
       <tr id="select3row">
        <td>&nbsp;</td>
        <td><span id="choice3" class="sidebartext1">3rd Choice:</span></td>
        <td><select id="targetDiv3" class="sidebartextdrop" type="name" name="select3" onFocus="listvalues('3')" onBlur="document.getElementById('choice3').style.color='#999'"  onChange="checkselect(3, this.value)"/></select></td>
      </tr>
      <tr id="select4row">
        <td>&nbsp;</td>
        <td><span id="choice4" class="sidebartext1">4th Choice:</span></td>
        <td><select id="targetDiv4" class="sidebartextdrop" type="name" name="select4" onFocus="listvalues('4')" onBlur="document.getElementById('choice4').style.color='#999'" onChange="checkselect(4, this.value)" /></select></td>
      </tr>
      <tr id="select5row">
        <td>&nbsp;</td>
        <td><span id="choice5" class="sidebartext1">5th Choice:</span></td>
        <td><select id="targetDiv5" class="sidebartextdrop" type="name" name="select5" onFocus="listvalues('5')" onBlur="document.getElementById('choice5').style.color='#999'" onChange="checkselect(5, this.value)" /></select></td>
      </tr>
      <tr id="select6row">
        <td>&nbsp;</td>
        <td><span id="choice6" class="sidebartext1">6th Choice:</span></td>
        <td><select id="targetDiv6" class="sidebartextdrop" type="name" name="select6" onFocus="listvalues('6')" onBlur="document.getElementById('choice6').style.color='#999'" onChange="checkselect(6, this.value)" /></select></td>
      </tr>
      <tr id="select7row">
        <td>&nbsp;</td>
        <td><span id="choice7" class="sidebartext1">7th Choice:</span></td>
        <td><select id="targetDiv7" class="sidebartextdrop" type="name" name="select7" onFocus="listvalues('7')" onBlur="document.getElementById('choice7').style.color='#999'" onChange="checkselect(7, this.value)" /></select></td>
      </tr>
      <tr id="select8row">
        <td>&nbsp;</td>
        <td><span id="choice8" class="sidebartext1">8th Choice:</span></td>
        <td><select id="targetDiv8" class="sidebartextdrop" type="name" name="select8" onFocus="listvalues('8')" onBlur="document.getElementById('choice8').style.color='#999'" onChange="checkselect(8, this.value)" /></select></td>
      </tr>
       <tr>
        <td colspan="3"><span>Add some more?&nbsp;<input id="yesmore" name="mark" type="button" value="Yes" /></span><span id="howmany">&nbsp;&nbsp;&nbsp;How many?&nbsp;<select id="selectnum"><option value="0"></option><option value="3">1</option><option value="4">2</option><option value="5">3</option><option value="6">4</option><option value="7">5</option><option value="8">6</option></select></span></td>
       </tr>
      <tr>
      	<td><span id="statusname"><b>Status</b></span></td>
        <td colspan="2"><span id="status" style="color: yellow;"></span></td>
      </tr>
      <tr>
      	<td><span id="statusname2"><b>Status</b></span></td>
        <td colspan="2"><span id="status2" style="color: yellow;"></span></td>
      </tr>
      <tr id="submitbutton">
      	<td colspan="3" id="submitbtn"><button onClick="marksubmit()" style="width:250px; height:60px; background-color:#FF9900; float:right; border:0px;"><img src="img/registerme.png" style="float:right; visibility:visible;" /></button></td>
      </tr>
      </table>
      </form>
      </div> <!-- end sidebarclick -->   
    <!-- end .sidebar1 --></div></td></tr>
  <div class="content">
    
   <!-- end .content --></div>
   <tr><td colspan="3">
  <div class="footer">
    
    <!-- end .footer --></div></td></tr></table>
  <!-- end .container --></div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
</body>
</html>