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
    $studentId = $_POST['studentId'];
    $courseId = $_POST['courseId'];
    $insert = "INSERT INTO `registcourse` VALUES (Null , $studentId , $courseId)";
    $i= mysqli_query($conn, $insert);
    header("location: /university/registcourse/list.php");
};



// select students
$select = "SELECT * FROM `students`";
$student = mysqli_query($conn, $select);

// select courses
$select = "SELECT * FROM `courses`";
$course = mysqli_query($conn, $select);

ob_end_flush();
?>

<link rel="stylesheet" href="./prof.css">

<div class="parent">
<h1 class="text-center">Add new course</h1>

<div class="container col-md-6 text-center">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="">Student ID</label>
                        <select name="studentId" class="form-control">
                            <?php foreach($student as $data) {?>
                            <option value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Course ID</label>
                        <select name="courseId" class="form-control">
                            <?php foreach($course as $data) {?>
                            <option value="<?php echo $data['id']?>"><?php echo $data['name']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    
                    <button name ="send" class="btn btn-primary">Send</button>
                    
                </form>
            </div>
        </div>
</div>
</div>

<?php include '../shared/script.php'?>

