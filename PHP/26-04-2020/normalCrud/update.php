<?php
include("header.php");
$id = (isset($_GET['id']))? $_GET["id"]:header("location: index.php");
$select = $conn->query("SELECT * FROM crud WHERE id = $id");
($select->num_rows == 0)? header("location: index.php"):null;
$prv_data = $select->fetch_object();
$fname = $prv_data->name;
$email = $prv_data->email;
$phone = $prv_data->phone;
$errfname = $erremail = $errphone = null;
if (isset($_POST["sub420"]) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = porishodhon($_POST["fname"]);
    $email = porishodhon($_POST["email"]);
    $phone = porishodhon($_POST["phone"]);
    if (empty($fname)) {
        $errfname = "<div style='color:red'>Please write your full name</div>";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $fname)) {
        $errfname = "<div style='color:red'>Invalid name</div>";
    } else {
        $crrfname = $fname;
    }

    if (empty($email)) {
        $erremail = "<div style='color:red'>Please write your Email Address</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erremail = "<div style='color:red'>Invalid name</div>";
    } else {
        $crremail = $email;
    }

    if (empty($phone)) {
        $errphone = "<div style='color:red'>Please write your phone number</div>";
    } elseif (!preg_match('/^[0-9+ ]*$/', $phone)) {
        $errphone = "<div style='color:red'>Invalid phone number</div>";
    } elseif (strlen($phone) < 8 || strlen($phone) > 20) {
        $errphone = "<div style='color:red'>Wrong number</div>";
    } else {
        $crrphone = $phone;
    }

    if (!empty($crrfname) && !empty($crremail) && !empty($crrphone)) {
        $crrfname = $conn->real_escape_string($crrfname);
        $crremail = $conn->real_escape_string($crremail);
        $crrphone = $conn->real_escape_string($crrphone);
        $update_query = "UPDATE crud SET name = '$crrfname', email = '$crremail', phone = '$crrphone' WHERE id = $id";
        $update = $conn->query($update_query);
        if (!$update) {
            $errphone = "<div style='color:red'>Database problem</div>";
        } else {
            echo "<script>alert('Student updated successfully');location.href='studentlist.php'</script>";
        }
    }
}

function porishodhon($fata)
{
    $kata =  htmlspecialchars($fata);
    $nata =  trim($kata);
    $gata =  stripslashes($nata);
    return $gata;
}
?>
<div class="wm">
    <div class="form">
        <h3>Student Info</h3>
        <form action="" method="post">
            <input type="text" placeholder="Full Name" name="fname" value="<?= $fname; ?>">
            <input type="text" placeholder="Email Address" name="email" value="<?= $email; ?>">
            <input type="text" placeholder="Mobile Number" name="phone" value="<?= $phone; ?>">
            <input type="submit" name="sub420" value="Update Student">
        </form>
        <h6><?= $errfname, $erremail, $errphone; ?></h6>
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