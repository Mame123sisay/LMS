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
$teacher_id=$_SESSION['id'];

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
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
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
    <div class="sidenav-header">
    <?php
            include '../pages/dbcon.php';
            $query_teacher =  "SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
            $result_teacher = mysqli_query($conn, $query_teacher) or die(mysqli_error($conn));
        $row_teacher = mysqli_fetch_array($result_teacher);
            
            
            ?>
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="<?php echo $row_teacher['profile_picture']?>" width="70" height="50"  class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class=" w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      
       
        <li class="nav-item">
          <a  class="nav-link text-white active bg-gradient-primary "   href=".teacher/view_class.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">My Class</span>
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link text-white "   href="../teacher/upload_material.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Upload Course Materials</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../teacher/teacher_uploaded_material.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Course Materials Details</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../teacher/upload_assignment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Upload Assignments</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="../teacher/teacher_uploaded_assignment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Assignments Detail</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="../teacher/view_submitted_assignment.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1"> View Submittted Assignments</span>
          </a>
        </li>



 
           


                <li class="nav-item ">
                    <a class="nav-link text-white " href="../teacher/insert_student_result.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Insert Student Result </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white  " href="../teacher/view_inserted_result.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">View Student Result </span>
                    </a>
                </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/view_subject.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Upload Mock Exam</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Add_grade.php">
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Teacher</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">View Class</li>
          </ol>
        
        </nav>
     
    
      <div class="mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
         <?php include_once('avator.php'); ?>
        </div>
      </div>
    </nav>
    </nav>
  
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                
                <h2 style="text-align: center;"> Well Come  </h2>
                <h3 style="text-align: center;">Teacher    <?php echo  $row_teacher['firstname'].' '.$row_teacher['lastname']?></h3><br>
<button style="margin-left:400px;" class=" btn-success " id="ViewButton" onclick="cheeckAssignclass();">View  class Detail</button><br><br>
<div style="text-align: center;font-size:40px;color:white;"  id="Text" class="collapse"><h6 class="text-white text-capitalize ps-3 "  >  You are Assigned for the Following  Grade,Section and Subject. </h6>
</div>     
</div>
</div>
<div class="card-body px-0 pb-2 collapse" id="collapseInfo">
    <div style="margin-left: 80px;">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0 table-hover" id="classTable">
                <thead>
                    <tr>
                        <th>Grade</th>
                        <th>Section</th>
                        <th>Subject</th>
                        <th></th>
                        <th></th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       require_once('../classs/Teacher.php');
                        

                        $teacher = new Teacher();

                        $tsgsecs = $teacher->get_class_for_teacher($teacher_id);

                        
                            foreach ($tsgsecs as $tsgsec) {
                                echo '<tr>';
                                echo '<td>
                                    <input type="hidden" name="section_name" value="' . $tsgsec['grade_name'] . '">
                                    ' . $tsgsec['grade_name'] . '
                                </td>';
                                echo '<td>
                                    <input type="hidden" name="section_name" value="' . $tsgsec['section_name'] . '">
                                    ' . $tsgsec['section_name'] . '
                                </td>';
                                echo '<td>' . $tsgsec['subject_name'] . '</td>';
                                echo '<td><a href="view_studentList.php?id=' . $tsgsec['section_id'] . '&ID= ' . $tsgsec['grade_id'] . ' ">
                                    <button style=" " class="btn-success"> View Students</button></a></td>';
                                echo '</tr>';
                            }
                        
                           
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function cheeckAssignclass() {
        var collapseInfo = document.getElementById('collapseInfo');
        var TextInfo = document.getElementById('Text');
        var classTable = document.getElementById('classTable');
        var value="You aren't currently Assigned for the class.";
       

        if(classTable.rows.length > 1) {
            collapseInfo.classList.toggle('show');
            TextInfo.classList.toggle('show');
          
        } else {
          collapseInfo.classList.toggle('hide');
          TextInfo.textContent=value;
            TextInfo.classList.toggle('show');
          
        }
    }
</script>
             <!-- The delete modal -->

             </div>
        </div>
      </div>
    </div>
    
     <?php include_once('../pages/footer.php'); ?>
   
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