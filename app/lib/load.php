<?php
include_once "includes/Mic.class.php";
include_once "includes/Database.class.php";
function load_template($name)
    
{
    include $_SERVER['DOCUMENT_ROOT']."/app/__templates/$name.php";
}
function validate_credentials($username,$password){
    if($username == "ksanjay02444@gmail.com" and $password == "Sanjayfreaklk12@"){
        return true;
    }
    else{
        return false;
    }
}