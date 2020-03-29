<?php 
	$showMessage = $fname = $errFname = $crrfname = $lname = $errLname = $crrlname = $crrname = $email = $errEmail = $crrEmail = $gender = $errGender = $test = $phone = $errphone = $crrphone = $country = $errCountry = $crrcountry = $quata = $crrQuata = $y = $web = null;

	$desh = ["","Bangladesh", "India", "Pakistan", "USA", "Others"];
	if(isset($_POST['subbtn'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
		$quata = $_POST['quata'];
		$web = $_POST['web'];
		if(empty($fname)){
			$errFname = "<div style='color:red'> Please write your first name </div>";
		}elseif (!preg_match("/^[A-Za-z. ]*$/", $fname)) {
			$errFname = "<div style='color:red'> Please write your first name correctly </div>";
		}else {
			$crrfname = $fname;
		}
		if(empty($lname)){
			$errLname = "<div style='color:red'> Please write your last name </div>";
		}elseif (!preg_match("/^[A-za-z. ]*$/", $lname)) {
			$errFname = "<div style='color:red'> Please write your last name correctly </div>";
		}else {
			$crrlname = $lname;
	}

	if(!empty($crrfname) && !empty($crrlname)){
		$crrname = "<div style='color:green'>Your Name is : ".$fname." ".$lname."</div>";
	}

	if(empty($email)){
		$errEmail = "<div style='color:red'> Please write your email address </div>";
	}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errFname = "<div style='color:red'> Please write your email address correctly </div>";
	}else{
		$crrEmail = "<div style='color:green'>Your Email is : ".$email."</div>";
	}

	if(empty($_POST['gender'])){
		$errGender = "<div style='color:red'> Please select your gender </div>";
	}elseif ($_POST['gender'] == "Male" || $_POST['gender'] == "Female" || $_POST['gender'] == "Others") {
		$gender = "<div style='color:green'>Your Gender is : ".$_POST['gender']."</div>";
		$test = $_POST['gender'];
		
	}else{
		$errGender = "<div style='color:red'> Please select your gender correctly</div>";
	}

	if(empty($phone)){
			$errphone = "<div style='color:red'> Please write your phone number </div>";
		}elseif (!preg_match("/^[0-9 -+]*$/", $phone)) {
			$errphone = "<div style='color:red'> Please write your phone number correctly </div>";
		}else{
			$crrphone = "<div style='color:green'>Your Number is : ".$phone."</div>";
		}

		if(empty($country)){
			$errCountry = "<div style='color:red'> Please select your country </div>";
		}else{
		$crrcountry = "<div style='color:green'>Your Country is : ".$country."</div>";
	}


	if(empty($web)){
		echo "<script>alert('Please write your website address')</script>";
	}
	elseif(is_int(strpos($web, "http"))){
		if(!filter_var($web, FILTER_VALIDATE_URL)){echo "<script>alert('Invalid website address')</script>";}
	}else{
		echo "<script>alert('Correct website address')</script>";
	}

	

	if(!empty($crrname) && !empty($crrEmail) && !empty($gender) && !empty($phone) && !empty($crrcountry)){
		$showMessage = $crrname.$crrEmail.$gender.$crrphone.$crrcountry.$crrQuata.$web;
		$y = 1;
	}
}
 ?>
 <form action="" method="post">
 	<input type="text" placeholder="First Name" name="fname" value="<?= $fname; ?>"><br><br>
 	<input type="text" placeholder="Last Name" name="lname" value="<?= $lname; ?>"><br><br>
 	<input type="text" placeholder="Your Email" name="email" value="<?= $email; ?>"><br><br>
 	Gender :
 	<input type="radio" name="gender" value="Male" <?php if(!empty($test) && $test == "Male"){echo "checked";} ?>>Male
 	<input type="radio" name="gender" value="Female"<?php if(!empty($test) && $test == "Female"){echo "checked";} ?>>Female
 	<input type="radio" name="gender" value="Others"<?php if(!empty($test) && $test == "Others"){echo "checked";} ?>>Others<br><br>
 	<input type="text" placeholder="Phone Number" name="phone" value="<?= $phone; ?>"><br><br>
 	<select name="country" id="">
 		<option value="<?php if(empty($country)){echo null;}else{echo $country;} ?>"><?php if(empty($country)){echo '--Select--';}else{echo $country;} ?></option>

 		<?php
 		foreach ($desh as $value) {
 			if($value != $country){
 				?>
 				<option value = "<?= $value; ?>"><?php if(!empty($value)){echo $value;}else{echo "--Select--";}?></option>
 			<?php }} ?>
 			

 	</select><br><br>

 	Select Quata :
 	<input type="checkbox" value="Tribal" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Tribal", $_POST['quata'])){echo "checked";}}?>>Tribal 
 	<input type="checkbox" value="Women" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Women", $_POST['quata'])){echo "checked";}}?>>Women 
 	<input type="checkbox" value="Freedom Fighter" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Freedom Fighter", $_POST['quata'])){echo "checked";}}?>>Freedom Fighter 
 	<input type="checkbox" value="Zila" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Zila", $_POST['quata'])){echo "checked";}}?>>Zila <br><br>

 	<input type="text" placeholder="Your Website" name="web"><br><br>
 	<input type="submit" name="subbtn" value="Signup">
 </form>

 <?php 
 	echo  $showMessage, $errFname, $errLname,  $errEmail, $errGender, $errphone, $errCountry;

 	if($y == 1){
 	if(!empty($_POST['quata'])){
 		$quata = $_POST['quata'];
 		$j = count($quata);
 		?>

 		<div style='color:green'>Your Quata :
 		<?php
 			function abidur($x, $j){
 				if(($x+1) == $j){return null;}else{return ',';} 					
 				
 			}
 			for($i = 0; $i < $j; $i++){
 				echo $quata[$i], abidur($i, $j);
 			}
 			?>
 				
 			</div>
 		<?php
 		
 	}
 }
  ?>