
<?php

class Person {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $phone;
    protected $username;
    protected $password;
    protected $address;
    protected $sex;

    public function __construct($id, $firstName, $lastName, $email, $phone, $username, $password, $address, $sex) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->username = $username;
        $this->password = $password;
        $this->address = $address;
        $this->sex = $sex;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getSex() {
        return $this->sex;
    }
}

class Admin {
    private $conn; // Add a property to hold the database connection

    public function __construct() {
        // Call the dbconnection method to establish the database connection
        $this->dbconnection();
    }

    public function dbconnection() {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'minilik';

        $this->conn = new mysqli($host, $username, $password, $database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function addStudent( $firstname , $lastname, $email, $password,$phone,$username,$address,$sex,$year,$stream,$birthdate,$section_id,$grade_id) {
      
    
        // Escape special characters in the input data
        $firstname = $this->conn->real_escape_string($firstname);
        $lastname = $this->conn->real_escape_string($lastname);
        $email = $this->conn->real_escape_string($email);
        $phone = $this->conn->real_escape_string($phone);
        $username = $this->conn->real_escape_string($username);
        $password = $this->conn->real_escape_string($password);
        $address = $this->conn->real_escape_string($address);
        $sex = $this->conn->real_escape_string($sex);
        $year = $this->conn->real_escape_string($year);
        $grade_id = $this->conn->real_escape_string($grade_id);
        $section_id = $this->conn->real_escape_string($section_id);
        $stream = $this->conn->real_escape_string($stream);
        $birthdate = $this->conn->real_escape_string($birthdate);
        $insert_sql = "INSERT INTO student (firstname, lastname, email, phone, username, password, address, sex, birth_date, grade_id, academic_id, section_id, stream)
        VALUES ('$firstname', '$lastname', '$email', '$phone', '$username', '$password', '$address', '$sex', '$birthdate', '$grade_id', '$year', '$section_id', '$stream')";
     $result=$this->conn->query($insert_sql);
    
        if ($result) {
            $student_id = $this->conn->insert_id;
            $this->IncrementNumberofstudent($grade_id, $section_id, $stream, $year, $student_id);
          
            
                header("location:view_student.php");
            }
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
                } else {
                    return false;
                }
            }
        }
      
   
       



    
      


    

    public function getAllStudents() {
        $selectQuery = "SELECT * FROM student";
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

    public function EditStudent($Id)
    {
        $id = $Id;
    
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $grade_id = $_POST['grade'];
        $section = $_POST['section'];
        $year = $_POST['year'];
        $stream = $_POST['stream'];
        $birthdate = $_POST['birthdate'];
       
    
        $updateQuery = "UPDATE student SET  firstname='$fname', lastname='$lname', email='$email', phone='$phone', username='$username', password='$password', address='$address', sex='$sex', birth_date='$birthdate', grade_id='$grade_id',academic_id='$year' ,section_id='$section', stream='$stream'  WHERE id= $id";
        $result = $this->conn->query($updateQuery);
    
        if ($result) {
            // Redirect to view_student.php
            header('Location: view_student.php');
            exit;
        } else {
            echo "Error updating student: " . $result->error;
        }
    }
    
    public function GetStudentById($studentId) {
        $selectQuery = "SELECT * FROM student WHERE id = $studentId";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows == 1) {
            $student = $result->fetch_assoc();
            return $student;
        } else {
            echo "Error: Student not found.";
            return null;
        }
    }

    public function AddTeacher(){

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $sex = $_POST['sex']; 
        $acadamic_year=$_POST['year'];
        $insertQuery = "INSERT INTO teacher ( firstname, lastname, email, phone, username, password, address, sex,academic_id) 
        VALUES ( '$fname', '$lname', '$email', '$phone', '$username', '$password', '$address', '$sex', '$acadamic_year')";

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

public function EditTeacher($Id)
    {
        $id = $Id;
    
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $sex = $_POST['sex'];
        $acadamic_year_id=$_POST['year'];
       
    
        $updateQuery = "UPDATE teacher SET  firstname='$fname', lastname='$lname', email='$email', phone='$phone', username='$username', password='$password', address='$address', sex='$sex',academic_id='$acadamic_year_id'  WHERE id=$id";
        $result = $this->conn->query($updateQuery);
    
        if ($result) {
            // Redirect to view_student.php
            header('Location: view_teacher.php');
            exit;
        } else {
            echo "Error updating teacher: " . $result->error;
        }
    }
    public function GetTeacherById($teacherId) {
        $selectQuery = "SELECT * FROM teacher WHERE id = $teacherId";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows == 1) {
            $teacher = $result->fetch_assoc();
            return $teacher;
        } else {
            echo "Error: teacher not found.";
            return null;
        }
    }
    public function EditSubject($Id)
    {
        $id = $Id;
    
        $subjectname = $_POST['subjectname'];
        $grade_id = $_POST['gradeid'];
        
       
    
        $updateQuery = "UPDATE subject SET  subject_name='$subjectname',grade_id='$grade_id'  WHERE id=$id";
        $result = $this->conn->query($updateQuery);
    
        if ($result) {
            // Redirect to view_student.php
            header('Location: view_subject.php');
            exit;
        } else {
            echo "Error updating subject: " . $result->error;
        }
    }

   
    public function GetSectionById($sectionId) {
        $selectQuery = "SELECT * FROM section WHERE id = $sectionId";
        $result = $this->conn->query($selectQuery);
    
        if ($result->num_rows == 1) {
            $section = $result->fetch_assoc();
            return $section;
        } else {
            echo "Error: section not found.";
            return null;
        }
    }
    public function getAllSections(){
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
    
    

public function AddSection(){

    $section_name=$_POST['sectionname'];
   
    
            
                $insertQuery="insert into section(section_name) values ('$section_name')";
                $result=$this->conn->query($insertQuery);
                if($result){
            
                    header('location:view_section.php');
                    exit;
                }
                else{
                    echo"error".$result->error;
                }

            }
            public function AddGrade(){

                $grade_name=$_POST['gradename'];
               
                
                        
                            $insertQuery="insert into grade(grade_name) values ('$grade_name')";
                            $result=$this->conn->query($insertQuery);
                            if($result){
                        
                                header('location:view_grade.php');
                                exit;
                            }
                            else{
                                echo"error".$result->error;
                            }
            
                        }
            public function EditGrade($Id)
            {
                $id = $Id;
            
                $grade_name = $_POST['gradename'];
                
               
            
                $updateQuery = "UPDATE grade SET  grade_name='$grade_name'  WHERE id=$id";
                $result = $this->conn->query($updateQuery);
            
                if ($result) {
                    // Redirect to view_student.php
                    header('Location:view_grade.php');
                    exit;
                } else {
                    echo "Error updating grade: " . $result->error;
                }
            }
            public function GetGradeById($gradeId) {
                $selectQuery = "SELECT * FROM grade WHERE id = $gradeId";
                $result = $this->conn->query($selectQuery);
            
                if ($result->num_rows == 1) {
                    $grade = $result->fetch_assoc();
                    return $grade;
                } else {
                    echo "Error: grade not found.";
                    return null;
                }
            }
      



   

public function getAllGrades(){
    $selectQuery = "SELECT * FROM grade";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $grades = array();

        while ($row = $result->fetch_assoc()) {
            $grades[] = $row;
        }

        return $grades;
    } 
    }
    public function AddSubject(){
        $subject_name=$_POST['subjectname'];
        $grade_id=$_POST['grade'];
        $insertQuery="INSERT INTO subject (subject_name,grade_id) values ('$subject_name','$grade_id')";
        $result=$this->conn->query($insertQuery);
        if($result){
            header('location:view_subject.php');


        }
       
    }
    public function getAllSubjects(){
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
            $selectQuery = "SELECT * FROM subject WHERE id = $subjectId";
            $result = $this->conn->query($selectQuery);
        
            if ($result->num_rows == 1) {
                $subject = $result->fetch_assoc();
                return $subject;
            } else {
                echo "Error: subject not found.";
                return null;
            }
        }
    public function Get_TotalNumber_of_subjects(){
        $selectQuery="select * from subject";
        $result=$this->conn->query($selectQuery);
        $count_total_subjects=$result->num_rows;

        return $count_total_subjects;




        }

        public function Get_TotalNumber_of_sections(){
            $selectQuery="select * from section";
            $result=$this->conn->query($selectQuery);
            $count_total_sections=$result->num_rows;
    
            return $count_total_sections;
    
    
    
    
            }
            public function Get_TotalNumber_of_teachers(){
                $selectQuery="select * from teacher";
                $result=$this->conn->query($selectQuery);
                $count_total_teacher=$result->num_rows;
        
                return $count_total_teacher;
        
        
        
        
                }
                public function Get_TotalNumber_of_students(){
                    $selectQuery="select * from student";
                    $result=$this->conn->query($selectQuery);
                    $count_total_student=$result->num_rows;
            
                    return $count_total_student;
            
            
            
            
                    }
                    public function AddSchoolYear(){
                        $year=$_POST['year'];
                        $insertQuery="INSERT INTO academic_year (year_name) values ('$year')";
                        $result=$this->conn->query($insertQuery);
                        if($result){
                            header('location:view_school_year.php');
                
                
                        }
                       
                    }
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
                            $selectQuery = "SELECT * FROM academic_year WHERE id = $yearId";
                            $result = $this->conn->query($selectQuery);
                        
                            if ($result->num_rows == 1) {
                                $school_year = $result->fetch_assoc();
                                return $school_year;
                            } else {
                                echo "Error: year not found.";
                                return null;
                            }
                        }
                        public function EditSchool_year($Id)
                        {
                            $id = $Id;
                        
                            $yearname = $_POST['yearname'];
                            
                           
                        
                            $updateQuery = "UPDATE academic_year SET  year_name='$yearname'  WHERE id=$id";
                            $result = $this->conn->query($updateQuery);
                        
                            if ($result) {
                                // Redirect to view_student.php
                                header('Location: view_school_year.php');
                                exit;
                            } else {
                                echo "Error updating year: " . $result->error;
                            }
                        }

    public function Assign_teacher_for_class( $teacher_id, $subject_id, $grade_id, $section_id){
       

        $insert_query="insert into teacher_subject_grade_section(teacher_id,subject_id,grade_id,section_id) values('$teacher_id','$subject_id','$grade_id','$section_id')";
       $Result= $this->conn->query($insert_query);

        if($Result){
            header('location:view_assigned_class.php');
        }
        else{
            echo"error to assign teacher for class";
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
public function GetSectionNameById($stud_id){
    $selectQuery="select
    g.grade_name, 
    sec.section_name,
    st.section_id,
    st.grade_id
    from student st
    join grade g on st.grade_id = g.id
    join section sec on st.section_id = sec.id
    where st.id='$stud_id '";
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
    join subject sub on sub.id = tsgs.subject_id
    join teacher t on tsgs.teacher_id = t.id
    where tsgs.section_id='$sectionname_id' and tsgs.grade_id='$grade_id'";
    $result=$this->conn->query($selectQuery);
    if ($result->num_rows > 0) {
        $subtch=array();
      while( $row =$result->fetch_assoc()){
            $subtch[]=$row;
       
    }
    return $subtch;
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
            join teacher t on t.id = tsgs.teacher_id
            JOIN subject sub ON sub.id = tsgs.subject_id
            JOIN grade g ON g.id = tsgs.grade_id
            JOIN section sec ON sec.id = tsgs.section_id
        WHERE
            tsgs.teacher_id = '$teacher_id'";
        
        $Result = $this->conn->query($selectQuery);
        
        if ($Result->num_rows > 0) {
            $tsgsec = array();
            
            while ($Rowtsgsec = $Result->fetch_assoc()) {
                $tsgsec[] = $Rowtsgsec;
            }
            
            return $tsgsec;
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
       JOIN teacher t ON t.id = tsgs.teacher_id
       JOIN subject sub ON sub.id = tsgs.subject_id
       JOIN grade g ON g.id = tsgs.grade_id
       JOIN section sec ON sec.id = tsgs.section_id";

       $Result= $this->conn->query($selectQuery);
       if($Result->num_rows>0){
        $tsgsec=array();
        while($Rowtsgsec=$Result->fetch_assoc()){
            $tsgsec[]=$Rowtsgsec;
       }return $tsgsec;


    }             
}

public function AddCourseMaterial()
{
    $title = $_POST['title'];
    $fileloc = $_FILES['fileloc']['name'];
    $fileloc_tmp = $_FILES['fileloc']['tmp_name'];
    $desc = $_POST['desc'];
    $section_id = $_POST['section_id'];
    $subject_id = $_POST['subject_id'];
    $teacher_id = $_POST['teacher_id'];
    $uploadedname = $_POST['uploadedname'];

    // Move the uploaded file to the uploads folder
    $targetDirectory = '../uploads/';
    $targetFilePath = $targetDirectory . basename($fileloc);
    
  if(move_uploaded_file($fileloc_tmp, $targetFilePath))
  {
    echo 'file moved sucess';

  }
  else{

    echo "eror".error_get_last()['message'];
  }
    $insert_query = "INSERT INTO course_material (title, file_location, subject_id, section_id, teacher_id, dessc, uploaded_date, uploadedby) VALUES ('$title', '$targetFilePath', '$subject_id', '$section_id', '$teacher_id', '$desc', NOW(), '$uploadedname')";
    $result = $this->conn->query($insert_query);

    if ($result) {
        echo "Successfully uploaded.";
    } else {
        echo "Problem: " . $this->conn->error;
    }
}
public function GetSectionId($studId){
    
    $selectQuery = "SELECT * FROM student where id=$studId";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows > 0) {
      $studRow=$result->fetch_assoc();
        $section_id=$studRow['section_id'];
       
       return $section_id;
}}
public function GetSubjectName($subjectId){
    $selectQuery = "SELECT * FROM subject where id=$subjectId";
    $result = $this->conn->query($selectQuery);

    if ($result->num_rows > 0) {
      $subjectRow=$result->fetch_assoc();
        $subjectName=$subjectRow['subject_name'];
       
       return  $subjectName;
}




}
    public function GetFile($section_id){

        $selectQuery = "SELECT * FROM course_material where section_id = $section_id";
        $result = $this->conn->query($selectQuery);

        if($result->num_rows>0){
            $files=array();
            while($Rowfiles=$result->fetch_assoc()){
                $files[]=$Rowfiles;
           }return $files;
    
    
        } 
    }





}  


if (isset($_POST['assign'])){
    $admin=new Admin();
    $admin->Assign_teacher_for_class();
   
}
if (isset($_POST['addgrade'])){
    $admin=new Admin();
    $admin->AddGrade();
}

    if (isset($_POST['addstud'])) {
              
          // Retrieve the student attributes from the form
          $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $address = $_POST['address'];
          $sex = $_POST['sex'];
          $year = $_POST['year'];
          $grade_id = $_POST['grade'];
          $section_id = $_POST['section'];
          $stream = $_POST['stream'];
          $birthdate = $_POST['birthdate'];
       
        $admin=new Admin();
       $admin->addStudent( $firstname , $lastname, $email, $password,$phone,$username,$address,$sex,$year,$stream,$birthdate,$section_id,$grade_id);
    }
    if (isset($_POST['editstud'])) {
              
       $id=$_POST['Id'];
      
        $admin=new Admin();
        $admin->EditStudent($id);
    }
    if (isset($_POST['addteacher'])) {
              
       
         $admin=new Admin();
         $admin->AddTeacher();
     }
     if(isset($_POST['editteacher'])) {
        $id=$_POST['Id'];
        $admin=new Admin();
        $admin->EditTeacher($id);
    }
     if(isset($_POST['addsection'])) {

     $admin=new Admin();
     $admin->AddSection();

     }

     if (isset($_POST['editgrade'])) {
        $id=$_POST['Id'];
        $admin=new Admin();
        $admin->EditGrade($id);
     }

     if(isset($_POST['addsubject'])) {
        $admin=new Admin();
        $admin->AddSubject();


     }
     if(isset($_POST['editsubject'])) {
        $id=$_POST['Id'];
        $admin=new Admin();
        $admin->EditSubject($id);
     }
     if(isset($_POST['addyear'])) {
        $admin=new Admin();
        $admin->AddSchoolYear();
     }
     if (isset($_POST['editschoolyear'])) {
        $id=$_POST['Id'];
        $admin=new Admin();
        $admin->EditSchool_year($id);
     }
     if(isset($_POST['upload'])) {
        $admin=new Admin();
        $admin->AddCourseMaterial();
     }

// Create an instance of the Admin class


// Check if the form is submitted and call the addStudent() method

?>


