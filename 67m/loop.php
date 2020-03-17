<?php  
	$x = 1;
	$y = 3299;
	while ($x <= 20) {
	    echo $y." x ".$x." = ".($y*$x)."<br>";
	    $x++;
	}

	$y = 0;
	do{
		echo $y."<br>";
	    $y--;
	}while ($y >= 1);

	$z = 2;
	for ($i = 1; $i <= 10; $i++) {
		echo $z." x ".$i." = ".$z*$i."<br>";
	}
?>