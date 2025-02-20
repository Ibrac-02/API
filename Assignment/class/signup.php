<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty($password)){
        return true;
    }
    else {
        return false;
    }
    
}else{
    header("Location:../index.php");
    die();
}