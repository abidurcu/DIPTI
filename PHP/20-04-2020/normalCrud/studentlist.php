<?php 
    include("header.php");
    $page_no = (isset($_GET["page"]))? $_GET["page"]:header("location: studentlist.php?page=1");
    $select_query = "SELECT * FROM crud";
    $select = $conn->query($select_query);
    $total_record = $select->num_rows;
    $result_per_page = 10;
    $total_page = ceil($total_record/ $result_per_page);
    $start_point = ($page_no - 1)*$result_per_page;
    $read_query = "SELECT * FROM crud LIMIT $start_point, $result_per_page";
    $read = $conn->query($read_query);
?>
<div class="wm">
    <?php if($total_record > 0){ ?>
    <table cellspacing="0">
        <tr>
            <th>S.N.</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
    <?php $x= ($start_point+1); foreach($read as $data){ ?>
        <tr>
            <td><?= $x; ?></td>
            <td><?= $data['name']?></td>
            <td><?= $data['email']?></td>
            <td><?= $data['phone']?></td>
            <td></td>
        </tr>
    <?php $x++; } ?>
    </table>
    <div>
    <?php
    if($total_page > 5 && $page_no > 5 && ($total_page - 5) >= $page_no){
        $j = $page_no-3;
    }elseif($total_page > 5 && $page_no > 5 && ($total_page - 5) < $page_no){
        $j = $total_page-5;
    }else{
        $j = 1;
    }
    $k = (($j+5) <= $total_page)? ($j+5):$total_page;
    for ($i=$j; $i <= $k; $i++) { 
    ?>
    <a href="studentlist.php?page=<?= $i; ?>"><button><?= $i; ?></button></a>
        <?php } ?>
    <?php }else{ ?>
        No Record Found
    <?php } ?>
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