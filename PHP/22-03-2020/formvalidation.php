<?php 
	$showMessage = $fname = $errFname = $crrfname = $lname = $errLname = $crrlname = $crrname = $email = $errEmail = $crrEmail = $gender = $errGender = $test = $phone = $errphone = $crrphone = $country = $errCountry = $crrcountry = null;
	if(isset($_POST['subbtn'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
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

	if(!empty($crrname) && !empty($crrEmail) && !empty($gender) && !empty($phone) && !empty($crrcountry)){
		$showMessage = $crrname.$crrEmail.$gender.$crrphone.$crrcountry;
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
 		<option value="<?php if(empty($country)){echo null;}else{echo $country;} ?>"> <?php if(empty($country)){echo '--Selcect--';}else{echo $country;} ?></option>
 		<option value="<?php if($country == 'Bangladesh'){echo '--Select--';}else{echo 'Bangladesh';} ?>"><?php if($country == 'Bangladesh'){echo '--Select--';}else{echo 'Bangladesh';} ?></option>
 		<option value="<?php if($country == 'India'){echo '--Select--';}else{echo 'India';} ?>"><?php if($country == 'India'){echo '--Select--';}else{echo 'India';} ?></option>
 		<option value="<?php if($country == 'Pakistan'){echo '--Select--';}else{echo 'Pakistan';} ?>"><?php if($country == 'Pakistan'){echo '--Select--';}else{echo 'Pakistan';} ?></option>
 		<option value="<?php if($country == 'USA'){echo '--Select--';}else{echo 'USA';} ?>"><?php if($country == 'USA'){echo '--Select--';}else{echo 'USA';} ?></option>
 		<option value="<?php if($country == 'Others'){echo '--Select--';}else{echo 'Others';} ?>"><?php if($country == 'Others'){echo '--Select--';}else{echo 'Others';} ?></option>
 	</select><br><br>
 	<input type="submit" name="subbtn" value="Signup">
 </form>

 <?php 
 	echo  $showMessage, $errFname, $errLname,  $errEmail, $errGender, $errphone, $errCountry;
  ?>