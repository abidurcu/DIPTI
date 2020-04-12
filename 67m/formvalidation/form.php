<?php 
    include("validation.php");
    validate::form();
?>
<form action="" method="post">
    <input type="text" placeholder="First Name" name="fname" value="<?= validate::$fname; ?>"><br><br>
    <input type="text" placeholder="Last Name" name="lname" value="<?= validate::$lname; ?>"><br><br>
    <input type="submit" name="submit285" value="Signup">
</form>
<?= validate::$errfname, validate::$errlname, validate::$crrname; ?>