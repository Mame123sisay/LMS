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
<?php
session_start();
$student_id=$_SESSION['id'];




?>
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
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/47d51daedb.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
<!-- JavaScript code to handle the link click -->

</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <?php include_once('headerprofile.php'); ?>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      
       
        <li class="nav-item">
          <a  class="nav-link text-white "   href="../student/view_section.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">My Section</span>
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link text-white "   href="../student/uploaded_material.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1"> View Uploaded Materials</span>
          </a>
        </li>
       
        <li class="nav-item" >
          <a class="nav-link text-white " href="../student/uploaded_assignment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1"> View Uploaded Assignments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="./submit_assignment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Submit Assignment </span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="./student_result.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View My Result </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Mock Exam </span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="view_announcement.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <div class="position-relative">
    <i class="material-icons opacity-10">notifications</i>
    <?php if (isset($_SESSION['unread_count']) && $_SESSION['unread_count'] > 0) { ?>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger p-2">
            <span class="visually-hidden">unread notifications</span>
            <?php echo $_SESSION['unread_count']; ?>
        </span>
    <?php } ?>
</div>
            </div>
            <span class="nav-link-text ms-1">
    Notifications
   
</span>  </a>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Student</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Submit Assignment</li>
          </ol>
        
        </nav>
        <div class="mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
         
          </div>
          <?php include_once('avator.php'); ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">   Submit Assignment . </h6>
              </div>
            </div>
            <?php


require_once ('../classs/Student.php');

$student = new Student();

$stgsecs = $student->GetSectionNameById($student_id);
foreach ($stgsecs as $stgsec){
    $section_id=$stgsec['section_id'];
    $grade_id=$stgsec['grade_id'];
}
$subjectNames= $student->GetSubjectNameForStudent($section_id,$grade_id);
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fileloc = $_FILES['fileloc']['name'];
    $fileloc_tmp = $_FILES['fileloc']['tmp_name'];
    $selected_values = explode(',', $_POST['subject_section_grade']);

    if (count($selected_values) == 4) {
        $subject_id = $selected_values[0];
        $assignment_id = $selected_values[1];
        $section_id = $selected_values[2];
        $grade_id = $selected_values[3];

        $student-> SubmitAssignment($assignment_id,$subject_id,$section_id,$grade_id,$fileloc,$fileloc_tmp,$student_id);
        
        echo"<script>alert(' Assignment sucessssly Submitted ')</script>";
      
        } 
    } 


?>
            <div class="card-body px-0 pb-2">
            <form method="POST" action="" enctype="multipart/form-data">
                
                <div class="form-group">
                    <div style="margin-left: 60px;">
                   <!-- <div class="row">
                    <div class="col-2">
                    <label style=" font-size: 20px;font-weight:bold;" for="studentId">Student ID:</label></div>
                    <div class="col-8" style="margin-left: 0px;">
                    <input type="text" name="studentId" id="studentId" required class="form-control" placeholder=" StudentId"><br>
                    </div>
                    </div>-->  
                    
                    
 <!--mmsksksk>  <-->                
 <div class="row">
    <div class="col-7">
        <div class="row">
            <div class="col-3">
                <label style="font-size: 20px;font-weight:bold;" for="subject_id">Subject:</label>
            </div>
            <div class="col-7">
    <select name="subject_section_grade" id="" required class="" style="width:260px;height:40px">
        <option value="">Select a subject</option>
        <?php
          $subjects = array();
        foreach ($subjectNames as $subjectName) {
          if (!in_array($subjectName['subject_id'], $subjects)) {
            $subjects[] = $subjectName['subject_id'];
        ?>
            <option value="<?php echo $subjectName['subject_id'] .','. $subjectName['id'] .  ',' . $subjectName['section_id'] . ',' . $grade_id ?>"> <?php echo $subjectName['subject_name']; ?></option>
        <?php
           } }
        ?>
    </select>
</div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-2">
                <label style="font-size: 20px;font-weight:bold;" for="fileloc">File:</label>
            </div>
            <div class="col-8" style="margin-left: 0px;">
                <input style="width:290px;height:40px" type="file" placeholder="" name="fileloc" id="file" required class="form-control"><br>
            </div>
        </div>
        <button style="margin-top:40px;margin-left:40px;" type="submit" name="upload" class="btn btn-primary"><i class="fa-sharp fa-solid fa-upload"></i>Submit</button>

    </div>
   </div>
                   
                </form>
                        </div>
              
            </div></div> </div>
        
      
            <?php include_once "../pages/footer.php"; ?>
   
  </main>
 <?php include_once('settings.php'); ?>
 
  <!--   Core JS Files   -->
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
    <!-- JavaScript code to handle the link click -->
   
        $(document).ready(function() {
            $('.delete-link').click(function(e) {
                e.preventDefault();
                $('#student_delete_modal').modal('show');
            });
        });
    
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>