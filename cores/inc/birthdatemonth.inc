<?php

	/*	name:			birthdatemonth.php
		description: 	This is the file converted to .inc for inclusion in index.php.
		written by:		Mark Anthony Muya
		created:		October 31, 2012 03:38AM
		modified:		October 31, 2012 03:38AM
	*/
	
	//This will generate months to birthmonth select
	$month = array("Jan" => "1", "Feb" => "2", "Mar" => "3", "Apr" => "4", "May" => "5", "Jun" => "6", "Jul" => "7", "Aug" => "8", "Sep" => "9", "Oct" => "10", "Nov" => "11", "Dec" => "12");
	
	foreach($month as $birthmonth => $bmonth)
		{
			echo "<option value='$bmonth'>$birthmonth</option><br>";
		}
?>