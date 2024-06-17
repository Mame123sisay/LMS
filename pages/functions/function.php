<?php
class functions{
    public function ViewGrades(){
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




}
