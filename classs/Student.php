<?php
require_once ('../Database/DatabaseConnection.php');
require_once ('../classs/user.php');
class Student extends User {
    private $birthdate;
    private $stream;
    private $conn;
   

   
    public function __construct(){

        $db = new DatabaseConnection();
        $this->conn = $db->getConnection();

    }
    public function GetFile($section_id,$grade_id){

        $selectQuery = "SELECT * FROM course_material where section_id = $section_id and grade_id = $grade_id";
        $result = $this->conn->query($selectQuery);
    
        if($result->num_rows>0){
            $files=array();
            while($Rowfiles=$result->fetch_assoc()){
                $files[]=$Rowfiles;
           }
           return $files;
    
    
        } }

        public function GetAssignment($section_id,$grade_id)
        {

            $selectQuery = "SELECT * FROM assignment where section_id = $section_id and  grade_id = $grade_id";
            $result = $this->conn->query($selectQuery);
        
            if($result->num_rows>0){
                $files=array();
                while($Rowfiles=$result->fetch_assoc()){
                    $files[]=$Rowfiles;
               }return $files;
        
        
            } }

            
        public function GetSectionNameById($stud_id){
            $selectQuery="select
            g.grade_name, 
            sec.section_name,
            st.section_id,
            st.grade_id
            from student st
            join grade g on st.grade_id = g.grade_id
            join section sec on st.section_id = sec.section_id
            where st.student_id='$stud_id '";
            $result=$this->conn->query($selectQuery);
            if ($result->num_rows > 0) {
                $secgr=array();
              while( $row =$result->fetch_assoc()){
                    $secgr[]=$row;
               
            }
            return $secgr;
        }}
        public function GetTeacherSubject($sectionname_id,$grade_id){
            $selectQuery="select
            t.firstname, 
            t.lastname,
            sub.subject_name
            from teacher_subject_grade_section tsgs
            join subject sub on sub.subject_id = tsgs.subject_id
            join teacher t on tsgs.teacher_id = t.teacher_id
            where tsgs.section_id='$sectionname_id' and tsgs.grade_id='$grade_id'";
            $result=$this->conn->query($selectQuery);
            if ($result->num_rows > 0) {
                $subtch=array();
              while( $row =$result->fetch_assoc()){
                    $subtch[]=$row;
               
            }
            return $subtch;
        }}
        public function GetSubjectNameForStudent($sectionname_id,$gradeId){
            $selectQuery="select
           ass.subject_id,
          
           ass.section_id,
            ass.id,
            sub.subject_name
            from assignment ass
            join subject sub on sub.subject_id = ass.subject_id
           
            where ass.section_id='$sectionname_id' and ass.grade_id='$gradeId'";
            $result=$this->conn->query($selectQuery);
            if ($result->num_rows > 0) {
                $subtch=array();
              while( $row =$result->fetch_assoc()){
                    $subtch[]=$row;
               
            }
            return $subtch;
        }}
        public function GetSectionId($studId){
    
            $selectQuery = "SELECT * FROM student where student_id=$studId";
            $result = $this->conn->query($selectQuery);
        
            if ($result->num_rows > 0) {
              $studRow=$result->fetch_assoc();
                $section_id=$studRow['section_id'];
               $grade_id= $studRow['grade_id'];
               
               return ['section_id' => $section_id, 'grade_id' => $grade_id];
        }}

        public function SubmitAssignment($assignment_id,$subject_id,$section_id,$grade_id,$fileloc,$fileloc_tmp,$student_id)
    {
  

    // Move the uploaded file to the uploads folder
    $targetDirectory = '../uploads/';
    $targetFilePath = $targetDirectory . basename($fileloc);
    
  if(move_uploaded_file($fileloc_tmp, $targetFilePath))
  {
   

  }
  else{

   
  }
    $insert_query = "INSERT INTO submitted_assignments (assignment_id,student_id, file_location,submission_date, grade_id, section_id,subject_id) VALUES ('$assignment_id','$student_id', '$targetFilePath', NOW(),'$grade_id', '$section_id','$subject_id')";
     $this->conn->query($insert_query);

    
}
public function UpdateProfilePicture($id,$profile_picture,$profile_picture_tmp){
    // Move the uploaded file to the uploads folder
    $targetDirectory = '../pages/profile/';
    $targetFilePath = $targetDirectory . basename($profile_picture);
    
  if(move_uploaded_file($profile_picture_tmp, $targetFilePath))
  {
   

  }
  else{

   echo"failure";
  }
    $updateQuery="update student set profile_picture='$targetFilePath' where student_id='$id'";
    $this->conn->query($updateQuery);

}
public function Changepassword($student_id,$newpass){
    $updateQuery="update student set password='$newpass' where student_id='$student_id'";
    $this->conn->query($updateQuery);


}
public function mark_as_seen($id){
    $updateQuery="update announcements_student set is_read='seen' where announcement_id='$id'";
    $this->conn->query($updateQuery);

    if (isset($_SESSION['unread_count']) && $_SESSION['unread_count'] > 0) {
        $_SESSION['unread_count']--;
    

    // Redirect the user back to the view_announcement.php file
    header("Location: view_announcement.php");
    exit;
}
else {
    echo "<script>alert(' No unseen Announcements')</script>";
  
    exit;
    
}
}



// inserted by me 

public function getAcademicYear() {
    return $this->academicYear;
}



public function getResultsByStudent($student_id)
{
    $results = array();

    // Prepare SQL statement to fetch results for the given student ID
    $sql = "SELECT * FROM student_result WHERE student_id = $student_id";

    // Execute SQL query
    $result = $this->conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch results and store them in an array
        while ($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    }

    return $results;
}



public function getResultsTOStudent($student_id)
{
    $query = "SELECT student_result.subject_id, student_result.Year,student_result.semester, student_result.score
          FROM student_result
          JOIN subject ON student_result.subject_id = subject.subject_id 
          WHERE student_result.student_id = ?";

    $stmt = $this->conn->prepare($query);
    $stmt->bind_param("i", $student_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $results = [];

    while ($row = $result->fetch_assoc()) {
        $results[] = $row;
    }

    $stmt->close();
    return $results;
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





   
