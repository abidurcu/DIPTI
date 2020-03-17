<?php 
	function dhaka(){
		echo "Modi will come to Bangladesh<br>";
	}
	dhaka();

	function mirpur(){
		return "Hasina will come to Bangladesh<br>";
	}
	echo mirpur();

	$x = "Modi";
	function tangail($x){

		echo $x. " will come to Bangladesh<br>";
	}
	tangail($x);

	$y = "Modi";
	$z = "Indira";
	function sakhipur($y){

		echo $y. " will come to Bangladesh<br>";
	}
	sakhipur($y);
	sakhipur($z);


	$y = "Modi";
	$z = "Indira";
	$c = "Bangladesh";
	function gazipur($y, $a){

		echo $y. " will come to ".$a."<br>";
	}
	gazipur($y, $c);
	gazipur($z, $c);
 ?>