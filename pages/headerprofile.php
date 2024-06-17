<?php
            
            $admin_id=$_SESSION['id'];
            include 'dbcon.php';
            $query_admin = "SELECT * FROM admin WHERE admin_id='$admin_id' ";


            $result_admin = mysqli_query($conn, $query_admin) or die(mysqli_error($conn));
$row_admin = mysqli_fetch_array($result_admin);

        
            ?>
             <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" " >
      <img style="border-radius:2px;" src="<?php echo $row_admin['profile_picture']; ?>" width="70" height="60" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white"></span>
      </a>
    </div>