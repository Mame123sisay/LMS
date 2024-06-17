 
 <?php
 require_once ('../Database/DatabaseConnection.php');
 require_once ('../classs/user.php');
 

 class Admin extends user{
    
    private $conn;
    
    public function __construct() {
        $db = new DatabaseConnection();
        $this->conn = $db->getConnection();
    }



    
    public function addStudent( $firstname , $lastname, $email,$phone,$username, $password,$address,$sex,$year,$stream,$birthdate,$section_id,$grade_id) {
      
        
        // Escape special characters in the input data
        $firstname = $this->conn->real_escape_string($firstname);
        $lastname = $this->conn->real_escape_string($lastname);
        $email = $this->conn->real_escape_string($email);
        $phone = $this->conn->real_escape_string($phone);
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $password=hash('sha256',$password);
        $address = $this->conn->real_escape_string($address);
        $sex = $this->conn->real_escape_string($sex);
        $year = $this->conn->real_escape_string($year);
        $grade_id = $this->conn->real_escape_string($grade_id);
        $section_id = $this->conn->real_escape_string($section_id);
        $stream = $this->conn->real_escape_string($stream);
        $birthdate = $this->conn->real_escape_string($birthdate);

        $insert_sql = "INSERT INTO student (firstname, lastname, email, phone, username, password, address, sex, birth_date, grade_id, academic_id, section_id, stream,profile_picture)
        VALUES ('$firstname', '$lastname', '$email', '$phone','$username','$password', '$address', '$sex', '$birthdate', '$grade_id', '$year', '$section_id', '$stream','../pages/profile/userprofile.png')";
     $result=$this->conn->query($insert_sql);
    
       /* if ($result) {
            $student_id = $this->conn->insert_id;
            $this->IncrementNumberofstudent($grade_id, $section_id, $stream, $year, $student_id);
          
            
               
            }*/
        }

        public function IncrementNumberofstudent($grade_id, $section_id, $stream, $year,$student_id) {
            $grade_id = $this->conn->real_escape_string($grade_id);
            $section_id = $this->conn->real_escape_string($section_id);
            $stream = $this->conn->real_escape_string($stream);
            $year = $this->conn->real_escape_string($year);
        
            $selectQuery = "SELECT * FROM student_number WHERE grade_id = '$grade_id' AND section_id = '$section_id' AND stream = '$stream' AND year_id = '$year'";
            $result = $this->conn->query($selectQuery);
        
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $stud_count = $row['student_count'];
                $stud_count++;
        
                $updateQuery = "UPDATE student_number SET student_count = '$stud_count' WHERE grade_id = '$grade_id' AND section_id = '$section_id' AND stream = '$stream' AND year_id = '$year'";
                $Result = $this->conn->query($updateQuery);
        
                if ($Result) {
                    return true;
                } else {
                    return false;
                }
            } else {
                $insertQuery = "INSERT INTO student_number (grade_id, section_id, stream, year_id, student_count,student_id) VALUES ('$grade_id', '$section_id', '$stream', '$year', 1,'$student_id')";
                $Result = $this->conn->query($insertQuery);
        
                if ($Result) {
                    return true;
                } 
            }
        }
      
   

    public function viewStudents() {
        $selectQuery = "SELECT * FROM student ";
        $result = $this->conn->query($selectQuery);

        if ($result->num_rows > 0) {
            $students = array();

            while ($row = $result->fetch_assoc()) {
                $students[] = $row;
            }

            return $students;
        } else {
            return array();
        }
    }
    public function addAdmin( $firstname , $lastname,$username, $password) {
      
        
        // Escape special characters in the input data
        $firstname = $this->conn->real_escape_string($firstname);
        $lastname = $this->conn->real_escape_string($lastname);
        $username = $this->conn->real_escape_string($username);
        $password = hash('sha256',$this->conn->real_escape_string($password));
        $insert_sql = "INSERT INTO Admin (firstname, lastname, username, password,profile_picture)
        VALUES ('$firstname', '$lastname', '$username','$password','../pages/profile/userprofile.png')";
     $result=$this->conn->query($insert_sql);
    
    }
    public function getAdmin($admin_id){
        $selectQuery="select * from Admin where admin_id='$admin_id'";
        $excuteQuery=$this->conn->query($selectQuery);
      

    }

    public function EditStudent($Id,$fname , $lname,$username,$password, $email, $phone,$address,$sex,$year,$stream,$birthdate,$section,$grade_id) 
    {
    
       
        $updateQuery = "UPDATE student SET  firstname='$fname', lastname='$lname', email='$email', phone='$phone',username='$username',password='$password',address='$address', sex='$sex', birth_date='$birthdate', grade_id='$grade_id',academic_id='$year' ,section_id='$section', stream='$stream'  WHERE student_id= '$Id'";
         $this->conn->query($updateQuery);
        
       
    }
    public function updateAdmin($id){
        $update="update Admin set user_name='$username',password='$password' where Admin_id='$id'";
        $this->conn->query($update);
    

    }
    public function DeleteStudent($id)
{
    $deleteQuery = "DELETE FROM student WHERE student_id='$id'";
    if ($this->conn->query($deleteQuery) === TRUE) {
        // Deletion successful
        return true;
    } else {
        // Error deleting record
        echo "Error deleting record: " . $this->conn->error;
        return false;
    }
}
    public function AddTeacher( $fname, $lname, $email,$phone,$username,$password, $address,$sex,$acadamic_year,){

        $insertQuery = "INSERT INTO teacher ( firstname, lastname, email, phone,username,password, address, sex,academic_id,profile_picture) 
        VALUES ( '$fname', '$lname', '$email', '$phone','$username','$password',  '$address', '$sex', '$acadamic_year','../pages/profile/userprofile.png')";

if ($this->conn->query($insertQuery) === true) {


// Redirect to index.php
header('Location: view_teacher.php');
exit;

}




else {
echo "Error adding teacher: " . $this->conn->error;
}
}
public function getAllTeachers() {
    $selectQuery = "SELECT * FROM teacher";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $teachers = array();

        while ($row = $result->fetch_assoc()) {
            $teachers[] = $row;
        }

        return $teachers;
    } else {
        return array();
    }
}
public function GetTeacherById($teacherId) {
    $selectQuery = "SELECT * FROM teacher WHERE teacher_id = $teacherId";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows == 1) {
        $teacher = $result->fetch_assoc();
        return $teacher;
    } else {
        echo "Error: teacher not found.";
        return null;
    }
}

public function  EditTeacher($id, $fname, $lname, $email,$phone,$address,$username,$password,$sex,$acadamic_year_id)
      
    {
       
        $updateQuery = "UPDATE teacher SET  firstname='$fname', lastname='$lname', email='$email', phone='$phone',username='$username',password='$password', address='$address', sex='$sex',academic_id='$acadamic_year_id'  WHERE teacher_id=$id";
        $result = $this->conn->query($updateQuery);
    
       
    }
    public function viewTeachers() {
        $selectQuery = "SELECT * FROM teacher";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows > 0) {
            $teachers = array();
    
            while ($row = $result->fetch_assoc()) {
                $teachers[] = $row;
            }
    
            return $teachers;
        } else {
            return array();
        }
    }

    public function DeleteTeacher($id){
        $deleteQuery = "DELETE FROM teacher WHERE id='$id'";
        if ($this->conn->query($deleteQuery) === TRUE) {
            // Deletion successful
            return true;
        } else {
            // Error deleting record
            echo "Error deleting record: " . $this->conn->error;
            return false;
        }
    }
    public function AddSchoolYear($year){
       
        $insertQuery="INSERT INTO academic_year (year_name) values ('$year')";
        $this->conn->query($insertQuery);
       
       
    }
    public function EditSchool_year($Id,$yearname)
    {
       
        $updateQuery = "UPDATE academic_year SET  year_name='$yearname'  WHERE academic_year_id=$Id";
        $result = $this->conn->query($updateQuery);
    
       
    }

    
    #manage subject 
    public function AddSubject( $subject_name,$grade_id){
     
        $insertQuery="INSERT INTO subject (subject_name,grade_id) values ('$subject_name','$grade_id')";
        $result=$this->conn->query($insertQuery);
       
       
    }
    public function EditSubject($Id,$subject_name,$grade_id)
    {
       


        $updateQuery = "UPDATE subject SET  subject_name='$subject_name',grade_id='$grade_id'  WHERE subject_id=$Id";
        $result = $this->conn->query($updateQuery);
    
      
    }
    public function viewSubjects(){
        $selectQuery = "SELECT * FROM subject";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows > 0) {
            $subjects = array();
    
            while ($row = $result->fetch_assoc()) {
                $subjects[] = $row;
            }
    
            return $subjects;
        } 
        }
        public function GetSubjectById($subjectId) {
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
        
        
        #assign teacher for classs

        public function Assign_teacher_for_class( $teacher_id, $subject_id, $grade_id,$section_id){
            $tsgs=$this->view_allAll_assign_teacher();

            foreach($tsgs as $tsg)
                if($tsg['grade_id'] == $grade_id && $tsg['subject_id'] == $subject_id && $tsg['section_id'] == $section_id && $tsg['teacher_id'] == $teacher_id){
                    echo"<script>alert('grade   Name allready exist')</script>";
                      
                }
                else{
                    $insert_query="insert into teacher_subject_grade_section(teacher_id,subject_id,grade_id,section_id) values('$teacher_id','$subject_id','$grade_id','$section_id')";
                    $this->conn->query($insert_query);
                }
            
    
          
    
           
    
    
        }
        public function view_allAll_assign_teacher(){

            $selectQuery="SELECT
            tsgs.id,
            t.firstname,
            t.lastname,
            sub.subject_name,
            g.grade_name,
            sec.section_name
        FROM
            teacher_subject_grade_section tsgs
            JOIN teacher t ON t.teacher_id = tsgs.teacher_id
            JOIN subject sub ON sub.subject_id= tsgs.subject_id
            JOIN grade g ON g.grade_id= tsgs.grade_id
            JOIN section sec ON sec.section_id = tsgs.section_id";
     
            $Result= $this->conn->query($selectQuery);
            if($Result->num_rows>0){
             $tsgsec=array();
             while($Rowtsgsec=$Result->fetch_assoc()){
                 $tsgsec[]=$Rowtsgsec;
            }return $tsgsec;
     
     
         }             
     }

     public function EditAssign_teacher_for_class( $id,$teacher_id, $subject_id, $grade_id,$section_id){
        $insertQuery=" update  teacher_subject_grade_section set teacher_id=$teacher_id ,grade_id=$grade_id ,section_id=$section_id,subject_id=$subject_id where id=$id";
        $this->conn->query($insertQuery);
        
     }
              
     public function GetTeacherSubjectSectionbyId($id){
        $selectQuery="SELECT *FROM teacher_subject_grade_section where id=$id";
 
        $Result= $this->conn->query($selectQuery);
        if($Result->num_rows>0){
         
         $tsgsec=$Result->fetch_assoc();
            
        }return $tsgsec;
 
 
     }
     public function AddSection($section_name){

                    $insertQuery="insert into section(section_name) values ('$section_name')";
                    $result=$this->conn->query($insertQuery);
                   
    
                }
                public function EditSection($Id,$section_name)
     {
        
         $updateQuery = "UPDATE section SET  section_name='$section_name'  WHERE section_id=$Id";
          $this->conn->query($updateQuery);
     
        
     }
     public function AddGrade($grade_name){
                         $grades= $this->ViewGrades();
                         foreach($grades as $grade)
                         if($grade_name==$grade['grade_name']){
                            echo"<script>alert('grade   Name allready exist')</script>";
                         }
                                $insertQuery="insert into grade(grade_name) values ('$grade_name')";
                                $result=$this->conn->query($insertQuery);
                               
                            }
     public function EditGrade($Id,$grade_name)
     {
        
         $updateQuery = "UPDATE grade SET  grade_name='$grade_name'  WHERE grade_id=$Id";
          $this->conn->query($updateQuery);
     
        
     }
     public function DeleteGrade($id)
     {
         $deleteQuery = "DELETE FROM grade WHERE grade_id='$id'";
         if ($this->conn->query($deleteQuery) === TRUE) {
             // Deletion successful
             return true;
         } else {
             // Error deleting record
             echo "Error deleting record: " . $this->conn->error;
             return false;
         }
     }
       
     public function ViewGrades(){
        $selectQuery = "SELECT * FROM grade";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows > 0) {
            $grades = array();
    
            while ($row = $result->fetch_assoc()) {
                $grades[] = $row;
            }
    
            return $grades;
        } }
        public function ViewSchool_year(){
            $selectQuery = "SELECT * FROM academic_year";
            $result = $this->conn->query($selectQuery);
        
            if ($result->num_rows > 0) {
                $years = array();
        
                while ($row = $result->fetch_assoc()) {
                    $years[] = $row;
                }
        
                return $years;
            } 
            }
            public function GetSchool_year_ById($yearId) {
                $selectQuery = "SELECT * FROM academic_year WHERE academic_year_id = $yearId";
                $result = $this->conn->query($selectQuery);
            
                if ($result->num_rows == 1) {
                    $school_year = $result->fetch_assoc();
                    return $school_year;
                } else {
                    echo "Error: year not found.";
                    return null;
                }
            }
          
            public function GetGradeById($gradeId) {
                $selectQuery = "SELECT * FROM grade WHERE grade_id = $gradeId";
                $result = $this->conn->query($selectQuery);
            
                if ($result->num_rows == 1) {
                    $grade = $result->fetch_assoc();
                    return $grade;
                } else {
                    echo "Error: grade not found.";
                    return null;
                }
            }
            public function GetSectionById($sectionId) {
                $selectQuery = "SELECT * FROM section WHERE section_id = $sectionId";
                $result = $this->conn->query($selectQuery);
            
                if ($result->num_rows == 1) {
                    $section = $result->fetch_assoc();
                    return $section;
                } else {
                    echo "Error: section not found.";
                    return null;
                }
            }
          
      public function viewSections(){
            $selectQuery = "SELECT * FROM section";
            $result = $this->conn->query($selectQuery);
        
            if ($result->num_rows > 0) {
                $sections = array();
        
                while ($row = $result->fetch_assoc()) {
                    $sections[] = $row;
                }
        
                return $sections;
            } 
            }
            public function GetSubjectName($subjectId){
                $selectQuery = "SELECT * FROM subject where subject_id=$subjectId";
                $result = $this->conn->query($selectQuery);
            
                if ($result->num_rows > 0) {
                  $subjectRow=$result->fetch_assoc();
                    $subjectName=$subjectRow['subject_name'];
                   
                   return  $subjectName;
            }
             }
    


             public function GetStudentById($studentId) {
        $selectQuery = "SELECT * FROM student WHERE student_id = $studentId";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows == 1) {
            $student = $result->fetch_assoc();
            return $student;
        } else {
            echo "Error: Student not found.";
            return null;
        }
    }
        public function getUsernameandPassword($Id){
            $selectQuery="select * from users where user_id = $Id";
            $result=$this->conn->query($selectQuery);
            if ($result->num_rows == 1) {
                $usernameandpassword = $result->fetch_assoc();
                return $usernameandpassword;
            } else {
                echo "Error: Username and Password not found.";
                return null;
            }
        }
  public function  AddAnnouncement($title,$content,$admin_id){
    $insert_query="insert into announcement (title,content,sent_date,admin_id) values('$title','$content',Now(),'$admin_id')";
    $this->conn->query($insert_query);
    $announcementId = $this->conn->insert_id;
    return $announcementId;

  }
    
  public function InsertNotificationteacher($notifications)
  {
      $sql = "INSERT INTO announcements_teacher(announcement_id,teacher_id, is_read) VALUES ";
      $values = [];
  
      foreach ($notifications as $notification) {
          $values[] = "({$notification['announcement_id']}, {$notification['teacher_id']}, '{$notification['is_read']}')";
      }
  
      $sql .= implode(", ", $values);
      $this->conn->query($sql);
  }
 public function InsertNotificationStudent($notifications)
{
    $sql = "INSERT INTO announcements_student(announcement_id, student_id, is_read) VALUES ";
    $values = [];

    foreach ($notifications as $notification) {
        $values[] = "({$notification['announcement_id']}, {$notification['student_id']}, '{$notification['is_read']}')";
    }

    $sql .= implode(", ", $values);
    $this->conn->query($sql);
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
    $updateQuery="update admin set profile_picture='$targetFilePath' where admin_id='$id'";
    $this->conn->query($updateQuery);

}
public function Changepassword($admin_id,$newpass){
    $updateQuery="update admin set password='$newpass' where admin_id='$admin_id'";
    $this->conn->query($updateQuery);


}
}