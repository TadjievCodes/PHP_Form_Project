<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <header>
            <nav>
                <div class="main-wrapper">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                    </ul>
                    <div class="nav-login">
                        <?php
                            if(isset($_SESSION['u_id'])){
                                echo '<form action="logout.php" method="POST">
                                    <button type="submit" name="submit">Log out</button>     
                                    </form>';
                            }
                            else{
                                echo '
                             <form action="login.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/email">
                                <input type="password" name="pwd" placeholder="pasword">
                                <button type="submit" name="submit">Log in</button>
                            </form>
                            <a href="signup.php">Sign up</a>';
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>

