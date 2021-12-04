<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

$select = "SELECT * FROM `doctors`";
$s = mysqli_query($conn, $select);

if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $delete = "DELETE FROM `doctors` WHERE id= $id";
    $d = mysqli_query($conn, $delete);
    header("location: /university/prof/list.php");
};
ob_end_flush();
?>
<link rel="stylesheet" href="./prof.css">

<div class="parent">
<h1 class="text-center">List of professors</h1>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php foreach($s as $data) {?>
                    <tr>
                        <th><?php echo $data['id']?></th>
                        <th><?php echo $data['name']?></th>
                        <th><a href="/university/prof/list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></th>
                        <th><a href="/university/prof/add.php?edit=<?php echo $data['id'] ?>" class="btn btn-info">Edit</a></th>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
</div>

</div>




<?php include '../shared/script.php'?>