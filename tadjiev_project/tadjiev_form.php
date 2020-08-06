<?php 

session_start();
include_once 'tadjiev_functions.php';
var_dump($_SESSION['counter']);

// session_unset();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tadjiev Project PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

</head>
<body>

    
    <div class="container">
        <?php 
        if($_SESSION['counter'] >= 3) {
            echo '<div class="alert alert-danger" role="alert">Maximum 3 games you can rate!</div>';
        } else {
            echo '<form action="tadjiev_output.php" method="post">
            <h1>Rate your favorite (or not) movie from 1 to 5</h1>
            <div class="input-group">
                <input type="text" name="name" class="form-control col-6" placeholder="Movies name">
                <div class="input-group-prepend">
                    <select name="rate" id="rate" class="input-group-text">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit Movie</button>
        </form>';
        }
        ?> 
        <!-- <div class="alert alert-danger" role="alert">
            Maximum 3 games you can rate!
        </div> -->             
        <a class="btn btn-success" href="tadjiev_output.php" role="button">View all records</a>
        <!-- <form action="adil_output.php" method="post">
            <h1>Rate your favorite (or not) game from 1 to 5</h1>
            <div class="input-group">
                <input type="text" name="name" class="form-control col-6" placeholder="Game name" aria-label="Game name" aria-describedby="addon-wrapping">
                <div class="input-group-prepend">
                    <select name="rate" id="rate" class="input-group-text">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form> -->
        <?php 
        if(isset($_POST['submit']))
        {
            insert_data();
        } 
        ?>
    </div>
</body>
<!-- bootstrap dependecies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
<!-- bootstrap dependecies -->
</html>