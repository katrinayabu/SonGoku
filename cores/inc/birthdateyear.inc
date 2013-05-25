<?php

	/*	name:			birthdateyear.php
		description: 	This is the file converted to .inc for inclusion in index.php.
		written by:		Mark Anthony Muya
		created:		October 31, 2012 04:55AM
		modified:		October 31, 2012 05:36AM
	*/

	$cur_tmstamp = strtotime("today");
	$imp_tmstamp = strtotime("January 1, 1930");		//important date to give for ages 80 and above. Reference: year 2012
	
	$timestamp_diff = $cur_tmstamp - $imp_tmstamp;
	$numberyears = ($timestamp_diff/(356*24*3600)); 	// in reference to number of years = 356, number of hours per day = 24, and number of seconds in 1 hour = 3600
	
	$years = number_format($numberyears,0);
	
	$baseyear = 1930;
	

	for($dispyear=$years; $dispyear>=3; $dispyear--) 	//I adjust display year to 3 due to excess year display
		{
			$yeararray[] = $baseyear;
			$baseyear++;
		}	

	$yeararray[] = rsort($yeararray);

	for($m=0; $m <= sizeof($yeararray); $m++)
	{
		if ($yeararray[$m] == 1)
			{
				break;
			}
		echo "<option value='$yeararray[$m]'>$yeararray[$m]</option><br>";		
	}
?>