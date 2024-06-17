<?php
session_start();
$username = $_POST['username'];
$password = hash('sha256',$_POST['password']);

$role = $_POST['role'];

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'minilik') or die(mysqli_error($conn));

/* student */
if($role=='Student'){
    $query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$query)or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);
$num_row = mysqli_num_rows($result);

if( $num_row > 0 ) { 
    $_SESSION['id']=$row['student_id'];
    $student_id=$row['student_id'];
    
    $sql_unread = "SELECT COUNT(*) AS unread_count 
                   FROM announcements_student 
                   WHERE student_id = '$student_id'";
    $result_unread = $conn->query($sql_unread);
    $unread_count = 0; 
    
    
    
    if ($result_unread->num_rows > 0) {
        $row = $result_unread->fetch_assoc();
        $unread_count = $row["unread_count"];
    }
    $_SESSION['unread_count']=$unread_count;
    
    $query = "SELECT 
    a.title,
    a.content, 
    a.sent_date, 
    a.announcement_id FROM announcement a
     JOIN announcements_student st 
    ON a.announcement_id=st.announcement_id  where st.student_id='$student_id'";
    $result_announcement= $conn->query($query);
    
    // Create an array to store all the announcements
    $announcements = [];
    
    while($row = $result_announcement->fetch_assoc()) {
        $announcements[] = [
            'title' => $row['title'],
            'content' => $row['content'],
            'sent_date' => $row['sent_date'],
            'announcement_id' => $row['announcement_id']
        ];
    }
    
    
    // Store the announcements array in the session
    $_SESSION['announcements'] = $announcements;
    
    // Redirect to the view_section.php page
    
    header('location: student/view_section.php');
    
    }

}
 else if($role =='Admin'){

/*  admin*/
$query_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result_admin = mysqli_query($conn,$query_admin)or die(mysqli_error($conn));
$row_admin = mysqli_fetch_array($result_admin);
$num_row_admin = mysqli_num_rows($result_admin);
if ($num_row_admin > 0){
    $_SESSION['id']=$row_admin['admin_id'];
    header('location:pages/dashboard.php');
    
     }


}
else if($role=='Teacher'){
/* teacher */
$query_teacher = mysqli_query($conn,"SELECT * FROM teacher WHERE username='$username' AND password='$password'")or die(mysqli_error($conn));
$num_row_teacher = mysqli_num_rows($query_teacher);
$row_teacher = mysqli_fetch_array($query_teacher);
if ($num_row_teacher > 0)
{
   $teacher_id= $row_teacher['teacher_id'];
   $_SESSION['id'] = $row_teacher['teacher_id'];
   
   

 
   $sql_unread = "SELECT COUNT(*) AS unread_count 
   FROM announcements_teacher 
   WHERE teacher_id = '$teacher_id'";
$result_unread = $conn->query($sql_unread);
$unread_count = 0;

if ($result_unread->num_rows > 0) {
    $row = $result_unread->fetch_assoc();
    $unread_count = $row["unread_count"];
}
$_SESSION['unread_count']=$unread_count;

$query = "SELECT 
a.title,
a.content, 
a.sent_date, 
a.announcement_id FROM announcement a
 JOIN announcements_teacher at 
ON a.announcement_id=at.announcement_id  where at.teacher_id='$teacher_id'";


$result_announcements = $conn->query($query);

// Create an array to store all the announcements
$announcementsteacher = [];

while($row = $result_announcements->fetch_assoc()) {
    $announcementsteacher[] = [
        'title' => $row['title'],
        'content' => $row['content'],
        'sent_date' => $row['sent_date'],
        'announcement_id' => $row['announcement_id']
    ];
}


// Store the announcements array in the session
$_SESSION['announcement'] = $announcementsteacher;

// Redirect to the view_section.php page
header('location: teacher/view_class.php');

}
 

}
else{

    echo"<script>alert('Wrong Password or username')</script>";
    header('location: login_form.php');
}

?>
  
	
