<?php
   /* THiS Piece of code goes into index file
    * 
     $data = "2";
        $sql = "SELECT * FROM users WHERE id=?;";
        
        //Prepared statement
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement failed";
        }
        else{
            //Bind parameters to the placeholders
            mysqli_stmt_bind_param($stmt,"s", $data);
            //Run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            while($row = mysqli_fetch_assoc($result)){
            echo $row['lastname']."<br>";
            }
            
        }
        
    */
    include_once 'dbConnection.php';
    
    $name = mysqli_real_escape_string($conn,$_POST['name'] );
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    
    
    $sql = "INSERT INTO users(firstname,lastname,email,uid,pwd)
                VALUES(?,?,?,?,?);";
         
    //Create prepared statement instead of mysqli_query($conn, $sql);
    $stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL error";
    }
    else{
        mysqli_stmt_bind_param($stmt, "sssss", $name,$lastname,$email,$uid,$pwd);
        mysqli_stmt_execute($stmt);
    }
   
    
    header("Location: ../index.php?signup=success");
