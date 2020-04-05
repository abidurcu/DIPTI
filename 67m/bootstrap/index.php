<?php  
	include("header.php");
	(!isset($_SESSION['uname']))? header("location: login.php"):null;
	(!isset($_COOKIE['user']))? header("location: logout.php"):null;
?>
<div class="container">
	<div class="row min-vh-100 d-flex justify-content-center align-items-center">
		<div class="col-md-4 p-4 text-success rounded text-center h2 text-uppercase">
			Welcome <?=  $_SESSION['uname']; ?>
		</div>
	</div>
</div>
<?php  
	include("footer.php");
?>