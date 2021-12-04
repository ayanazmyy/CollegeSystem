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
    $levelId = $_POST['levelId'];
    // image code
    $type_img = $_FILES['img']['type'];
    $name_img = $_FILES['img']['name'];
    $tmp_img = $_FILES['img']['tmp_name'];
    $location = '../upload/';
    move_uploaded_file($tmp_img, $location . $name_img);
    $insert = "INSERT INTO `students` VALUES (Null , '$name' ,'$name_img', $levelId)";
    $i= mysqli_query($conn, $insert);
    header("location: /university/students/list.php");
};




$update= false;
if(isset($_GET['edit'])){
    $update= true;
    $id = $_GET['edit'];
    $select = "SELECT * FROM `students` WHERE id = $id";
    $ss = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $update = "UPDATE `students` SET name= '$name' WHERE id= $id";
        $u = mysqli_query($conn, $update);
        header("location: /university/students/list.php");
    }
};

$select = "SELECT * FROM `levels`";
$ss = mysqli_query($conn, $select);
ob_end_flush();
?>

<link rel="stylesheet" href="./prof.css">

<div class="parent">
<?php if($update) :?>
<h1 class="text-center">Update a student</h1>
<br>
<?php else :?>
<h1 class="text-center">Add a student</h1>
<br>
<?php endif ; ?>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Student name</label>
                        <input value="<?php echo $name?>" name= "name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Student image</label>
                        <input name= "img" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Student level</label>
                        <select name="levelId" class="form-control">
                            <?php foreach($ss as $data) {?>
                            <option value="<?php echo $data['id']?>"><?php echo $data['year']?></option>
                            <?php } ?>
                        </select>
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

