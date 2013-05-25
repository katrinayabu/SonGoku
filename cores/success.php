<?php

include("database.php");

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$year = $_POST['year'];
$contact = $_POST['contact'];
$year = $_POST['year'];
$school = $_POST['school'];
$BSin = $_POST['BSin'];
$section = $_POST['section'];
$select1 = $_POST['select1'];
$select2 = $_POST['select2'];
$select3 = $_POST['select3'];
$select4 = $_POST['select4'];
$select5 = $_POST['select5'];
$select6 = $_POST['select6'];
$select7 = $_POST['select7'];
$select8 = $_POST['select8'];
$markmuya1 = 0;
$markmuya2 = 0;
$markmuya3 = 0;
$markmuya4 = 0;
$markmuya5 = 0;
$markmuya6 = 0;
$markmuya7 = 0;
$markmuya8 = 0;
$markmuya9 = 0;
$markmuya10 = 0;
$markmuya11 = 0;

$query = "SELECT email FROM personal_info WHERE email = '$email' ";
$result = mysql_query($query);
$result_array = mysql_fetch_array($result);


			if(empty($result_array['email'])){
				
			mysql_query("INSERT INTO personal_info(id, last_name, first_name, email, contact, school, BSin, year, section) VALUES('', '$last_name', '$first_name', '$email', '$contact', '$school', '$BSin', '$year', '$section')");
			
			$quer = "SELECT * FROM personal_info WHERE email = '$email' ";
			$resul = mysql_query($quer);
			$resul_array = mysql_fetch_array($resul);
			$id = $resul_array['id'];
			
			
			check($id,$select1);
			check($id,$select2);
			check($id,$select3);
			check($id,$select4);
			check($id,$select5);
			check($id,$select6);
			check($id,$select7);
			check($id,$select8);
			
					
			header("Location: index.php");

			}
			
			else{
			
			
			$message = "you are already registered";

			}

$que = "SELECT * FROM course_list WHERE id = '1'";
	$res = mysql_query($que);
	$result_arruy = mysql_fetch_array($res);
	

if(empty($result_arruy)){
				mysql_query("INSERT INTO course_list(id, course1, course2, course3, course4, course5, course6, course7, course8, course9, course10, course11) VALUES('', '250', '100', '250', '100', '250', '250', '250', '250', '100', '250', '250')");
			}

$arrayselect = array($select1, $select2, $select3, $select4, $select5, $select6, $select7, $select8);

	for($count=0; $count<=7; $count++){

	
			switch($arrayselect[$count]){
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
	}
	
	$quex = "SELECT * FROM course_list WHERE id = '1' ";
			$resux = mysql_query($quex);
			$resul_arruyx = mysql_fetch_array($resux);
			$cors1 = $resul_arruyx['course1'];
			$cors2 = $resul_arruyx['course2'];
			$cors3 = $resul_arruyx['course3'];
			$cors4 = $resul_arruyx['course4'];
			$cors5 = $resul_arruyx['course5'];
			$cors6 = $resul_arruyx['course6'];
			$cors7 = $resul_arruyx['course7'];
			$cors8 = $resul_arruyx['course8'];
			$cors9 = $resul_arruyx['course9'];
			$cors10 = $resul_arruyx['course10'];
			$cors11 = $resul_arruyx['course11'];
			
			for($cores = 1; $cores <= 11; $cores++){									//NOT YET DONE!
				$coresvalue = $cors.$cores;
				if ($coresvalue == 0){
					echo "<script language='javascript'>
							document.getElementByID
						</script>";
				}
			}

mysql_query("UPDATE course_list SET course1=($cors1-$markmuya3), course2=($cors2-$markmuya2), course3=($cors3-$markmuya3), course4=($cors4-$markmuya4), course5=($cors5-$markmuya5), course6=($cors6-$markmuya6), course7=($cors7-$markmuya7), course8=($cors8-$markmuya8), course9=($cors9-$markmuya9), course10=($cors10-$markmuya10), course11=($cors11-$markmuya11) WHERE id=1");
			
?>


