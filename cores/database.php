<?php

$con = mysql_connect("localhost","root","muyamark") or die(mysql_error());
	
mysql_select_db("cores2",$con);

function check($idd,$selectt){
	
	if($selectt!=0){			       		
				mysql_query("INSERT INTO order_course(user_id,course_selected)VALUES('$idd','$selectt')");
			}
	
	
	}

?>