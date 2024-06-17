<?php
session_start();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
include_once('../classs/Teacher.php');
$teacher= new Teacher();
$teacher->mark_as_seen($id);

    // Decrement the unread count in the session
    if (isset($_SESSION['unread_count']) && $_SESSION['unread_count'] > 0) {
        $_SESSION['unread_count']--;
    }

    // Redirect the user back to the view_announcement.php file
    header("Location: view_announcement.php");
    exit;
} else {
   
    
}
?>