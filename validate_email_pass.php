<?php
function validate_email_pass($email,$pass){
    $email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    
    $password_pattern= '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s])\S{8,}$/';
    
    
    $valid_email = preg_match($email_pattern, $email);
    $valid_pass = preg_match($password_pattern, $pass);

    if($valid_email ){
        if($valid_pass){
            echo "valid email and pass";
        }else{
            echo $valid_pass . " is not a valid pass";
        }
    }else{
        if($valid_pass){
            echo $email . " not a valid email";
        }else{
            echo "both email and pass are invalid";
        }
    }
}
validate_email_pass("ahmad@gmail.com","Password@123");

 ?>