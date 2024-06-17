<?php
$id = $_GET['id'];

require_once('../classs/Admin.php');
$Admin = new Admin();
$result = $Admin->DeleteTeacher($id);

if ($result) {
    header('location:view_teacher.php');
    exit();
} else {
    echo "Error deleting teacher.";
}
?>