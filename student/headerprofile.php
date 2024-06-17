<?php
            include '../pages/dbcon.php';
            $query_student =  "SELECT * FROM student WHERE student_id='$student_id'";
            $result_student = mysqli_query($conn, $query_student) or die(mysqli_error($conn));
        $row_student = mysqli_fetch_array($result_student);
            
            
            ?>
<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
  <img style="border-radius:2px;" src="<?php echo $row_student['profile_picture']; ?>" width="70" height="50" class="navbar-brand-img h-100" alt="main_logo">
  <span class="ms-1 font-weight-bold text-white"></span>
</a>
    </div>