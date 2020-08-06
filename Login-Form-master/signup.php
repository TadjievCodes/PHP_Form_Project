<?php

 include_once 'header.php'; 
 
 ?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign up</h2>
            
            <form class="signup-form" action="signup-php.php" method="POST">
                <?php
                // If singup for caught error msg, delete mistaken fields, but leave the values of others
                    if(isset($_GET['firstname'])){
                        $firstname = $_GET['firstname'];
                        echo '<input type="text" name="firstname" placeholder="Firstname" value="'.$firstname.'">';
                    }
                    else{
                        echo '<input type="text" name="firstname" placeholder="Firstname">';
                    }
                    
                    if(isset($_GET['lastname'])){
                        $lastname = $_GET['lastname'];
                         echo '<input type="text" name="firstname" placeholder="Firstname" value="'.$lastname.'">';
                    }
                    else{
                        echo '<input type="text" name="lastname" placeholder="Lastname">';
                    }
                    
                    if(isset($_GET['email'])){
                        $email = $_GET['email'];
                        echo '<input type="text" name="email" placeholder="E-mail" value="'.$email.'">';
                    }
                    else{
                        echo '<input type="text" name="email" placeholder="E-mail">';
                    }
                    
                    if(isset($_GET['uid'])){
                        $uid = $_GET['uid'];
                        echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
                    }
                    else{
                        echo '<input type="text" name="uid" placeholder="Username">';
                    }
                    
                ?>
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">Sign up</button>
                <?php
                /* Error-handling: 
                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        
                     if(strpos($fullUrl,"signup=success") == true){
                            echo '<p class="success">You are signed up successfully!</p><p>You can log in now</p>';
                        }
                     else{
                        if(strpos($fullUrl,"signup=empty") == true){
                            echo '<p class="error">You did not fill in all the fields </p>';
                        }
                        elseif(strpos($fullUrl,"signup=userexists") == true){
                            echo '<p class="error">The username is already taken</p>';
                        }
                        elseif(strpos($fullUrl,"signup=invalidemail") == true){
                            echo '<p class="error">Email is invalid</p>';
                        }
                        elseif(strpos($fullUrl,"signup=invalidchar") == true){
                            echo '<p class="error">Invalid characters in the name or lastname</p>';
                        }
                     }
                   */
                // Another way of error-handling:
                if(!isset($_GET['signup'])){
                    exit();
                }
                else{
                    $signupCheck = $_GET['signup'];
                    
                    if($signupCheck == "empty"){
                        echo '<p class="error">You did not fill in all the fields </p>';
                        exit();
                    }
                    elseif($signupCheck == "invalidchar"){
                        echo '<p class="error">Invalid characters in the name or lastname</p>';
                         exit();
                    }
                    elseif($signupCheck == "invalidemail"){
                       echo '<p class="error">Email is invalid</p>';
                        exit();
                    }
                    elseif($signupCheck == "userexists"){
                        echo '<p class="error">The username is already taken</p>';
                        exit();
                    }
                    elseif($signupCheck == "success"){
                        echo '<p class="success">You are signed up successfully!</p><p>You can log in now</p>';
                        exit();
                    }
                    
                    
                }
                       
                        
                        
                ?>
            </form>
        </div>
    </section>

<?php
    include_once 'footer.php'; 
?>
