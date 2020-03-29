<?php  
	$fnumber = $snumber = $sumResult = null;
	if (isset($_POST['sum'])) {
		$fnumber = $_POST['fnumber'];
		$snumber = $_POST['snumber'];
		if (empty($fnumber) || empty($snumber)) {
			echo "<script>alert('Please write the both numbers')</script>";
		}elseif (!filter_var($fnumber, FILTER_VALIDATE_INT) || !filter_var($snumber, FILTER_VALIDATE_INT)) {
			echo "<script>alert('invalid numbers')</script>";
		}else{
			$sumResult = "<div style='color:green'>Result = ".($fnumber+$snumber)."</div>";
		}
	}
	if (isset($_POST['minus'])) {
		$fnumber = $_POST['fnumber'];
		$snumber = $_POST['snumber'];
		if (empty($fnumber) || empty($snumber)) {
			echo "<script>alert('Please write the both numbers')</script>";
		}elseif (!filter_var($fnumber, FILTER_VALIDATE_INT) || !filter_var($snumber, FILTER_VALIDATE_INT)) {
			echo "<script>alert('invalid numbers')</script>";
		}else{
			$sumResult = "<div style='color:green'>Result = ".($fnumber-$snumber)."</div>";
		}
	}
	if (isset($_POST['mult'])) {
		$fnumber = $_POST['fnumber'];
		$snumber = $_POST['snumber'];
		if (empty($fnumber) || empty($snumber)) {
			echo "<script>alert('Please write the both numbers')</script>";
		}elseif (!filter_var($fnumber, FILTER_VALIDATE_INT) || !filter_var($snumber, FILTER_VALIDATE_INT)) {
			echo "<script>alert('invalid numbers')</script>";
		}else{
			$sumResult = "<div style='color:green'>Result = ".($fnumber*$snumber)."</div>";
		}
		
	}
	if (isset($_POST['div'])) {
		$fnumber = $_POST['fnumber'];
		$snumber = $_POST['snumber'];
		if (empty($fnumber) || empty($snumber)) {
			echo "<script>alert('Please write the both numbers')</script>";
		}elseif (!filter_var($fnumber, FILTER_VALIDATE_INT) || !filter_var($snumber, FILTER_VALIDATE_INT)) {
			echo "<script>alert('invalid numbers')</script>";
		}else{
			$sumResult = "<div style='color:green'>Result = ".($fnumber/$snumber)."</div>";
		}
		
	}
?>
<form action="" method="post">
	<input type="text" placeholder="First Number" name="fnumber" value="<?= $fnumber; ?>">
	<input type="text" placeholder="Secound Number" name="snumber" value="<?= $snumber; ?>">
	<input type="submit" value="Sum" name="sum">
	<input type="submit" value="Minus" name="minus">
	<input type="submit" value="Miltiplication" name="mult">
	<input type="submit" value="Division" name="div">
</form>
<div class="result">
	<?= $sumResult; ?>
</div>