<html>
<body>

<?php

$name_d = $_POST["name"];

$con = mysql_connect("localhost","root","yabu") or die ("Error connection! ".mysql_error());

mysql_select_db("namesubmit",$con);

mysql_query("INSERT INTO members(id,name_d)VALUES('',$name_d)");
	echo "Welcome!";

$result = mysql_query($con,"SELECT * FROM members WHERE name_d = '$name_d'");

while ($row = mysql_fetch_array($result))
{
	echo $row['name_d']." Yey!";
}
?>

</html>
</body>