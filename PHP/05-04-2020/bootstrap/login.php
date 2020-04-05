<?php  
	include("header.php");
	(isset($_SESSION['uname']))? header("location: index.php"):null;
	$x = "Shakil";
	$y = 123456;
	if (isset($_REQUEST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST"):
		$uname = security($_REQUEST['uname']);
		$pass = security($_REQUEST['pass']);
		if (empty($uname)):
			$errUname = "<div class='alert alert-danger alert-dismissible'><div class='close' data-dismiss='alert'>&times;</div>Please write your User Name</div>";
		elseif (!preg_match('/^[A-Za-z0-9.]*$/', $uname)):
			$errUname = "<div class='alert alert-danger alert-dismissible'><div class='close' data-dismiss='alert'>&times;</div>Invalid User Name</div>";
		else:
			$crruname = $uname;
		endif;

		if (empty($pass)):
			$errPass = "<div class='alert alert-danger alert-dismissible'><div class='close' data-dismiss='alert'>&times;</div>Please write your password</div>";
		elseif (strlen($pass) < 6):
			$errPass = "<div class='alert alert-danger alert-dismissible'><div class='close' data-dismiss='alert'>&times;</div>Inalid Password</div>";
		else:
			$crrpass = $pass;
		endif;

		if(!empty($crruname) && !empty($crrpass)):
			if($crruname == $x && $crrpass == $y):
				$_SESSION['uname'] = $crruname;
				setcookie("user", $crruname, time()+20 ,"/");
				echo "<script>alert('Login Successfull');location.href='index.php'</script>";
			else:
				$errMsg = "<div class='alert alert-danger alert-dismissible'><div class='close' data-dismiss='alert'>&times;</div>Invalid Username or Parrword</div>";
			endif;
		endif;
	endif;

	function security($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);
		return $data;
	}
?>
<div class="container">
	<div class="row min-vh-100 d-flex justify-content-center align-items-center">
		<div class="col-md-4 p-4 bg-dark text-white rounded">
			<div class="h2 pb-4">Login Form</div>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" class="form-control" name="uname" placeholder="User Name" value="<?= ((isset($uname))? $uname:null); ?>" >
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="pass" placeholder="Password" value="<?= (isset($pass))? $pass:null; ?>">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Login" class="btn btn-light btn-outline-dark border border-light">
				</div>
			</form>
			<?= (isset($errUname))? $errUname:null, (isset($errPass))? $errPass:null, (isset($errMsg)? $errMsg:null); ?>
		</div>
	</div>
</div>
<?php  
	include("footer.php");
?>