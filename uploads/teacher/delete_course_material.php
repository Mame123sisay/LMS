<?php
$id = $_GET['id'];

require_once('../classs/Teacher.php');
$Teacher = new Teacher();
$result = $Teacher->DeleteCourseMaterial($id);

if ($result) {
    header('location:teacher_uploaded_material.php');
    exit();
} else {
    echo "Error deleting Course Material.";
}
?>