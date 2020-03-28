<?php 
	$showMessage = $fname = $errFname = $crrfname = $lname = $errLname = $crrlname = $crrname = $email = $errEmail = $crrEmail = $gender = $errGender = $test = null;
	if(isset($_POST['subbtn'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
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

	if(!empty($crrname) && !empty($crrEmail) && !empty($gender)){
		$showMessage = $crrname.$crrEmail.$gender;
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
 	<input type="submit" name="subbtn" value="Signup">
 </form>

 <?php 
 	echo  $showMessage, $errFname, $errLname,  $errEmail, $errGender;
  ?>