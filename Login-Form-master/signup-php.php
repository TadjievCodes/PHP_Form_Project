<?php

if(!isset($_POST['submit'])){
    header("Location: signup.php");
    exit();
}
else{
    include_once 'dbConnection.php';
    
    $firstname = mysqli_real_escape_string($conn,$_POST['firstname'] );
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname'] );
    $email = mysqli_real_escape_string($conn,$_POST['email'] );
    $uid = mysqli_real_escape_string($conn,$_POST['uid'] );
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd'] );
    
    //Error handlers
    //Check for empty fields
    
    if(empty($firstname) || empty($lastname) || empty($email)|| empty($uid)|| empty($pwd)){
         header("Location: /signup.php?signup=empty");
         exit();
    }
    else{
        //Check if input charachters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $firstname) ||!preg_match("/^[a-zA-Z]*$/", $lastname) ){
             header("Location: /signup.php?signup=invalidchar&email=$email&uid=$uid");
             exit();
        }
        else{
            //Check if email is valid 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: /signup.php?signup=invalidemail&firstname=$firstname&lastname=$lastname&uid=$uid");
                exit();
            }
            else{
                //Check if a user already exists
                $sql = "SELECT * FROM users WHERE uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if($resultCheck > 0){
                    header("Location: /signup.php?signup=userexists&firstname=$firstname&lastname=$lastname&email=$email");
                    exit();
                }
                else{
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    
                    //Insert the user into database
                    $sql ="INSERT INTO users (firstname,lastname,email,uid,pwd) VALUES ('$firstname',
                    '$lastname', '$email', '$uid', '$hashedPwd');";
                    
                    mysqli_query($conn, $sql);
                    header("Location: /signup.php?signup=success");
                    exit();
                }
            }
        }
    }
}
