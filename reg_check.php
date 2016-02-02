<?php

include_once("config.php");
//Preprečitev sql Injection
$name      = $con->real_escape_string($_POST["name"]);
$email     = $con->real_escape_string($_POST["email"]);
$password  = $con->real_escape_string($_POST["password"]);
$password2 = $con->real_escape_string($_POST["confirm"]);

if (!empty($name) && !empty($email) && !empty($password) && !empty($password2)) {
    
    if ($password == $password2) {
        
        $password = md5($password);
        
        $q       = $con->query("SELECT * FROM users WHERE email='$email'");
        $numrows = $q->num_rows; //ce je uporabnisko ime v uporabi
        if ($numrows == 0) {
            
            
            $q = $con->query("INSERT INTO users (name,email, password) VALUES ('$name','$email', '$password')");
            header("location: login.php?successfull=true");
            
            
            
        } else {
            header("location: registration.php?error=taken");
        }
    } else {
        
        header("location: registration.php?error=pass");
        
    }
} else {
    
    header("location: registration.php?error=empty");
    
    
}

?>