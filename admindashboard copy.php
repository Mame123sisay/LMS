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
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white  active bg-gradient-primary" href="./admindashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a  class="nav-link text-white "   href="./pages/Add_student.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link text-white "   href="./pages/view_Student.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./pages/Add_teacher.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Teacher</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/view_teacher.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Teacher</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="./pages/Add_subject.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Subject</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/view_subject.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Subject</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Add_grade.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Grade</span>
          </a>
        </li> <li class="nav-item">
          <a class="nav-link text-white " href="./pages/view_grade.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">View Grade</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Add_announcement.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Add Announcement</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/view_announcement.php">
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
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            
            
            <!-- change avator -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">mohammed sisay</span>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Change Profile Picture</span> 
                        </h6>
                        
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md"href="change_password_admin.php" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Change Password</span> 
                        </h6>
                       
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Logout</span> 
                        </h6>
                       
                      </div>
                    </div>
                  </a>
                </li>
               
              </ul>
            </li>
           
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
           
          </ul>
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
                <h6 class="text-white text-capitalize ps-3">Data Number </h6>
              </div>
            </div>
            <?php 
            
            
            
            
            
            ?>
           
            <div class="card-body px-0 pb-2">
           
                
    <div class="form-group">
        <div style="margin-left: 60px;">
       <!-- <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Student ID:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="text" name="studentId" id="studentId" required class="form-control" placeholder=" StudentId"><br>
        </div>
        </div>--> 
        <?php
        include 'pages/person.php';
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
       <!-- <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Last Name:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="text" name="lastname" id="studentId" required class="form-control" placeholder="last name"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Email:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="email" name="email" id="email" required class="form-control" placeholder="Email"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Phone Number:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="number" name="phone" id="studentId" required class="form-control" placeholder="Phone number"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">User Name:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="text" name="username" id="studentId" required class="form-control" placeholder="user name"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Password:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="password" name="password" id="studentId" required class="form-control" placeholder="password"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Address:</label></div>
        <div class="col-8" style="margin-left: 0px;">
        <input type="text" name="address" id="studentId" required class="form-control" placeholder="Address"><br>
        </div>
        </div>
        <div class="row">
        <div class="col-2">
        <label style=" font-size: 20px;font-weight:bold;" for="studentId">Sex:</label></div>
        <div class="col-8"><select name="sex" id="sex" required class="form-control" >
        <option value="Male"></option>
            
        <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select></div>
        </div>  <br>-->
        
       
        

       
   
            </div>
      
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Information Science Students</a>
                for Minilik Secondary school LMNS.
                <p>All rights are Reserved.</p>
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
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
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>