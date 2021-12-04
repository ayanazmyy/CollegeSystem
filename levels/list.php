<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

$select = "SELECT * FROM `levels`";
$s = mysqli_query($conn, $select);

ob_end_flush();
?>
<link rel="stylesheet" href="./prof.css">

<div class="parent">
<h1 class="text-center">Levels</h1>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Level</th>
                    </tr>
                    <?php foreach($s as $data) {?>
                    <tr>
                        <th><?php echo $data['id']?></th>
                        <th><?php echo $data['year']?></th>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
</div>

</div>




<?php include '../shared/script.php'?>