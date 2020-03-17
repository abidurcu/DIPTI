<?php 
	$x = 0;
	while ($x < 10) {
	    echo $x. "<br>";
	    $x++;
	}

	echo "<br>";
	$x = 1;
	while ($x <= 10) {
	    echo $x. "<br>";
	    $x++;
	}

	echo "<br>";
	$x = 1;
	$y = 2;
	while ($x <= 10) {
	    echo $y." x ".$x. " = " .($y*$x)."<br>";
	    $x++;
	}

	echo "<br>";
	$x = 1;
	$y = 50;
	while ($x <= 10) {
	    echo $y." x ".$x. " = " .($y*$x)."<br>";
	    $x++;
	}

	echo "<br>";
	$x = 10;
	while ($x >= 0) {
	    echo $x. "<br>";
	    $x--;
	}

	echo "<br>";
	$x = 0;
	do{
		echo $x. "<br>";
	    $x--;
	}while($x >=1);

	echo "<br>";
	for ($i = 0; $i <10 ; $i++) {
		echo $i;
		
	}


	echo "<br>";
	$z = 5;
	for ($i = 1; $i <=10 ; $i++) {
		echo $z. " x ".$i. " = ".($z*$i)."<br>";
		
	}

	
 ?>