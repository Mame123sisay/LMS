<?php
require_once ('../Database/DatabaseConnection.php');
require_once('user.php');
class Teacher extends user{
    private $conn;





public function __construct()
{
    $db = new DatabaseConnection();
    $this->conn = $db->getConnection();
}
public function AddCourseMaterial($title , $fileloc, $fileloc_tmp, $desc , $section_id,$grade_id, $subject_id , $teacher_id,$uploadedname)
{
  

    // Move the uploaded file to the uploads folder
    $targetDirectory = '../uploads/';
    $targetFilePath = $targetDirectory . basename($fileloc);
    
  if(move_uploaded_file($fileloc_tmp, $targetFilePath))
  {
   

  }
  else{

   
  }
    $insert_query = "INSERT INTO course_material (title, file_location, subject_id, section_id,grade_id, teacher_id, dessc, uploaded_date, uploadedby) VALUES ('$title', '$targetFilePath', '$subject_id', '$section_id','$grade_id', '$teacher_id', '$desc', NOW(), '$uploadedname')";
     $this->conn->query($insert_query);

    
}
public function viewUploadedMaterials($teacher_id){

    $selectQuery = "SELECT 
    sub.subject_name,
    gr.grade_name,
    sec.section_name,
    cm.title,
    cm.dessc,
    cm.uploaded_date,
    cm.uploadedby,
    cm.id,
    cm.file_location
    from course_material cm
    join subject sub on sub.subject_id=cm.subject_id
    join section sec on sec.section_id=cm.section_id
    join grade gr on gr.grade_id=cm.grade_id
    where cm.teacher_id='$teacher_id'";
    
    $result = $this->conn->query($selectQuery);

    if($result->num_rows>0){
        $files=array();
        while($Rowfiles=$result->fetch_assoc()){
            $files[]=$Rowfiles;
       }return $files;


    } 
} 
public function DeleteCourseMaterial($id){
    $deleteQuery = "DELETE FROM course_material WHERE id='$id'";
    if ($this->conn->query($deleteQuery) === TRUE) {
        // Deletion successful
        return true;
    } else {
        // Error deleting record
        echo "Error deleting record: " . $this->conn->error;
        return false;
    }
}
public function Addassignment($title , $fileloc, $fileloc_tmp, $desc , $section_id,$grade_id, $subject_id , $teacher_id,$uploadedname,$duedate)
{
  

    // Move the uploaded file to the uploads folder
    $targetDirectory = '../uploads/';
    $targetFilePath = $targetDirectory . basename($fileloc);
    
  if(move_uploaded_file($fileloc_tmp, $targetFilePath))
  {
   

  }
  else{

   
  }
    $insert_query = "INSERT INTO assignment (title, file_location, subject_id, section_id,grade_id, teacher_id, dessc, uploaded_date, uploadedby, duedate) VALUES ('$title', '$targetFilePath', '$subject_id', '$section_id','$grade_id', '$teacher_id', '$desc', NOW(), '$uploadedname','$duedate')";
     $this->conn->query($insert_query);
     $assignmentId = $this->conn->insert_id;
     return $assignmentId;
    
}
 public function InsertNotification($student_id,$assignmentId,$message){
    $insert_query="insert into notifications (student_id,assignment_id,message) values('$student_id','$assignmentId','$message')";
    $this->conn->query($insert_query);



 }
public function viewUploadedAssignment($teacher_id){

    $selectQuery = "SELECT 
    sub.subject_name,
    gr.grade_name,
    sec.section_name,
    ass.title,
    ass.dessc,
    ass.id,
    ass.grade_id,
    ass.section_id,
    ass.subject_id,
    ass.uploaded_date,
    ass.uploadedby,
    ass.file_location,
    ass.duedate
    from assignment ass
    join subject sub on sub.subject_id=ass.subject_id
    join section sec on sec.section_id=ass.section_id
    join grade gr on gr.grade_id=ass.grade_id
    where ass.teacher_id='$teacher_id'";
    
    $result = $this->conn->query($selectQuery);

    if($result->num_rows>0){
        $files=array();
        while($Rowfiles=$result->fetch_assoc()){
            $files[]=$Rowfiles;
       }return $files;


    } 
} 
public function DeleteAssignment($id){
    $deleteQuery = "DELETE FROM assignment WHERE id='$id'";
    if ($this->conn->query($deleteQuery) === TRUE) {
        // Deletion successful
        return true;
    } else {
        // Error deleting record
        echo "Error deleting record: " . $this->conn->error;
        return false;
    }
}
 


public function StudentList($section_id,$grade_id){
    $selectQuery="select * from student where section_id='$section_id' and grade_id='$grade_id'";
    $result=$this->conn->query($selectQuery);
    if ($result->num_rows > 0) {
        $studlists = array();
        
        while ($Rowstudlist = $result->fetch_assoc()) {
            $studlists[] = $Rowstudlist;
        }
        
        return $studlists;
    }}
    public function get_class_for_teacher($teacher_id) {
        $selectQuery = "SELECT
            t.firstname,
            t.lastname,
            tsgs.section_id,
            tsgs.grade_id,
            tsgs.subject_id,
            sub.subject_name,
            g.grade_name,
            sec.section_name
        FROM
            teacher_subject_grade_section tsgs
            JOIN teacher t ON t.teacher_id = tsgs.teacher_id
            JOIN subject sub ON sub.subject_id = tsgs.subject_id
            JOIN grade g ON g.grade_id = tsgs.grade_id
            JOIN section sec ON sec.section_id = tsgs.section_id
        WHERE
            tsgs.teacher_id = ?
        GROUP BY
            tsgs.subject_id, tsgs.grade_id, tsgs.section_id";
    
        $stmt = $this->conn->prepare($selectQuery);
        $stmt->bind_param("i", $teacher_id);
        $stmt->execute();
        $Result = $stmt->get_result();
    
        if ($Result->num_rows > 0) {
            $tsgsec = array();
            while ($Rowtsgsec = $Result->fetch_assoc()) {
                $tsgsec[] = $Rowtsgsec;
            }
            return $tsgsec;
        }
        return null;
    }
    public function viewSubmittedAssignment($assignment_id,$section_id,$grade_id,$subject_id){

      $selectQuery="SELECT 
      st.firstname,
      st.lastname,
      st.username,
      sa.submission_date,
      sa.file_location
       FROM submitted_assignments sa
       join student st on st.student_id=sa.student_id

       WHERE sa.assignment_id='$assignment_id' and sa.grade_id='$grade_id' and sa.subject_id='$subject_id ' and sa.section_id='$section_id'";
      $Result = $this->conn->query($selectQuery);
        
      if ($Result->num_rows > 0) {
          $submitedAssignmentdata = array();
          
          while ($Rowtsgsec = $Result->fetch_assoc()) {
              $submitedAssignmentdata[] = $Rowtsgsec;
          }
          
          return $submitedAssignmentdata;
      }

    }
    public function UpdateProfilePicture($teacherId,$profile_picture,$profile_picture_tmp){
        // Move the uploaded file to the uploads folder
        $targetDirectory = '../pages/profile/';
        $targetFilePath = $targetDirectory . basename($profile_picture);
        
      if(move_uploaded_file($profile_picture_tmp, $targetFilePath))
      {
       echo"file sucessfully uploaded";
    
      }
      else{
    
       echo"failure";
      }
        $updateQuery="update teacher set profile_picture='$targetFilePath' where teacher_id='$teacherId'";
        $this->conn->query($updateQuery);

    }
    public function Changepassword($teacher_id,$newpass){
        $updateQuery="update teacher set password='$newpass' where teacher_id='$teacher_id'";
        $this->conn->query($updateQuery);


    }
    public function mark_as_seen($id){
        $updateQuery="update announcements_teacher set is_read='seen' where announcement_id='$id'";
        $this->conn->query($updateQuery);
    
        if (isset($_SESSION['unread_count']) && $_SESSION['unread_count'] > 0) {
            $_SESSION['unread_count']--;
        
    
        // Redirect the user back to the view_announcement.php file
        header("Location: view_announcement.php");
        exit;
    }
    else {
        // Handle the case where the 'id' parameter is not set
        echo "<script>alert(' No unseen Announcements')</script>";
        exit;
    }
    }
// inserted by me

public function getStudents() {
    $query = "SELECT student_id, firstname, section_id FROM student";
    $result = $this->conn->query($query);
    if ($result === FALSE) {
        die("Error in query: " . $this->conn->error);
    }
    $students = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $students[] = $row;
        }
    }
    return $students;
}

public function getAcademicYears() {
    $query = "SELECT * FROM academic_year";
    $result = $this->conn->query($query);

    $years = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $years[] = $row;
        }
    }

    return $years;
}

public function getSections($teacher_id) {
    $sections = [];
    $query = "
        SELECT s.section_id, s.section_name 
        FROM teacher_subject_grade_section tsgs
        JOIN section s ON tsgs.section_id = s.section_id
        WHERE tsgs.teacher_id = ?
    ";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $teacher_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $sections[] = $row;
        }
    }
    return $sections;
}

public function getSemester() {
    $query = "SELECT semester_name FROM semester";
    $result = $this->conn->query($query);
    if ($result === FALSE) {
        die("Error in query: " . $this->conn->error);
    }
    $semesters = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $semesters[] = $row;
        }
    }
    return $semesters;
}

public function getSubjects() {
    $query = "SELECT subject_id, subject_name FROM subject";
    $result = $this->conn->query($query);
    if ($result === FALSE) {
        die("Error in query: " . $this->conn->error);
    }
    $subjects = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $subjects[] = $row;
        }
    }
    return $subjects;
}

public function insertStudentResult($student_id, $score, $year, $semester, $teacher_id, $subject_id) {
    $student_id = $this->conn->real_escape_string($student_id);
    $score = $this->conn->real_escape_string($score);
    $year = $this->conn->real_escape_string($year);
    $semester = $this->conn->real_escape_string($semester);
    $teacher_id = $this->conn->real_escape_string($teacher_id);
    $subject_id = $this->conn->real_escape_string($subject_id);

    if ($semester === 'II') {
        $firstSemesterExists = $this->checkIfFirstSemesterExists($student_id, $year, $subject_id);
        if (!$firstSemesterExists) {
            return false;
        }
    }

    $insertQuery = "INSERT INTO student_result (student_id, score, year, semester, teacher_id, subject_id) 
                    VALUES ('$student_id', '$score', '$year', '$semester', '$teacher_id', '$subject_id')";

    return $this->conn->query($insertQuery) === TRUE;
}

public function getResultsByTeacher($teacher_id) {
    $query = "SELECT * FROM student_result WHERE teacher_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $teacher_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

public function deleteStudentResult($result_id) {
    $query = "DELETE FROM student_result WHERE result_id = ?";
    $stmt = $this->conn->prepare($query);
    if (!$stmt) {
        die("Error: " . $this->conn->error);
    }
    $stmt->bind_param("i", $result_id);
    $stmt->execute();
}

public function updateStudentResult($result_id, $score) {
    $query = "UPDATE student_result SET score = ? WHERE result_id = ?";
    $stmt = $this->conn->prepare($query);
    if (!$stmt) {
        return ["status" => "error", "message" => "Prepare statement failed: " . $this->conn->error];
    }
    $stmt->bind_param("ii", $score, $result_id);
    $success = $stmt->execute();
    return $success ? ["status" => "success"] : ["status" => "error", "message" => "Execution failed: " . $stmt->error];
}

public function getResult($result_id) {
    $query = "SELECT * FROM student_result WHERE result_id = ?";
    $stmt = $this->conn->prepare($query);
    if (!$stmt) {
        die("Error: " . $this->conn->error);
    }
    $stmt->bind_param("i", $result_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

public function getSubjectsByTeacher($teacher_id) {
    $query = "
        SELECT s.subject_id, s.subject_name 
        FROM teacher_subject_grade_section tsgs
        JOIN subject s ON tsgs.subject_id = s.subject_id
        WHERE tsgs.teacher_id = ?
    ";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $teacher_id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}

public function checkIfFirstSemesterExists($student_id, $year, $subject_id) {
    $query = "SELECT COUNT(*) AS count FROM student_result 
              WHERE student_id = ? 
              AND year = ? 
              AND semester = 'I' 
              AND subject_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("iss", $student_id, $year, $subject_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

public function checkIfResultExists($student_id, $year, $semester, $subject_id) {
    $query = "SELECT COUNT(*) AS count FROM student_result 
              WHERE student_id = ? 
              AND year = ? 
              AND semester = ? 
              AND subject_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("isss", $student_id, $year, $semester, $subject_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

public function getStudent($student_id) {
    $query = "SELECT student_id, firstname, lastname, username FROM student WHERE student_id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result === FALSE) {
        die("Error in query: " . $this->conn->error);
    }
    return $result->num_rows > 0 ? $result->fetch_assoc() : null;
}

public function GetSubjectById($subjectId)
{
    $selectQuery = "SELECT * FROM subject WHERE subject_id = $subjectId";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows == 1) {
        $subject = $result->fetch_assoc();
        return $subject;
    } else {
        echo "Error: subject not found.";
        return null;
    }
}






    }?>


