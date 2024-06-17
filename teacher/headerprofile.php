<?php
            include '../pages/dbcon.php';
            $query_teacher =  "SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
            $result_teacher = mysqli_query($conn, $query_teacher) or die(mysqli_error($conn));
        $row_teacher = mysqli_fetch_array($result_teacher);
            
            
            ?>
<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " target="_blank">
        <img src="<?php echo $row_teacher['profile_picture']; ?>" width="70" height="50"  class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white"></span>
      </a>
    </div>