<?php
session_start();
$teacher_id = $_SESSION['id'];

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
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../assets/css/Style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="g-sidenav-show bg-gray-200">



    <?php
    include '../pages/dbcon.php';
    $query_teacher =  "SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
    $result_teacher = mysqli_query($conn, $query_teacher) or die(mysqli_error($conn));
    $row_teacher = mysqli_fetch_array($result_teacher);


    ?>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" " target="_blank">
                <img src="<?php echo $row_teacher['profile_picture']; ?>" width="70" height="50" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white"></span>
            </a>
        </div>

        <hr class="horizontal light mt-0 mb-2">
        <div class=" w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="./teacher_dashboard.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="../teacher/view_class.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">My Class</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="../teacher/upload_material.php">
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
                <!-- me -->


                <li class="nav-item  active bg-gradient-primary">
                    <a class="nav-link text-white " href="../teacher/insert_student_result.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Insert Student Result </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="../teacher/view_inserted_result.php">
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
                    <a class="nav-link text-white " href="../teacher/view_notifications.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                            <span class="notification-count"><?php echo $_SESSION['unread_count']; ?></span>
                        </div>
                        <span class="nav-link-text ms-1">Notifications</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
            </div>
        </div>
    </aside>
    <?php


        require_once('../classs/Teacher.php');
    $teacher = new Teacher();
    $subjects = $teacher->getSubjectsByTeacher($teacher_id); // Modified method to get subjects assigned to the teacher
    $semesters = $teacher->getSemester();
    $sections = $teacher->getSections($teacher_id); // New method to get sections
    $students = $teacher->getStudents();
    $years = $teacher->getAcademicYears();
    ?>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Insert Your Student Score</li>
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
                                <span class="d-sm-inline d-none"><?php echo $row_teacher['firstname'] . ' ' . $row_teacher['lastname'] ?></span>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="change_teacherprofile.php">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="<?php echo $row_teacher['profile_picture'] ?>" class="avatar avatar-sm  me-3 ">
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
                                    <a class="dropdown-item border-radius-md" href="change_password.php" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
                                    <a class="dropdown-item border-radius-md" href="../pages/logout.php">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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



        <!-- end of nav bar -->



        <div class="row ">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-body px-0 pb-2">
                        <a href="View_inserted_result.php?" class="view">
                            view
                        </a>
                        <form method="POST" action="" enctype="multipart/form-data" onsubmit="return validateScore();" class="styled-form ">

                            <div class="form-group">
                                <label for="year" class="form-label">Academic Year</label>
                                <select class="form-control" id="year" name="year" required>
                                    <option value="">Select Academic Year</option>
                                    <?php foreach ($years as $year) : ?>
                                        <option value="<?php echo $year['year_name']; ?>"><?php echo $year['year_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="subject_id" class="form-label">Subject</label>
                                <select class="form-control" id="subject_id" name="subject_id" required>
                                    <option value="">Select Subject</option>
                                    <?php foreach ($subjects as $subject) : ?>
                                        <option value="<?php echo $subject['subject_id']; ?>"><?php echo $subject['subject_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="section_id" class="form-label">Select Section</label>
                                <select class="form-control" id="section_id" name="section_id" required>
                                    <option value="">Select Section</option>
                                    <?php foreach ($sections as $section) : ?>
                                        <option value="<?php echo $section['section_id']; ?>"><?php echo $section['section_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="student_id" class="form-label">Select Student</label>
                                <select class="form-control" id="student_id" name="student_id" required>
                                    <option value="">Select Student</option>
                                    <?php foreach ($students as $student) : ?>
                                        <option value="<?php echo $student['student_id']; ?>" data-section="<?php echo $student['section_id']; ?>">
                                            <?php echo $student['firstname']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="semester" class="form-label">Semester</label>
                                <select class="form-control" id="semester" name="semester" required>
                                    <option value="">Select Semester</option>
                                    <?php foreach ($semesters as $semester) : ?>
                                        <option value="<?php echo $semester['semester_name']; ?>"><?php echo $semester['semester_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="score" class="form-label">Score</label>
                                <input type="number" class="form-control" id="score" name="score" step="0.01" required>
                            </div>
                            <input type="hidden" name="teacher_id" value="<?php echo $teacher_id; ?>">

                            <button type="submit" class="btn btn-primary maru">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "../pages/footer.php"; ?>
    </main>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $student_id = $_POST['student_id'];
        $score = $_POST['score'];
        $year = trim($_POST['year']);
        $semester = trim($_POST['semester']);
        $teacher_id = $_POST['teacher_id'];
        $subject_id = $_POST['subject_id'];

        // Check if the result already exists
        $exists = $teacher->checkIfResultExists($student_id, $year, $semester, $subject_id);

        if ($exists) {
            $insert_success = false;
            $message = "Result already exists.";
        } else {
            // Insert the student result into the database
            $insert_success = $teacher->insertStudentResult($student_id, $score, $year, $semester, $teacher_id, $subject_id);
            if ($insert_success) {
                $message = "Result inserted successfully.";
            } else {
                if ($semester === 'II' && !$teacher->checkIfFirstSemesterExists($student_id, $year, $subject_id)) {
                    $message = "Cannot insert second semester result before first semester.";
                } else {
                    $message = "Failed to insert result.";
                }
            }
        }
    }
    ?>

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
    <script src="../assets/js/javascript.js"></script>

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

    <script>
        function validateScore() {
            const score = document.getElementById('score').value;
            if (score < 0 || score > 100) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Score',
                    text: 'Score must be between 0 and 100.'
                });
                return false; // Prevent form submission
            }
            return true; // Allow form submission
        }

        <?php if (isset($insert_success)) : ?>
            <?php if ($insert_success === true) : ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Score inserted successfully!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to view result page if needed
                        // window.location.href = 'View_result.php';
                    }
                });
            <?php elseif ($insert_success === false) : ?>
                <?php if ($message === "Result already exists.") : ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '<?php echo $message; ?>'
                    });
                <?php elseif ($message === "Cannot insert second semester result before first semester.") : ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: '<?php echo $message; ?>'
                    });
                <?php else : ?>
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to insert the score. Please try again.'
                    });
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </script>


</body>

</html>