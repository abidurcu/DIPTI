<?php 
    $x = 7;
    $y = 8;
    $z = "8";

    if ($x == $y) {
    	echo "Papiya Papi";
    }else{
    	echo "Mithila Papi";
    }

    

    if ($x > $z){
    	echo "Ripon Video";
    }elseif ($z === $y) {
    	echo "Hero Alom";
    }else{
    	echo "Anonto Jolil";
    }

    echo "<br>";

    if ($x == $z) {
    	echo "Bulbul";
    }elseif ($y == $z) {
    	echo "Nargis";
    }elseif ($y > $x) {
    	echo "Corona";
    }else{
    	echo "Tsunami";
    }

    echo "<br>";

    if ($x < $y && $y == $z && $z < $x) {
    	echo "Alhamdulillah";
    }elseif ($x > $y || $y === $z || $z > $x) {
    	echo "Naojubillah";
    }else{
    	echo "Shakil";
    }
 ?>