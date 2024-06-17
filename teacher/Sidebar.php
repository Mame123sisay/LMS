<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>Minilik LMS</title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/47d51daedb.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="../assets/css/Style.css" rel="stylesheet" />
  <style>
     .sidebar-section {
      margin-bottom: 20px;
    }
    .sidebar-section h6 {
      text-transform: uppercase;
      font-weight: bold;
      color: #fff;
      margin-left: 15px;
      margin-top: 15px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Teacher Panel</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="w-auto max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="./teacher_dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <div class="sidebar-section">
          <h6>My Class</h6>
          <ul class="navbar-nav">
        <li class="nav-item">
          <a  class="nav-link text-white  "   href="./view_class.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">My Class</span>
          </a>
        </li>
          </ul>
        </div>
        <!-- Material Section -->
        <div class="sidebar-section">
          <h6>Material</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="upload_material.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">upload_file</i>
                </div>
                <span class="nav-link-text ms-1">Upload Course Materials</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="./pages/Add_teacher.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">details</i>
                </div>
                <span class="nav-link-text ms-1">View Course Materials Details</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Exam Bank Section -->
        <div class="sidebar-section">
          <h6>Exam Bank</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="./pages/view_subject.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">upload_file</i>
                </div>
                <span class="nav-link-text ms-1">Upload Mock Exam</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="./pages/Add_grade.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">visibility</i>
                </div>
                <span class="nav-link-text ms-1">View Mock Exam</span>
              </a>
            </li>
          </ul>
        </div>

        <div class="sidebar-section">
          <h6>Result</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="insert_result.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">edit</i>
                </div>
                <span class="nav-link-text ms-1">Insert Student Result</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="View_result.php">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">visibility</i>
                </div>
                <span class="nav-link-text ms-1">View Student Result</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Notification -->
        <div class="sidebar-section">
          <h6>Notification</h6>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="../pages/notifications.html">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">notifications</i>
                </div>
                <span class="nav-link-text ms-1">Notifications</span>
              </a>
            </li>
          </ul>
        </div>

      </ul>
    </div>
  </aside>
</body>
</html>
