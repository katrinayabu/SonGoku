<?php

	/*	name:			birthdateday.php
		description: 	This is the file converted to .inc for inclusion in index.php.
		written by:		Mark Anthony Muya
		created:		October 31, 2012 03:43AM
		modified:		October 31, 2012 03:43AM
	*/

	//This will generate birthday 
	
	for($bday=1; $bday<=31; $bday++)
		{
			echo "<option value='$bday'>$bday</option><br>";
		}
?>