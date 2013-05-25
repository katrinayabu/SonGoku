<?php
$name_f = $_POST["f_name"];
$name_l = $_POST["l_name"];

$con = mysql_connect("localhost","root","yabu") or die("Error connection! ".mysql_error());
	
mysql_select_db("trial",$con);

mysql_query("INSERT INTO members(id,f_name,l_name,age)VALUES('',$name_f','$name_l','')");
 echo "Successfully updated!";




$result = mysql_query($con,"SELECT * FROM members WHERE f_name = '$name_f'");

while($row = mysql_fetch_array($result))
  {
  echo $row['f_name'] . " " . $row['l_name'];
  echo "<br />";
  }




?>