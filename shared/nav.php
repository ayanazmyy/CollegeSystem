<?php session_start();
if(isset($_GET['logout'])){
  session_unset();
  session_destroy();
};
?>

<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">admin@future.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+20 1234567890</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.html">FUTURE university</a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <?php if(isset($_SESSION['admin'])):?>
          <li><a class="active" href="/university/index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Professors</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/university/prof/add.php">Add a professor</a></li>
              <li><a href="/university/prof/list.php">List of professors</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Students</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/university/students/add.php">Add a student</a></li>
              <li><a href="/university/students/list.php">List of students</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/university/courses/add.php">Add new course</a></li>
              <li><a href="/university/courses/list.php">List of courses</a></li>  
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Registered courses</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/university/registcourse/add.php">Add</a></li>
              <li><a href="/university/registcourse/list.php">List</a></li>  
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Students' grades</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/university/grades/add.php">Add grades</a></li>
              <li><a href="/university/grades/list.php">Students' grades</a></li>  
            </ul>
          </li>
          <li><a href="/university/levels/list.php">Levels</a></li>
          <li><a href="/university/admin/add.php">Add admin</a></li>
          <form><button class="btn btn-danger" name="logout">logout</button></form>
          <?php else: ?>
          <li><a href="/university/admin/login.php">login</a></li>
          <?php endif;?>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>
