<?php

class Register extends Database{
    private $fname;
    private $lname;
    private $email;
    private $user_type;
    private $username;
    private $password;

    public function __construct($fname, $lname, $email, $user_type ,$username, $password){
        $this -> fname = $fname;
        $this -> lname = $lname;
        $this -> email = $email;
        $this -> username = $username;
        $this -> user_type = $user_type;
        $this -> password = $password;
    }
    public function setuser(){
        if($this->checkuser($this->email, $this->username) == false){
            echo "<p style='background-color: red; color:white; border-radius:10px; padding:10px; margin-top: 20px; border-radius: 10px;'>
        User already exit</p>";   
            
            exit();
        }
        $this->signuser($this -> fname,$this -> lname,$this -> email,$this->user_type,$this -> username,$this -> password);
        

    }

    private function checkuser($email, $username){
        $stmt = $this->connect()->prepare("SELECT * FROM user_info WHERE username = ? OR email = ?");

        $stmt->execute(array($username, $email));

        if($stmt -> rowCount() > 0){
            return false;
        }
        else{
            return true; 
        }
    }
    private function signuser($fname, $lname, $email, $user_type,$username, $password){
        $stmt = $this->connect()->prepare("INSERT INTO user_info (firstname, lastname, username, email, user_password)
        VALUES(?,?,?,?,?)");
        
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);

        $stmt->execute(array($fname, $lname, $username,$email, $hashedpass));

         $stmt = $this->connect()->prepare("SELECT * FROM roles WHERe role_name = ?");
         $stmt -> execute(array($user_type));
         $role = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $stmt = $this->connect()->prepare("SELECT * FROM user_info WHERE username = ? OR email = ? ORDER BY user_id DESC LIMIT 1");

        $stmt->execute(array($username, $email));
        $users = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $stmt = $this->connect()->prepare("INSERT INTO user_roles (user_id, role_id) VALUES(?,?)");

        $stmt->execute(array($users[0]['user_id'], $role[0]['role_id']));
        echo "<p style='background-color: green; color:white; border-radius:10px; padding:10px; margin-top: 20px; border-radius: 10px;'>
        Successfuly register as ". $user_type."</p>";   


    }

}