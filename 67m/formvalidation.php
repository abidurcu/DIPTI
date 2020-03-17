<?php
	$showMessage = $fname = $errFname = $crrfname = $lname = $errLname = $crrlname = $crrname = $email = $errEmail = $crremail = $errGender = $gender = $test = null;
	if (isset($_POST['subbtn'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		if (empty($fname)) {
			$errFname = "<div style='color: red'>please write your first name</div>";
		}elseif (!preg_match("/^[A-Za-z. ]*$/", $fname)) {
			$errFname = "<div style='color: red'>Write your name correctly</div>";
		}else{
			$crrfname = $fname;
		}

		if (empty($lname)) {
			$errLname = "<div style='color: red'>please write your last name</div>";
		}elseif (!preg_match("/^[A-Za-z. ]*$/", $lname)) {
			$errLname = "<div style='color: red'>Write your last name correctly</div>";
		}else{
			$crrlname = $lname;
		}

		if (!empty($crrfname) && !empty($crrlname)) {
			$crrname = "<div style='color:green;'>Your Name is : ".$fname." ".$lname."</div>";
		}

		if (empty($email)) {
			$errEmail = "<div style='color: red'>please write Email Address</div>";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errEmail = "<div style='color: red'>Write the Email Address correctly</div>";
		}else{
			$crremail = "<div style='color:green;'>Your Email is : ".$email."</div>";
		}

		if (empty($_POST['gender'])) {
			$errGender = "<div style='color:red;'>Please select your gender</div>";
		}elseif($_POST['gender'] == "male" || $_POST['gender'] == "female"){
			$gender = "<div style='color:green'>Your Gender is : ".$_POST['gender']."</div>";
			$test = $_POST['gender'];
		}else{
			$errGender = "<div style='color:red;'>dure giye mor</div>";
		}

		if (!empty($crrname) && !empty($crremail) && !empty($gender)) {
			$showMessage = $crrname.$crremail.$gender;
		}
	}
?>
<form action="" method="post">
	<input type="text" placeholder="First Name" name="fname" value="<?= $fname; ?>"><br><br>
	<input type="text" placeholder="Last Name" name="lname" value="<?= $lname; ?>"><br><br>
	<input type="text" placeholder="Your Email" name="email" value="<?= $email; ?>"><br><br>
	Gender : 
	<input type="radio" name="gender" value="male" <?php if(!empty($test) && $test == "male"){echo "checked";}?>>Male
	<input type="radio" name="gender" value="female" <?php if(!empty($test) && $test == "female"){echo "checked";}?>>Female<br><br>
	<input type="submit" name="subbtn" value="Signup">
</form>
<?php  
	echo $showMessage,$errFname,$errLname,$errEmail,$errGender;
?>