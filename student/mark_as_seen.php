<?php
session_start();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
include_once('../classs/Student.php');
$student= new Student();
$student->mark_as_seen($id);
    $query = "UPDATE notifications SET status = 'seen' WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Decrement the unread count in the session
    if (isset($_SESSION['unread_count']) && $_SESSION['unread_count'] > 0) {
        $_SESSION['unread_count']--;
    }

    // Redirect the user back to the view_announcement.php file
    header("Location: view_announcement.php");
    exit;
} else {
    echo "<script>alert('No unseen Announcements')</script>";
}
?>