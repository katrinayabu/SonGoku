<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link type="text/css" rel="stylesheet" href="index.css" />
<script src="js/javascript.js" language="javascript"></script>
<link rel="shortcut icon" href="img/cores.png" />
</style><!--[if IE]>
<style type="text/css"> 
/* place css fixes for all versions of IE in this conditional comment */
.twoColElsLtHdr #sidebar1 { padding-top: 30px; }
.twoColElsLtHdr #mainContent { zoom: 1; padding-top: 15px; }
/* the above proprietary zoom property gives IE the hasLayout it needs to avoid several bugs */
</style>
<![endif]-->
</head>

<body class="twoColElsLtHdr">
<div id="container">
  <div id="header">
    <h3>CoRES</h3>
  <!-- end #header --></div>
  <div class="sidebar1" style="height:310px; width:300px;">
    <div id="tablediv">
    <table width="310" border="0" cellspacing="0" cellpadding="3"  align="center">
      <tr>
        <td width="96"><span id="lastname" class="sidebartext">Last Name:</span></td>
        <td width="192"><input autofocus="autofocus" type="name" name="lt_name" onFocus="document.getElementById('lastname').style.color='#000'" onBlur="sendvaluelastname(this.value)" /></td>
      </tr>
      <tr>
        <td><span id="firstname" class="sidebartext">First Name:</span></td>
        <td><input type="name" name="ft_name" onFocus="document.getElementById('firstname').style.color='#000'" onBlur="sendvaluefirstname(this.value)" /></td>
      </tr>
      <tr>
        <td><span id="e-mail" class="sidebartext">E-mail:</span></td>
        <td><input type="email" name="e_mailo" onFocus="document.getElementById('e-mail').style.color='#000'" onBlur="sendvalueemail(this.value)" /></td>
      </tr>
      <tr>
        <td><span id="re-type" class="sidebartext" >Re-Type:</span></td>
        <td><input type="email" name="re_type" / onFocus="document.getElementById('re-type').style.color='#000'" onBlur="document.getElementById('re-type').style.color='#999'"></td>
      </tr>
      <tr>
        <td><span id="contact" class="sidebartext">Contact #:</span></td>
        <td><input type="name" name="Contact" onFocus="document.getElementById('contact').style.color='#000'" onBlur="sendvaluecontact(this.value)"/></td>
      </tr>   
      <tr>
        <td><span id="birthdate" class="sidebartext">Birthdate:</span></td>
        <td><select name='bdaym' onFocus="document.getElementById('birthdate').style.color='#000'" onBlur="document.getElementById('birthdate').style.color='#999'">
					<?php include('inc\birthdatemonth.inc'); ?>
            </select>
            <select name='bdayd' style='margin-left:0px;' onFocus="document.getElementById('birthdate').style.color='#000'" onBlur="document.getElementById('birthdate').style.color='#999'">
            		<?php include('inc\birthdateday.inc'); ?>
            </select>
             <select name='bdayy' style='margin-left:0px;' onFocus="document.getElementById('birthdate').style.color='#000'" onBlur="document.getElementById('birthdate').style.color='#999'">
            		<?php include('inc\birthdateyear.inc'); ?>
            </select>
            </td>
      </tr>
    <tr>
        <td><span id="gender" class="sidebartext">Gender:</span></td>
        <td><input type="radio" name="gndr" value="m" selected onFocus="document.getElementById('gender').style.color='#000'" onBlur="document.getElementById('gender').style.color='#999'">Male</input><input type="radio" name="gndr" value="f" onFocus="document.getElementById('gender').style.color='#000'" onBlur="document.getElementById('gender').style.color='#999'">Female</input></td>
      </tr>
      <tr>
        <td><span id="school" class="sidebartext">School:</span></td>
        <td><input type="name" name="school" onFocus="document.getElementById('school').style.color='#000'" onBlur="document.getElementById('school').style.color='#999'" /></td>
      </tr>
      <tr>
        <td><span id="yrsec" class="sidebartext">Yr. & Sec.:</span></td>
        <td><select name="year" onFocus="document.getElementById('yrsec').style.color='#000'" onBlur="document.getElementById('yrsec').style.color='#999'"><?php include('inc/year.inc') ?></select> <input type="name" size="5" placeholder="Section" name="section" onFocus="document.getElementById('yrsec').style.color='#000'" onBlur="document.getElementById('yrsec').style.color='#999'" /></td>
      </tr>
      <tr>
      	<td><span id="studnum" class="sidebartext">Student #:</span></td>
        <td><input type="name" name="studNum" onFocus="document.getElementById('studnum').style.color='#000'" onBlur="document.getElementById('studnum').style.color='#999'" /></td>
      </tr>       
      
   </table>
       <input style="top:1000px;" value="Next" type="button" onClick="enableselect()" />
  <!-- end #tablediv -->  </div>
  <!-- end #sidebar1 --></div>
  
  
  
  
  
  
   <div class="sidebar1" style="height:310px; width:300px; background-image: url(img/coresbg.png);">
    <div id="tablediv2">
    <table width="310" border="0" cellspacing="0" cellpadding="3"  align="center">
      <tr>
        <td colspan="2"><span id="coursereg" class="sidebartext" style="visibility:hidden;">No. of Courses for Registration: </span><select style="visibility:hidden;" id="numselectcourse" name="numcourse" onFocus="document.getElementById('coursereg').style.color='#000'" onChange="checknumcourse(this.value)" onBlur="document.getElementById('coursereg').style.color='#999'"><?php include('inc/coursenum.inc') ?></select></td>
      </tr>
      <tr>
        <td width="88"><span id="firstcourse" class="sidebartext" style="visibility:hidden;">First:</span></td>
        <td width="200"><select style="visibility:hidden;" id="firstCourse" name="firstCourse" onFocus="document.getElementById('firstcourse').style.color='#000'" onBlur="sendvaluefirstc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="secondcourse" class="sidebartext" style="visibility:hidden;">Second:</span></td>
        <td><select style="visibility:hidden;" id="secondCourse"  name="secondCourse" onFocus="document.getElementById('secondcourse').style.color='#000'" onBlur="sendvaluesecondc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="thirdcourse" class="sidebartext" style="visibility:hidden;">Third:</span></td>
        <td><select style="visibility:hidden;"  id="thirdCourse" name="thirdCourse" onFocus="document.getElementById('thirdcourse').style.color='#000'" onBlur="sendvaluethirdc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="fourthcourse" class="sidebartext" style="visibility:hidden;">Fourth:</span></td>
        <td><select style="visibility:hidden;" id="fourthCourse" name="fourthCourse" onFocus="document.getElementById('fourthcourse').style.color='#000'" onBlur="sendvaluefourthc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="fifthcourse" class="sidebartext" style="visibility:hidden;">Fifth:</span></td>
        <td><select style="visibility:hidden;" id="fifthCourse" name="fifthCourse" onFocus="document.getElementById('fifthcourse').style.color='#000'" onBlur="sendvaluefifthc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="sixthcourse" class="sidebartext" style="visibility:hidden;">Sixth:</span></td>
        <td><select style="visibility:hidden;" id="sixthCourse" name="sixthCourse" onFocus="document.getElementById('sixthcourse').style.color='#000'" onBlur="sendvaluesixthc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
        <td><span id="seventhcourse" class="sidebartext" style="visibility:hidden;">Seventh:</span></td>
        <td><select style="visibility:hidden;" id="seventhCourse" name="seventhCourse" onFocus="document.getElementById('seventhcourse').style.color='#000'" onBlur="sendvalueseventhc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
      	<td><span id="seventhcourse" class="sidebartext" style="visibility:hidden;">Seventh:</span></td>
        <td><select style="visibility:hidden;" id="seventhCourse" name="seventhCourse" onFocus="document.getElementById('seventhcourse').style.color='#000'" onBlur="sendvalueseventhc(this.value)"><?php include('inc/courseselect.inc'); ?></select></td>
      </tr>
      <tr>
      	<td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
      	<td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </table>
      
      <input id="nextbutton2" value="Next" type="button" onClick="retrievevalue()" style="visibility:hidden;" />

  <!-- end #tablediv2 -->  </div>
  <!-- end #sidebar1 --></div>





<div class="sidebar1" style="height:310px; width:300px;">
    <div id="tablediv3">
    <table width="310" border="0" cellspacing="0" cellpadding="3"  align="center">
      <tr>
        <td width="96"><span class="sidebartext" id="c0" style="visibility:hidden; color:#000;">Last Name:</span></td>
        <td width="192"><span id="confirmvalue0" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c1" style="visibility:hidden; color:#000;">First Name:</span></td>
        <td><span id="confirmvalue1" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c2" style="visibility:hidden; color:#000;">E-mail Address:</span></td>
        <td><span id="confirmvalue2" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c3" style="visibility:hidden; color:#000;">Contact #:</span></td>
        <td><span id="confirmvalue3" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c4" style="visibility:hidden; color:#000;">1st:</span></td>
        <td><span id="confirmvalue4" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c5" style="visibility:hidden; color:#000;">2nd:</span></td>
        <td><span id="confirmvalue5" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c6" style="visibility:hidden; color:#000;">3rd:</span></td>
        <td><span id="confirmvalue6" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c7" style="visibility:hidden; color:#000;">4th:</span></td>
        <td><span id="confirmvalue7" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c8" style="visibility:hidden; color:#000;">5th:</span></td>
        <td><span id="confirmvalue8" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c9" style="visibility:hidden; color:#000;">6th:</span></td>
        <td><span id="confirmvalue9" class="sidebartext"></span></td>
      </tr>
      <tr>
        <td><span class="sidebartext" id="c10" style="visibility:hidden; color:#000;">7th:</span></td>
        <td><span id="confirmvalue10" class="sidebartext"></span></td>
      </tr>
      
   </table>
   <input id="submitbtn" value="Confirm" type="submit"/>
  <!-- end #tablediv3 -->  </div>
  <!-- end #sidebar1 --></div>
  
  
  <!-- This clearing element should immediately follow the #mainContent div in order to force the #container div to contain all child floats -->
 <br class="clearfloat" />
   <div id="footer">
    <p align="right">About Us</p>
  <!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>