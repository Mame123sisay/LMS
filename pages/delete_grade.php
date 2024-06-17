<?php
$id = $_GET['id'];

require_once('../classs/Admin.php');
$Admin = new Admin();
$result = $Admin->Deletegrade($id);

if ($result) {
    header('location:view_grade.php');
    exit();
} else {
    echo "Error deleting student.";
}
?>