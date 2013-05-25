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
	
	$last_name = $_POST['lastname'];
	$first_name = $_POST['firstname'];
	$markmuya1 = 0;
	$markmuya2 = 0;
	$markmuya3 = 0;
	$markmuya4 = 0;
	$markmuya5 = 0;
	$markmuya6 = 0;
	$markmuya7 = 0;
	$markmuya9 = 0;
	$markmuya10 = 0;
	$markmuya11 = 0;

	
	
	
	$que = "SELECT * FROM personal_info WHERE last_name = '$last_name' || first_name = '$first_name'";
			$resu = mysql_query($que);
			$resul_arruy = mysql_fetch_array($resu);
			$LASTNAME = $resul_arruy['last_name'];
			$FIRSTNAME = $resul_arruy['first_name'];
			$id = $resul_arruy['id'];

	$coursequery = "SELECT course_selected FROM order_course WHERE id='$id'";
	$res = mysql_query($coursequery);
	$resu_arr = mysql_fetch_array($res);
	$user_id = $resu_arr['user_id'];
echo "<table border='1'>";
echo "<tr> <th>".$LASTNAME."</th> <th>".$FIRSTNAME."</th> </tr>";
while($row = mysql_fetch_assoc($res)){
// Print out the contents of each row into a table
	extract($row);
	echo "<tr><td>"; 
	echo $valuerow;
	echo "</td></tr>"; 
} 

echo "</table>";
	echo "mark"; 
			switch($me){
			case 0:
				break;
			case 1:
				$markmuya1 = $markmuya1 + 1;
				break;
			case 2:
				$markmuya2 = $markmuya2 + 1;
				break;
			case 3:
				$markmuya3 = $markmuya3 + 1;
				break;
			case 4:
				$markmuya4 = $markmuya4 + 1;
				break;
			case 5:
				$markmuya5 = $markmuya5 + 1;
				break;
			case 6:
				$markmuya6 = $markmuya6 + 1;
				break;
			case 7:
				$markmuya7 = $markmuya7 + 1;
				break;
			case 8:
				$markmuya8 = $markmuya8 + 1;
				break;
			case 9:
				$markmuya9 = $markmuya9 + 1;
				break;
			case 10:
				$markmuya10 = $markmuya10 + 1;
				break;
			case 11:
				$markmuya11 = $markmuya11 + 1;
				break;
			default:
				echo "Mark Muya!";
				break;
			}
	
	
			$valuecourse1 = "Ruby-On-Rails";
			$valuecourse2 = "Android OS";
			$valuecourse3 = "GSM Architecture";
			$valuecourse4 = "Mobile Technology";
			$valuecourse5 = "Artificial Neural Networks";
			$valuecourse6 = "Web Development";
			$valuecourse7 = "Database Administration";
			$valuecourse8 = "Development Operation";
			$valuecourse9 = "Open Source";
			$valuecourse10 = "Windows 8 App Dev";
			$valuecourse11 = "Windows Phone 8 App Dev";
	
	$courses = array("" => "0", "$valuecourse1" => "$markmuya1", "$valuecourse2" => "$markmuya2", "$valuecourse3" => "$markmuya3", "$valuecourse4" => "$markmuya4", "$valuecourse5" => "$markmuya5", "$valuecourse6" => "$markmuya6", "$valuecourse7" => "$markmuya7", "$valuecourse8" => "$markmuya8", "$valuecourse9" => "$markmuya9", "$valuecourse10" => "$markmuya10", "$valuecourse11" => "$markmuya11");

		foreach($courses as $course => $coursevalue)
			{	
				if($coursevalue == 0){
					continue;
				}
				echo "<span>$course: $coursevalue";
			}

	
?>
