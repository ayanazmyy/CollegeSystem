<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';
if($_SESSION['admin']){

}else {
    header("location: /university/admin/login.php");
};

if($_SESSION['role'] == 0) {

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $insert = "INSERT INTO `admin` VALUES (NULL, '$name', '$password', $role)";
    $i= mysqli_query($conn, $insert);
};
ob_end_flush();
?>

<div class="parent">
<h1 class="text-center">Add admin</h1>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">User name</label>
                        <input name= "name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name= "password" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        All access <input type="radio" name="role" value="0">
                        Semi access <input type="radio" name="role" value="1">
                    </div>
                    <button name ="signup" class="btn btn-primary">Sign up</button>
                    
                </form>
            </div>
        </div>
</div>
</div>

<?php } else {
    echo '<h1 class="text-danger text-center display-1">Not authorized</h1>';
}
include '../shared/script.php'?>

