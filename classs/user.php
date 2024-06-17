<?php
class User {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $userRole;
    protected $email;
    protected $phone;
    protected $username;
    protected $password;
    protected $address;
    protected $sex;
    protected $academicYear;

    public function __construct($id, $firstName, $lastName, $email, $phone, $username, $password, $address, $sex,$userRole,$academicYear) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->address = $address;
        $this->sex = $sex;
        $this->academicYear= $academicYear;
        $this->userRole=$userRole;
    }
}