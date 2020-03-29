<?php
	//indexed array  
	$x = array("Shakil","Rakib","Abid");
	echo "<pre>";
	print_r($x);
	echo "</pre>";
	echo $x[0];

	$y = ["Dhaka","Rajshahi","Khulna","Rongpur"];
	echo "<pre>";
	print_r($y);
	echo "</pre>";
	echo $y[2]."<br>";

	$c = count($y);
	for ($i = 0; $i < $c; $i++) {
		echo $y[$i]."<br>";
	}

	foreach ($x as $data) {
		echo $data."<br>";
	}

	//associative array
	$a = ["Shakil"=>"Gazipur", "Rakib"=>"Lalbag", "Abid"=>"Mirpur"];
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	echo $a["Shakil"]."<br>";
	foreach ($a as $key=>$value) {
		echo $key." lives in ".$value."<br>";
	}
	
	//multidimontionnal array
	$m = array(
		array("Shakil","Gazipur", 21),
		array("Rakib","Lalbag",20),
		array("Abid","Mirpur",23),
		array("Asif","Hazaribagh",35)
	);
	echo "<pre>";
	print_r($m);
	echo "</pre>";
	echo $m[2][1]."<br>";
	for ($j = 0; $j < 4; $j++) {
		for ($k = 0; $k < 3; $k++) {
			echo $m[$j][$k]." ";
		}
		echo "<br>";
	}
?>