<?php 
	//Indexed Array
	$x = array("Shakil","Rakib","Abidur");
	echo $x[2];
 ?>
 <br><br>
 <hr>
 <!----------------------------------------------------------->
 <?php 
	$x = array("Shakil","Rakib","Abidur");
	print_r($x);
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
	$x = array("Shakil","Rakib","Abidur");
	echo "<pre>";
	print_r($x);
	echo "</pre>";
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
	$y = ["Shakil","Rakib","Abidur"];
	echo "<pre>";
	print_r($y);
	echo "</pre>";
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
	$y = ["Dhaka","Rajshahi","Khulna","Tangail","Rangpur"];
	echo count ($y);
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
	$y = ["Dhaka","Rajshahi","Khulna","Tangail","Rangpur"];
	$c = count ($y);
	for($i = 0; $i < $c; $i++){
		echo $y[$i]."<br>";
	}
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
	$y = ["Dhaka","Rajshahi","Khulna","Tangail","Rangpur"];
	foreach ($y as $value) {
		echo $value."<br>";
	}
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Associative Array
	$a = ["Shakil"=>"Dhaka","Rakib"=>"Rajshahi","Abidur"=>"Khulna","Ashikur"=>"Tangail","Saiful"=>"Rangpur"];
		echo "<pre>";
		print_r($a);
		echo "<pre>";
		echo $a["Abidur"];
	
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Associative Array
	$a = ["Shakil"=>"Dhaka","Rakib"=>"Rajshahi","Abidur"=>"Khulna","Ashikur"=>"Tangail","Saiful"=>"Rangpur"];
		foreach ($a as $value) {
			echo $value."<br>";
		}
	
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Associative Array
	$a = ["Shakil"=>"Dhaka","Rakib"=>"Rajshahi","Abidur"=>"Khulna","Ashikur"=>"Tangail","Saiful"=>"Rangpur"];
		foreach ($a as $key=>$value) {
			echo $key." lives is ".$value."<br>";
		}
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Multidimontionnal Array
	$m = array(
		array("Shakil","Gazipur","21"),
		array("Rakib","Lalbag","20"),
		array("Abidur","Mirpur","23"),
		array("Asif","Hazaribag","35")
	);
	echo "<pre>";
	print_r($m);
	echo "</pre>";
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Multidimontionnal Array
	$m = array(
		array("Shakil","Gazipur","21"),
		array("Rakib","Lalbag","20"),
		array("Abidur","Mirpur","23"),
		array("Asif","Hazaribag","35")
	);
	echo "<pre>";
	print_r($m);
	echo "</pre>";
	echo $m[2][1];
	echo "<br>";
	echo $m[3][2];
 ?>
 <br><br>
 <hr>
 <!---------------------------------------------------------->
 <?php 
 	//Multidimontionnal Array
	$m = array(
		array("Shakil","Gazipur","21"),
		array("Rakib","Lalbag","20"),
		array("Abidur","Mirpur","23"),
		array("Asif","Hazaribag","35")
	);
	for($j = 0; $j < 4; $j++){
		for($k =0; $k < 3; $k++){
			echo $m[$j][$k]. " ";
		}
		echo "<br>";
	}
 ?>