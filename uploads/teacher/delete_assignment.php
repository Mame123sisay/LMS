<?php
$id = $_GET['id'];

require_once('../classs/Teacher.php');
$Teacher = new Teacher();
$result = $Teacher->DeleteAssignment($id);

if ($result) {
    header('location:teacher_uploaded_assignment.php');
    exit();
} else {
    echo "Error deleting Assignment.";
}
?>