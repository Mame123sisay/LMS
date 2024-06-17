<?php
session_start();
require_once('../classs/Teacher.php');
$teacher = new Teacher();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $result_id = $_POST['result_id'];
  $teacher->deleteStudentResult($result_id);
  header('Location: View_inserted_result.php');
}
?>
