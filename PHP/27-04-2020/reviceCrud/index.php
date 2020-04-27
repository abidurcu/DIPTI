<?php
$conn = mysqli_connect('localhost', 'root', '', 'b67m');
$errname = $name =  $erremail = $email = $phone = $errphone = null;
$btn_name = (isset($_GET["up"])) ? 'up123' : 'sub123';
$btn_value = (isset($_GET["up"])) ? 'Update Student' : 'Add Student';
$upid = (isset($_GET["up"])) ? $_GET["up"] : null;
if (!empty($upid)) {
    $select_pre_data_query = "SELECT * FROM revcrud WHERE id = $upid";
    $select_pre_data = $conn->query($select_pre_data_query);
    ($select_pre_data->num_rows == 0) ? header("location: index.php") : null;
    $data = $select_pre_data->fetch_object();
    $name = $data->name;
    $email = $data->email;
    $phone = $data->phone;
}
$del = (isset($_GET["del"])) ? $_GET["del"] : null;
if(!empty($del)){
    $check_del = $conn->query("SELECT * FROM revcrud WHERE id = $del");
    ($check_del->num_rows == 0)? header("location: index.php"):null;
    $delete = $conn->query("DELETE FROM revcrud WHERE id = $del");
    ($delete)? "<script>alert('Data Deleted Successfully');location.href='index.php'</script>" : "<script>alert('Db Problem');location.href='index.php'</script>";
}
if (isset($_POST['sub123'])) {
    $name = manush($_POST["name"]);
    $email = manush($_POST["email"]);
    $phone = manush($_POST["phone"]);
    if (empty($name)) {
        $errname = "<span style='color:red;'>please write student name</span>";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $name)) {
        $errname = "<span style='color:red;'>Invalid name</span>";
    } else {
        $crrname = $conn->real_escape_string($name);
    }
    if (empty($email)) {
        $erremail = "<span style='color:red;'>please write email address</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erremail = "<span style='color:red;'>Invalid email</span>";
    } else {
        $crremail = $conn->real_escape_string($email);
    }
    if (empty($phone)) {
        $errphone = "<span style='color:red;'>please write mobile number</span>";
    } elseif (!is_numeric($phone) || strlen($phone) < 8 || strlen($phone) > 15) {
        $errphone = "<span style='color:red;'>Invalid Mobile number</span>";
    } else {
        $crrphone = $conn->real_escape_string($phone);
    }

    if (!empty($crrname) && !empty($crremail) && !empty($crrphone)) {
        $insert = $conn->query("INSERT INTO revcrud (name, email, phone) VALUES ('$crrname','$crremail','$crrphone')");
        if (!$insert) {
            echo "<script>alert('DB Problem')</script>";
        } else {
            echo "<script>alert('Student Added Successfully');location.href='index.php'</script>";
        }
    }
}
if (isset($_POST['up123'])) {
    $name = manush($_POST["name"]);
    $email = manush($_POST["email"]);
    $phone = manush($_POST["phone"]);
    if (empty($name)) {
        $errname = "<span style='color:red;'>please write student name</span>";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $name)) {
        $errname = "<span style='color:red;'>Invalid name</span>";
    } else {
        $crrname = $conn->real_escape_string($name);
    }
    if (empty($email)) {
        $erremail = "<span style='color:red;'>please write email address</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erremail = "<span style='color:red;'>Invalid email</span>";
    } else {
        $crremail = $conn->real_escape_string($email);
    }
    if (empty($phone)) {
        $errphone = "<span style='color:red;'>please write mobile number</span>";
    } elseif (!is_numeric($phone) || strlen($phone) < 8 || strlen($phone) > 15) {
        $errphone = "<span style='color:red;'>Invalid Mobile number</span>";
    } else {
        $crrphone = $conn->real_escape_string($phone);
    }

    if (!empty($crrname) && !empty($crremail) && !empty($crrphone)) {
        $update = $conn->query("UPDATE revcrud SET name = '$name', email = '$email', phone = '$phone' WHERE id = $upid");
        if (!$update) {
            echo "<script>alert('DB Problem')</script>";
        } else {
            echo "<script>alert('Student Updated Successfully');location.href='index.php'</script>";
        }
    }
}
function manush($tottho)
{
    $tottho = htmlspecialchars($tottho);
    $tottho = trim($tottho);
    $tottho = stripslashes($tottho);
    return $tottho;
}
if (isset($_POST["cancel"])) {
    header("location: index.php");
}

?>
<form method="post" action="">
    <input type="text" name="name" placeholder="Full Name" value="<?= $name; ?>"><?= $errname; ?><br><br>
    <input type="text" name="email" placeholder="Email Address" value="<?= $email; ?>"><?= $erremail; ?><br><br>
    <input type="text" name="phone" placeholder="Mobile Number" value="<?= $phone; ?>"><?= $errphone; ?><br><br>
    <input type="submit" name="<?= $btn_name; ?>" value="<?= $btn_value; ?>">
    <?php if (isset($upid)) { ?>
        <button name="cancel" type="submit">&times; Cancel</button>
    <?php } ?>
</form>
<?php
$select = $conn->query("SELECT * from revcrud");
if ($select->num_rows > 0) {
?>
    <table>
        <tr>
            <td>S.N</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        <?php
        $x = 1;
        while ($data = $select->fetch_object()) {
        ?>
            <tr>
                <td><?= $x; ?></td>
                <td><?= $data->name; ?></td>
                <td><?= $data->email; ?></td>
                <td><?= $data->phone; ?></td>
                <td>
                    <a href="index.php?up=<?= $data->id; ?>"><button>Update</button></a>
                    <a href="index.php?del=<?= $data->id; ?>" onclick="return confirm('Danger Mesage')"><button>Delete</button></a>
                </td>
            </tr>
        <?php $x++;
        } ?>
    </table>
<?php } ?>
<script>

</script>