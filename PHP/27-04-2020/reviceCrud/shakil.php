<?php
$conn = mysqli_connect('localhost', 'root', '', 'b67m');
if (isset($_POST["asif"])) {
    $asif = $_POST["asif"];
    $select = $conn->query("SELECT * FROM revcrud WHERE name LIKE '%$asif%' ");
    if (empty($asif)){
        echo null;
    } elseif ($select->num_rows == 0) {
        echo "no record found";
    } else {
        while ($data = $select->fetch_object()) {
?>
            Id = <?= $data->id; ?>, 
            Full Name = <?= $data->name; ?>, 
            Mobile = <?= $data->phone; ?><br>
<?php
        }
    }
}
?>