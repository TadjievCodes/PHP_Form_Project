<?php 
session_start();
include_once "tadjiev_functions.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tadjiev's Form Output</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">



    <!-- Calling the PHP functions here as required one by one -->


        <?php 
        if(!empty($_POST)) {
            sanitize_html();
            insert_data();
            increment_session_counter();
        } 
        select_data();

              
          // to dispaly the output of how many sessions we had already 1 , 2 or 3
         var_dump($_SESSION['submission_counter']);
         // To dsiplay var_dump results, it can be uncommented
         
         
/*
 echo '<pre>'; 
 var_dump("Post array:", $_POST);

echo  '</pre>';
*/

        ?>
    </div>
   
   <br>
   <br>

 <!-- Special in built PHP method  htmlspecialchars($_SERVER['HTTP_REFERER']); in order to go back to the previous page where is the form-->
 <!-- use the HTTP_REFERER, sanitize it, and echo it out via PHP below--> 
   <?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url' style='color:white;'>Back to the Form</a>"; 
?>



</body>




<!-- bootstrap dependecies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap dependecies -->
</html>