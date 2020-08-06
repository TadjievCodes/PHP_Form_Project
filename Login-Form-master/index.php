<?php

 include_once 'header.php'; 
 include_once 'dbConnection.php';
 
 ?> 
        <section class="main-container">
            <div class="main-wrapper">
                <h2>Home</h2>
                <?php
                    if(isset($_SESSION['u_id'])){
                        echo '<p>You are logged in!</p>';
                    }
                    else{
                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        
                        if(strpos($fullUrl,"login=error") == true){
                            echo '<p>Can NOT log in: username or password do not match</p>';
                        }
                        elseif(strpos($fullUrl,"login=empty") == true){
                            echo '<p>You did not fill in all the fields </p>';
                        }
                        elseif(strpos($fullUrl,"login=donotexist") == true){
                            echo '<p>A user does not exist</p>';
                        }
                        else{
                            echo '<p>Hi! This is simple login page. You can Sign up and then Log in</p>';
                        }
                    }
                ?>
            </div>
        </section>
               
        <?php
         include_once 'footer.php';
        ?> 
   
