<?php 
    include("validation.php");
    validate::form();
?>
<form action="" method="post">
    First Name : <input type="text" placeholder="First Name" name="fname" value="<?= validate::$fname; ?>"><br><br>
    Last Name : <input type="text" placeholder="Last Name" name="lname" value="<?= validate::$lname; ?>"><br><br>
    Email Address : <input type="text" placeholder="Your Email" name="email" value="<?= validate::$email; ?>"><br><br>
    Phone Number : <input type="text" placeholder="Your Phone Number" name="phone" value="<?= validate::$phone; ?>"><br><br>
    Gender : <input type="radio" name="gender" value="Male" <?php if(!empty(validate::$test) && validate::$test == "Male"){echo "checked";}?>>Male
             <input type="radio" name="gender" value="Female" <?php if(!empty(validate::$test) && validate::$test == "Female"){echo "checked";}?>>Female
             <input type="radio" name="gender" value="Others" <?php if(!empty(validate::$test) && validate::$test == "Others"){echo "checked";}?>>Others<br><br>

    Country : <select name="country" id="">
 		      <option value="<?php if(empty(validate::$country)){echo null;}else{echo validate::$country;} ?>"><?php if(empty(validate::$country)){echo '--Select--';}else{echo validate::$country;} ?></option>

 		<?php
 		foreach ($desh as $value) {
 			if($value != validate::$country){
 				?>
 				<option value = "<?= $value; ?>"><?php if(!empty($value)){echo $value;}else{echo "--Select--";}?></option>
 			<?php }} ?>
 			

 	</select><br><br>


    <input type="submit" name="submit285" value="Signup">
</form>
<?= validate::$errfname, validate::$errlname, validate::$crrname, validate::$erremail, validate::$crremail, validate::$errphone,
    validate::$crrphone, validate::$errgender, validate::$gender, validate::$errcountry, validate::$crrcountry;?>