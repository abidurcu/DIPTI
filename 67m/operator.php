<?php 
    //Assignment operator
    // =
    $x = "Dhaka";
    // +=
    $y = 2;
    $y += 3; // $y = $y + 3
    // -=
    $y -= 1; // $y = $y -1
    // *=
    $y *= 3; // $y = $y * 3
    // /=
    $y /= 4; // $y = $y /4
    // %=
    $y %= 2; // $y = $y %2
    echo $y;

    echo"<br>";

    //Arithmetic operator
    // +, -, *, /, %, **

    $a = 5;
    $b = 10;
    echo ($a + $b);

    echo "<br>";
    
    //Increament/decreament Operator
    // ++, --
    echo ++$a;
    echo $a++;
    echo $a;
    echo ++$a;
    $a--;
    echo $a;

    echo "<br>";

    //comparison operator
    // ==, ===, !=, !==, !, <, >, <=, >=, <>
   $b = 5;
   $c = "5";
   if ($b == $c) {
   	   echo "Amar Bangladesh";
   }else{
       echo "Joy Bangla";
   }

   echo "<br>";

   //Logical operator
   // &&, and, or, ||, xor
   $d = 5;
   $e = 6;
   $f = "6";
   if ($d == $e || $e !== $f) {
   	  echo "Dhaka";
   }elseif ($e == $f && $f <> $d) {
   	  echo "Barishal";
   }elseif (($d+1) === $f && $e == $f) {
   	  echo "Noyakhali";
   }else{
   	  echo "Bangladesh";
   }

   echo "<br>";

   //String operators

   //. .=
   $g = 420;
   echo "papia".$g;
 ?>