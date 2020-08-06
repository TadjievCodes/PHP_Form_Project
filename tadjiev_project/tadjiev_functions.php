<?php 
// db connecting
$dbServer = 'localhost';
$dbUser = "phpuser";
$dbPassword = "phpuser";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

// The if statement in order to uncomment and double check whether the connection to Database is working
/*
if ($connecting->connect_error) {
    die("Connection failed: " . $connecting->connect_error);
  }
  echo "Connected successfully";
*/


// if (isset($_GET['debug'])) {
//     echo '<pre>';
//     var_dump("Session array:", $_SESSION);
//     var_dump("Post array:", $_POST);
//     echo '</pre>';
// }

// First try this then move on to the next line hey boysssssssss

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
} else {
    $_SESSION['counter'];
}

function insert_data () {
    
$dbServer = 'localhost';
$dbUser = "phpuser";
$dbPassword = "phpuser";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

    // if ($connecting->connect_error) {
    //     die("Connection failed: " . $connecting->connect_error);
    //   }
    // echo "Connected successfully";    




    $sql="INSERT INTO movies (nameMovie, genre, rating) VALUES ('$_POST[name]', '$_POST[genreEntry]', '$_POST[rate]')";
    if ($connecting->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'> A new row was successfully added </div>" ."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connecting->error;
    }
    $connecting->close();
}

function select_data () {
    
$dbServer = 'localhost';
$dbUser = "phpuser";
$dbPassword = "phpuser";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);



    $sql = "SELECT * FROM movies";
    $result = $connecting->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row

      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nameMovie"]. " " . $row["genre"]. " " . $row["rating"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $connecting->close();
}

// done
function sanitize_html () {
    foreach($_POST as $key => $element) {
        $_POST[$key] = htmlentities($element);
    } 
}

// TODO
function increment_session_counter() {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    // var_dump($_SESSION['counter'] . " fucn");    
}

?>