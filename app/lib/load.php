<?php
include_once "includes/Mic.class.php";
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
function signup($user,$pass,$email,$phone){
   
$servername = "mysql.selfmade.ninja:3306";
$username = "Sanjay";
$password = "Sanjay12@";
$dbname = "Sanjay_New";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `Active`)
VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
$error = false;
if ($conn->query($sql) === true) {
    $error = false;
} else {
    $error = $conn->error;
}
$conn->close();
return $error;

}