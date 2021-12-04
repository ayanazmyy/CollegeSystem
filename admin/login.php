<?php ob_start();
include '../shared/header.php';
include '../shared/nav.php';
include '../general/config.php';



if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `admin` where name = '$name' and password = '$password'";
    $s= mysqli_query($conn, $select);
    $numRows = mysqli_num_rows($s);
    $row= mysqli_fetch_assoc($s);
    if($numRows > 0){
        $_SESSION['admin'] = $name;
        $_SESSION['role'] = $row['role'];
        header("location: /university/index.php");
    }else {
        echo "false admin";
    };
    echo $numRows;
};
ob_end_flush();
?>

<div class="parent">
<h1 class="text-center">Login page</h1>

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
                    <button name ="login" class="btn btn-primary">login</button>
                    
                </form>
            </div>
        </div>
</div>
</div>

<?php include '../shared/script.php'?>

