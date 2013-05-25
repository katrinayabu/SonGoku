<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CoRES Registration</title>
<link rel="icon" href="img/cores.png" />
<link type="text/css" rel="stylesheet" href="css/index.css" />
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery_cores.js"></script>
<script language="javascript">
function postDataReturnText(url, data, callback){
		alert(data);
	var XMLHttpRequestObject = false;
	
	if(window.XMLHttpRequest){
		XMLHttpRequestObject = new XMLHttpRequest();
	}
	else if(window.ActiveXObject){
		XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	if (XMLHttpRequestObject){
		XMLHttpRequestObject.open("POST", url);
		XMLHttpRequestObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		XMLHttpRequestObject.onreadystatechange = function(){
			if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200){
				callback(XMLHttpRequestObject.responseText);
				delete XMLHttpRequestObject;
				XMLHttpRequestObject = null;
			}
		}
		XMLHttpRequestObject.send(data);
	}
}



function markdisplay(text){
	
	document.getElementById('targetDiv').innerHTML = text;
}

/**function lastnamemuya(markmuya){
	var muyamuya = 'message='+markmuya
	postDataReturnText('search.php', muyamuya, markdisplay);
}
function firstnamemuya(markmuya){
	
	postDataReturnText('search.php', 'firstnamemuya='+markmuya, markdisplay);
}**/

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
    <td width="51%">FLASHHHHHHH!!</td> <!-- flash place -->
    <td width="6%">&nbsp;</td> <!-- imageregister -->
    <td width="43%">
   <!-- <img src="img/sidebar_reg.png" style="float:left;" /> -->
   
   
  <div class="sidebar1">
   	<div class="contentborder">
    <form action="search.php" method="post">
    <table width="455" border="0" cellspacing="0" cellpadding="3"  align="center">
      <tr>
        <td width="81"><b><span>Name</span></b></td>
        <td width="106">&nbsp;</td>
        <td width="250">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      	<td><span id="lastname" class="sidebartext1" >Last:</span></td>
        <td><input class="sidebartextbox" autofocus type="name" name="lastname" onKeyUp="lastnamemuya(this.value)" onFocus="document.getElementById('lastname').style.color='#000'" onBlur="document.getElementById('lastname').style.color='#999'" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span id="firstname" class="sidebartext1">First:</span></td>
        <td><input class="sidebartextbox" type="name" name="firstname" onKeyUp="firstnamemuya(this.value)"  onFocus="document.getElementById('firstname').style.color='#000'" onBlur="document.getElementById('firstname').style.color='#999'" /></td>
      </tr>

      <tr>
      	<td><input type="submit"></td>
        <td></td>
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



</body>
</html>
