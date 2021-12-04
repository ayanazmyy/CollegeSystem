<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

$select = "SELECT * FROM `registcourse`";
$s = mysqli_query($conn, $select);


if(isset($_GET['delete'])){
    $id= $_GET['delete'];
    $delete = "DELETE FROM `registcourse` WHERE id= $id";
    $d = mysqli_query($conn, $delete);
    header("location: /university/registcourse/list.php");
};
ob_end_flush();
?>
<link rel="stylesheet" href="./prof.css">

<div class="parent">
<h1 class="text-center">List of registered courses</h1>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Student ID</th>
                        <th>Course ID</th>
                        <th >Action</th>
                    </tr>
                    <?php foreach($s as $data) {?>
                    <tr>
                        <th><?php echo $data['id']?></th>
                        <th><?php echo $data['studentId']?></th>
                        <th><?php echo $data['courseId']?></th>
                        <th><a href="/university/registcourse/list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></th>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
</div>

</div>




<?php include '../shared/script.php'?>