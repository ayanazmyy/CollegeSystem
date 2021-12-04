<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

$name="";
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $insert = "INSERT INTO `courses` VALUES (Null , '$name')";
    $i= mysqli_query($conn, $insert);
    header("location: /university/courses/list.php");
};


$update= false;
if(isset($_GET['edit'])){
    $update= true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `courses` WHERE id = $id";
    $ss = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $update = "UPDATE courses SET name= '$name' WHERE id= $id";
        $u = mysqli_query($conn, $update);
        header("location: /university/courses/list.php");
    }
};
ob_end_flush();
?>

<link rel="stylesheet" href="./prof.css">

<div class="parent">
<?php if($update) :?>
<h1 class="text-center">Update course</h1>
<br>
<?php else :?>
<h1 class="text-center">Add new course</h1>
<br>
<?php endif ; ?>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">Course name</label>
                        <input value="<?php echo $name?>" name= "name" type="text" class="form-control">
                    </div>
                    <br>
                    <?php if($update): ?>
                    <button name ="update" class="btn btn-primary">Update</button>
                    <?php else: ?>
                    <button name ="send" class="btn btn-primary">Send</button>
                    <?php endif;?>
                </form>
            </div>
        </div>
</div>
</div>

<?php include '../shared/script.php'?>

