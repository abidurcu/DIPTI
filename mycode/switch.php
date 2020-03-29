<?php 
	$age = 15;

	switch ($age) {
		case ($age < 13):
			echo "You are a Baby";
			break;
		case ($age < 20):
			echo "You are a Teenager";
			break;	
		case ($age < 30):
			echo "You are a Young Man";
			break;
		case ($age < 50):
			echo "You are a Middle Aged Man";
			break;
		case ($age < 120):
			echo "You are a Old Man";
			break;		
		
		default:
			echo "You are a Dead Man";
			break;
	}
	echo "<br>";
	

	$age = 35;
	if($age < 13){
		echo "You are a Baby";
	}elseif($age < 20){
		echo "You are a Teenager";
	}elseif($age < 30){
		echo "You are a Young Boy";
	}elseif($age < 50){
		echo "You are a Middle Aged Man";
	}elseif($age < 120){
		echo "You are a Old Man";
	}else{
		echo "You are a Dead Man";
	}
 ?>