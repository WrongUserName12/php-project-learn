<?php

class User{
    public static function signup($user,$pass,$email,$phone){
   
        $conn = Database::getconnection();
        
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
    
}