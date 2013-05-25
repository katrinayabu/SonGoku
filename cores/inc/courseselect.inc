<?php

	/*	name:			courseselect.php
		description: 	This is the file converted to .inc for inclusion in index.php.
		written by:		Mark Anthony Muya
		created:		October 31, 2012 03:38AM
		modified:		October 31, 2012 03:38AM
	*/
	
	//This will generate coursename select
	
		$con = mysql_connect("localhost","root","muyamark") or die(mysql_error());
	
		mysql_select_db("cores",$con);
	
	
	$que = "SELECT * FROM course_list WHERE id = '1' ";
			$resu = mysql_query($que);
			$resul_arruy = mysql_fetch_array($resu);
			$cors1 = $resul_arruy['course1'];
			$cors2 = $resul_arruy['course2'];
			$cors3 = $resul_arruy['course3'];
			$cors4 = $resul_arruy['course4'];
			$cors5 = $resul_arruy['course5'];
			$cors6 = $resul_arruy['course6'];
			$cors7 = $resul_arruy['course7'];
			$cors8 = $resul_arruy['course8'];
			$cors9 = $resul_arruy['course9'];
			$cors10 = $resul_arruy['course10'];
			$cors11 = $resul_arruy['course11'];
			
			$valuecourse1 = "Ruby-On-Rails"."  [".$cors1."]";
			$valuecourse2 = "Android OS"."  [".$cors2."]";
			$valuecourse3 = "GSM Architecture"."  [".$cors3."]";
			$valuecourse4 = "Mobile Technology"."  [".$cors4."]";
			$valuecourse5 = "Artificial Neural Networks"."  [".$cors5."]";
			$valuecourse6 = "Web Development"."  [".$cors6."]";
			$valuecourse7 = "Database Administration"."  [".$cors7."]";
			$valuecourse8 = "Development Operation"."  [".$cors8."]";
			$valuecourse9 = "Open Source"."  [".$cors9."]";
			$valuecourse10 = "Windows 8 App Dev"."  [".$cors10."]";
			$valuecourse11 = "Windows Phone 8 App Dev"."  [".$cors11."]";
			
				
	$courses = array("" => "0", "$valuecourse1" => "1", "$valuecourse2" => "2", "$valuecourse3" => "3", "$valuecourse4" => "4", "$valuecourse5" => "5", "$valuecourse6" => "6", "$valuecourse7" => "7", "$valuecourse8" => "8", "$valuecourse9" => "9", "$valuecourse10" => "10", "$valuecourse11" => "11");
	
		foreach($courses as $course => $coursevalue)
			{	
				$idvalueoption = "coresoption".$coursevalue;		
				echo "<option id='$idvalueoption' class='optioncss' value='$coursevalue'>$course</option><br>";
			}
		
?>
