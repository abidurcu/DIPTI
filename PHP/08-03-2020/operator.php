<?php 
	/* Arithmatic Operators
	+, -, *, /, %
	18 % 5 = 3
	*/


	/* Assignment Operators
		=
		+= $x +=5 / $x = $x + 5
		-=
		*=
		/=
		%= $x %= 5 / $x = $x + 5
		
	*/


	/* Comparison Operators
	==, ===, <, >, <=, >=, !=, !==
	*/
	$x = 5;
	$y ="5";
	if ($x == $y) {
		echo "Dhaka";
	}
	//Their value are same
	$x = 5;
	$y ="5";
	if ($x === $y) {
		echo "Dhaka";
	}
	echo "<br>";
	//Their value are same but their data type is not same.that's why its not print

	/*	Increment/Decrement operators
		++
		--
		++$x = 1 + $x
		$x++ = $x + 1
		
	*/
		echo $x++;
		echo "<br>";
		echo ++$x;
	/* Logical operators
		&&
		and
		||
		or
		xor
		!
	*/

	/* String operators
		.
		.=
	*/
		echo "<br>";
		$x = "Abidur";
		echo $x. " is a good boy";	




 ?>