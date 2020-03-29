<?php
	// D = First 3 letter of the week
	// M = First 3 letter of the month
	// m = month in number
	// F = Full Month
	// y = last 2 number of the year
	// Y = Full year
	// l = full week
	// h = hour
	// i = minute
	// s = secound
	// H = hour in 24
	// a = am/pm
	// A = AM/PM
	date_default_timezone_set("Asia/Dhaka");
	echo date("d-F-Y (D) h:i:s A")."<br>";

	// hour, minute, second, month, day, year
	$x = mktime(20, 22, 34, 4, 25, 2020);
	echo date("d-F-Y (l) h:i:s A", $x)."<br>";

	$d = strtotime("March 26, 2020");
	echo date("F-d-Y l", $d)."<br>";

	$a = strtotime("next sunday");
	echo date("F-d-Y l", $a)."<br>";

	$b = strtotime("+18 year -2 month -1 days");
	echo date("F-d-Y l", $b)."<br>";

	$startDate = strtotime("next friday");
	echo date("F-d-Y l", $startDate)."<br>";
	$endDate = strtotime("+6 week",$startDate);
	echo date("F-d-Y l", $endDate)."<br>";
	while ($startDate <= $endDate) {
	    echo date("F-d-Y", $startDate)."<br>";
	    $startDate = strtotime("+1 week", $startDate);
	}

?>