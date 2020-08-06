<?php

session_start();

if(!isset($_POST['submit'])){
    header("Location: /index.php?login=error");
    exit();
}
else{
    include_once 'dbConnection.php';
    
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);    
    
    //Error handlers
    // Check if inputs are empty
    
    if(empty($uid) || empty($pwd)){
        header("Location: /index.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE uid='$uid' OR email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: /index.php?login=donotexist");
            exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result)){
               //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['pwd']);
                
                if($hashedPwdCheck == FALSE){
                    header("Location: /index.php?login=error");
                    exit();
                }
                elseif (hashedPwdCheck == TRUE) {
                    //Log in the user here
                    $_SESSION['u_id'] = $row['uid'];
                    $_SESSION['u_firsname'] = $row['firstname'];
                    $_SESSION['u_lastname'] = $row['lastname'];
                    $_SESSION['u_email'] = $row['email'];
                    $_SESSION['u_uid'] = $row['uid'];
                    
                    header("Location: /index.php?login=success");
                    exit();
                    
                }
            }
        }
    }
}