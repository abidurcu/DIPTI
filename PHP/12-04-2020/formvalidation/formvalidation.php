<?php
	$showMessage = $fname = $errFname = $crrfname = $lname = $errLname = $crrlname = $crrname = $email = $errEmail = $crremail = $errGender = $gender = $test = $phone = $errphone = $country = $crrphone = $errCountry = $crrcountry = $y = null;
	$desh = ["","Bangladesh","India","Pakistan","USA","UK","Others"];
	if (isset($_POST['subbtn'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
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

		if (empty($phone)) {
			$errphone = "<div style='color:red;'>Please write you phone number</div>";
		}elseif(!preg_match("/^[0-9 -+]*$/", $phone) || strlen($phone) < 11){
			$errphone = "<div style='color:red;'>Invalid phone number</div>";
		}else {
			$crrphone = "<div style='color: green'>Your Phone : ".$phone."</div>";
		}
		if (empty($country)) {
			$errCountry = "<div style='color:red;'>Please select your country</div>";
		}else{
			$crrcountry = "<div style='color: green'>Your Country : ".$country."</div>";
		}
		if (!empty($crrname) && !empty($crremail) && !empty($gender) && !empty($crrphone) && !empty($crrcountry)) {
			$showMessage = $crrname.$crremail.$gender.$crrphone.$crrcountry;
			$y = 1;
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
	<input type="text" placeholder="Phone Number" name="phone" value="<?= $phone; ?>"><br><br>
	<select name="country" id="">
		<option value="<?php if(empty($country)){echo null;}else{ echo $country;} ?>"><?php if(empty($country)){echo '--Select--';}else{ echo $country;}?></option>
		<?php  
			foreach ($desh as $value) {
			if($value != $country){	
		?>
		<option value="<?= $value; ?>"><?php if(!empty($value)){ echo $value;}else{echo "--Select--";} ?></option>
		<?php }} ?>
	</select><br><br>
	Select Quata :
	<input type="checkbox" value="Tribal" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Tribal", $_POST['quata'])){echo "checked";}}?>>Tribal
	<input type="checkbox" value="Women" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Women", $_POST['quata'])){echo "checked";}}?>>Women
	<input type="checkbox" value="Freedom Fighter" name="quata[]"<?php if(!empty($_POST['quata'])){if(in_array("Freedom Fighter", $_POST['quata'])){echo "checked";}}?>>Freedom Fighter
	<input type="checkbox" value="Jella" name="quata[]" <?php if(!empty($_POST['quata'])){if(in_array("Jella", $_POST['quata'])){echo "checked";}}?>>Jella<br><br>
	<input type="submit" name="subbtn" value="Signup">
</form>
<?php  
	echo $showMessage,$errFname,$errLname,$errEmail,$errGender,$errphone,$errCountry;
	if ($y == 1) {
	if (!empty($_POST['quata'])) {
		$quata = $_POST['quata'];
		$j = count($quata);
?>
		<div style='color: green'>Your Quata :
<?php  
		function jinia($x, $j){
			if(($x+1) == $j){return null;}else{return ', ';}
		}
		for ($i = 0; $i < $j; $i++) {
			echo $quata[$i].jinia($i, $j);
		}
?>
		</div>
<?php
	}}
?>