<?php
include("db.php");
$id = (isset($_GET['id'])) ? $_GET["id"] : header("location: index.php");
$select = $conn->query("SELECT * FROM crud WHERE id = $id");
($select->num_rows == 0) ? header("location: index.php") : null;
$delete = $conn->query("DELETE FROM crud WHERE id = $id");
$msg = (!$delete)? "<script>alert('Database Problem');location.href='index.php'</script>": "<script>alert('Student Deleted');location.href='index.php'</script>";
echo $msg;
?>