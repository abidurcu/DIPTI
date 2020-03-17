<?php  
	$a = "Modi";
	$y = "Indira Gandhi";
	$c = "Bangladesh";
	function dhaka($x, $z){
		return $x." will come to ".$z."<br>";
	}

	echo dhaka($a, $c);
	echo dhaka($y, $c);
	echo dhaka("Donal trum", $c); // $x = "Donal trum"
?>