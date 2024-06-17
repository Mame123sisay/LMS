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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Minilik LMNS
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
.chart-circle {
    position: relative;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background-color: #f1f1f1;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.chart-circle-inner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #3498db;
    transform-origin: center center;
    transition: transform 0.6s ease;
}

.chart-circle-fill {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: greenyellow;
    opacity: 0.5;
}

.chart-circle-text {
    font-size: 24px;
    color: #333;
    z-index: 1;
}

  </style>
 
</head>

<body class="g-sidenav-show  bg-gray-200">
  <!--sidebar for admin-->
 <?php include('Adminsidebar.php') ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">dashboard</li>
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          </div>
        
        </div>
        <?php include_once('avator.php'); ?>
      </div>
     
    </nav>
    
    <!-- End Navbar -->



    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Data Number </h6>
              </div>
            </div>
           
            <div class="card-body px-0 pb-2">
            
                
    <div class="form-group">
        <div style="margin-left: 60px;">
     
        <?php
        include 'person.php';
        $admin=new Admin();
        $total_subject=$admin->Get_TotalNumber_of_subjects();
        $Total_sections=$admin->Get_TotalNumber_of_sections();
        $Total_student=$admin->Get_TotalNumber_of_students();
        $Total_teacher=$admin->Get_TotalNumber_of_teachers();
         ?>
        <div class="row">
        <div class="col-3">
    <div class="chart-circle">
        <div class="chart-circle-inner" style="transform: rotate(<?php echo isset($Total_student) ? ($Total_student * 3.6) : 0; ?>deg);"></div>
        <div class="chart-circle-fill"></div>
        <div class="chart-circle-text">
            <?php echo isset($Total_student) ? $Total_student : 0; ?>
        </div>
    </div>
    <div class="chart-bottom-heading">
        <strong>Total Number of Students</strong>
    </div>
</div>
 <div class="col-3">
         <div class="chart-circle">
        <div class="chart-circle-inner" style="transform: rotate(<?php echo isset($Total_teacher) ? ($Total_teacher * 3.6) : 0; ?>deg);"></div>
        <div class="chart-circle-fill"></div>
        <div class="chart-circle-text">
            <?php echo isset($Total_teacher) ? $Total_teacher : 0; ?>
        </div>
    </div>
    <div class="chart-bottom-heading">
        <strong>Total Number of Teachers</strong>
    </div>
        </div>

        <div class="col-3">
        <div class="chart-circle">
        <div class="chart-circle-inner" style="transform: rotate(<?php echo isset($total_subject) ? ($total_subject* 3.6) : 0; ?>deg);"></div>
        <div class="chart-circle-fill"></div>
        <div class="chart-circle-text">
            <?php echo isset($total_subject) ? $total_subject : 0; ?>
        </div>
    </div> 
    <div class="chart-bottom-heading">
        <strong>Total Number of Subject</strong>
    </div></div>

    <div class="col-3">
    <div class="chart-circle">
        <div class="chart-circle-inner" style="transform: rotate(<?php echo isset($Total_sections) ? ($Total_sections* 3.6) : 0; ?>deg);"></div>
        <div class="chart-circle-fill"></div>
        <div class="chart-circle-text">
            <?php echo isset($Total_sections) ? $Total_sections : 0; ?>
        </div>
    </div>
    <div class="chart-bottom-heading">
        <strong>Total Number of Section</strong>
    </div>
    </div> </div>
            </div> </div> </div> </div> 
      <!--footer-->
    <?php include_once('footer.php'); ?>
   
  </main>
  <?php include('settings.php')?>
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