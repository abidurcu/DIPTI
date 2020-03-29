<?php 
	$x = "Abidur is not a good boy";
	echo stripos($x, "good")."<br>";
	echo str_word_count($x)."<br>";
	echo strrev($x)."<br>";
	echo str_replace("good", "bad", $x)."<br>";
	echo str_shuffle($x)."<br>";
	echo substr($x, 0, 13)."<br>";
	echo strlen($x);
 ?>
