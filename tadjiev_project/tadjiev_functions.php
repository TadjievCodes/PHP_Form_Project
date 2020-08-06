<?php 
// db connecting
$dbServer = 'localhost';
$dbUser = "root";
$dbPassword = "root";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

// if ($connecting->connect_error) {
//     die("Connection failed: " . $connecting->connect_error);
//   }
//   echo "Connected successfully";

// end db connectingasdfgh


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
$dbUser = "root";
$dbPassword = "root";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

    // if ($connecting->connect_error) {
    //     die("Connection failed: " . $connecting->connect_error);
    //   }
    // echo "Connected successfully";    
    $sql="INSERT INTO games (name, rating) VALUES ('$_POST[name]', '$_POST[rate]')";
    if ($connecting->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'> A new row was successfully added </div>" ."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $connecting->error;
    }
    $connecting->close();
}

function select_data () {
    $dbservername = 'localhost';
    $dbUsername = "root";
    $dbPass = "root";
    $dbName = "adil_project";
    $connecting = new mysqli($dbservername, $dbUsername,$dbPass,$dbName);
    $sql = "SELECT * FROM games";
    $result = $connecting->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Game Name</th>
            <th scope="col">Rate</th>
          </tr>
        </thead>
        <tbody>';
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo '  <tr>
          <th scope="row">'. $row["id"].'</th>
          <td>'. $row["name"].'</td>;
          <td>'. $row["rating"]. '</td>
        </tr>';
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["rating"]. "<br>";
      }
      echo '</tbody>';
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