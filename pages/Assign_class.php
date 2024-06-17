<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Minilik LMS
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <style>
.assign {
  height: 35px;
  width: 270px;
}
  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
 <?php include_once('headerprofile.php'); ?>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white   " href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a  class="nav-link text-white "   href="../pages/Add_student.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link text-white "   href="../pages/view_Student.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/Add_teacher.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Teacher</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_teacher.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Teacher</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="../pages/Add_subject.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Subject</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_subject.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Subject</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Add_grade.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Grade</span>
          </a>
        </li> <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_grade.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Grade</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Add_section.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Section</span>
          </a>
        </li> <li class="nav-item">
          <a class="nav-link text-white  " href="../pages/view_section.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Section</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Add_school_year.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add School Year</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_school_year.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View School Year</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary " href="../pages/Assign_class.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Assign Teacher For Class</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_assigned_class.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Assigned Class</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/Add_announcement.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Announcement</span>
          </a>
        </li>
       
        
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/view_announcement.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Announcement</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/notifications.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        
      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Assign teacher for class </li>
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
      <?php include_once('avator.php'); ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-center text-capitalize ps-3">Assign teacher for class page </h6>
              </div>
            </div>
            <?php 
             require_once('../classs/Admin.php');
             $admin=new Admin();
             $grades=$admin->viewGrades();
             $teachers=$admin->viewTeachers();
             $subjects=$admin->viewSubjects();
             $sections=$admin->viewSections();
             if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $teacher_id=$_POST['teacher_id'];
              $subject_id=$_POST['subject_id'];
              $grade_id=$_POST['grade_id'];
              $section_id=$_POST['section_id'];
              $admin-> Assign_teacher_for_class( $teacher_id, $subject_id, $grade_id,$section_id);
                echo"<script>alert('teacher Assigned successfully')</script>";
     
             }?>
            
            
            
            
            
           
            <div class="card-body px-0 pb-2">
            
                
    <div class="form-group">
        <div style="margin-left: 60px;">
        <form method="post"  action="">
       <!-- <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Student ID:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="text" name="studentId" id="studentId" required class="form-control" placeholder=" StudentId"><br>
        </div>
        </div>--> 
        
      
        <div class="row">
        <div class="col-6">
            <div class="row">
        <div class="col-2">
        <label  style=" font-size: 20px;font-weight:bold;" for="studentId">Teacher</label></div>
       
        <div class="col-8"><select name="teacher_id" id="section" required class="assign" >
        <option></option>
        <?php foreach($teachers  as $teacher) { ?>
        <option value="<?php echo $teacher['teacher_id']?>"> <?php echo $teacher['firstname'] .' '.$teacher['lastname']?>
      </option> <?php }?>
       
       
        </select>
      </div>
        </div>

            </div><br><br><br>
            

            <div class="col-6">
            <div class="row">
        <div class="col-2">
        <label  style=" font-size: 20px;font-weight:bold;" for="studentId">Grade</label></div>
       
        <div class="col-8"><select name="grade_id" id="section" required class="assign" >
        <option></option>
        <?php foreach($grades  as $grade) { ?>
        <option value="<?php echo $grade['grade_id']?>"> <?php echo $grade['grade_name']?>
      </option> <?php }?>
       
       
        </select>
      </div>
        </div>
            </div>
            <div class="col-6">
            <div class="row">
        <div class="col-2">
        <label  style=" font-size: 20px;font-weight:bold;" for="studentId">Section</label></div>
       
        <div class="col-8"><select name="section_id" id="section" required class="assign" >
        <option></option>
        <?php foreach($sections  as $section) { ?>
        <option value="<?php echo $section['section_id']?>"> <?php echo $section['section_name']?>
      </option> <?php }?>
       
       
        </select>
      </div>
        </div>
            </div>
           
            <div class="col-6">
            <div class="row">
        <div class="col-2">
        <label  style=" font-size: 20px;font-weight:bold;" for="studentId">Subject</label></div>
       
        <div class="col-8"><select name="subject_id" id="section" required class="assign" >
        <option></option>
        <?php foreach($subjects  as $subject) { ?>
        <option value="<?php echo $subject['subject_id']?>"> <?php echo $subject['subject_name']?>
      </option> <?php }?>
       
       
        </select>
      </div>
        </div>
            </div>
           
        </div><br><br>
        <button type="submit" name="assign" class="btn btn-primary">Assign</button>
        </form>
        <a style="margin-left:60px;"href="view_assigned_class.php">View Assigned Teacher</a>
     
       
            </div> </div>
      
   <?php include_once('footer.php'); ?>
   
  </main>
<?php include_once('settings.php'); ?>
  <!--   Core JS Files   -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    

  
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>