<?php 
    include("header.php");
    $fname = $errfname = $email = $erremail = $phone = $errphone = null;
    if (isset($_POST["sub420"]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = porishodhon($_POST["fname"]);
        $email = porishodhon($_POST["email"]);
        $phone = porishodhon($_POST["phone"]);
        if(!empty($email)){
            $email = $conn->real_escape_string($email);
            $email_query = "SELECT * FROM crud WHERE email = '$email'";
            $check_email = $conn->query($email_query);
        }
        if(empty($fname)){
            $errfname = "<div style='color:red'>Please write your full name</div>";
        }elseif(!preg_match('/^[A-Za-z. ]*$/', $fname)){
            $errfname = "<div style='color:red'>Invalid name</div>";
        }else{
            $crrfname = $fname;
        }

        if(empty($email)){
            $erremail = "<div style='color:red'>Please write your Email Address</div>";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erremail = "<div style='color:red'>Invalid name</div>";
        }elseif($check_email->num_rows > 0){
            $erremail = "<div style='color:red'>Email already exicts</div>";
        }else{
            $crremail = $email;
        }

        if(empty($phone)){
            $errphone = "<div style='color:red'>Please write your phone number</div>";
        }elseif(!preg_match('/^[0-9+ ]*$/', $phone)){
            $errphone = "<div style='color:red'>Invalid phone number</div>";
        }elseif(strlen($phone) < 8 || strlen($phone) > 20){
            $errphone = "<div style='color:red'>Wrong number</div>";
        }else{
            $crrphone = $phone;
        }

        if (!empty($crrfname) && !empty( $crremail) && !empty( $crrphone)) {
            $crrfname = $conn->real_escape_string($crrfname);
            $crremail = $conn->real_escape_string($crremail);
            $crrphone = $conn->real_escape_string($crrphone);
            $insert_query = "INSERT INTO crud (name, email, phone) VALUES ('$crrfname', '$crremail', '$crrphone')";
            $insert = $conn->query($insert_query);
            if (!$insert) {
                $errphone = "<div style='color:red'>Database problem</div>";
            }else{
                echo "<script>alert('Student added successfully');location.href='studentlist.php'</script>";
            }
        }
    }

    function porishodhon($fata){
        $kata =  htmlspecialchars($fata);
        $nata =  trim($kata);
        $gata =  stripslashes($nata);
        return $gata;
    }
?>
<div class="wm">
    <div class="form">
    <h3>Student Form</h3>
        <form action="" method="post">
            <input type="text" placeholder="Full Name" name="fname" value="<?= $fname; ?>">
            <input type="text" placeholder="Email Address" name="email" value="<?= $email; ?>">
            <input type="text" placeholder="Mobile Number" name="phone" value="<?= $phone; ?>">
            <input type="submit" name="sub420" value="Add Student">
        </form>
        <h6><?= $errfname,$erremail,$errphone; ?></h6> 
    </div>
</div>
<div class="btn">
    <a href="index.php"><button>Home</button></a>
    <a href="studentlist.php"><button>Student List</button></a>
    <a href="addstudent.php"><button>Add Student</button></a>
</div>
<?php 
    include("footer.php")
?>