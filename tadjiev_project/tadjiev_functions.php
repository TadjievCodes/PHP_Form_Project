<?php 
// db connecting
$dbservername = 'localhost';
$dbUsername = "root";
$dbPass = "root";
$dbName = "adil_project";

$conn = new mysqli($dbservername, $dbUsername,$dbPass,$dbName);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";

// end db connecting


// if (isset($_GET['debug'])) {
//     echo '<pre>';
//     var_dump("Session array:", $_SESSION);
//     var_dump("Post array:", $_POST);
//     echo '</pre>';
// }
// First try this then move on to the next line

if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
} else {
    $_SESSION['counter'];
}

function insert_data () {
    $dbservername = 'localhost';
    $dbUsername = "root";
    $dbPass = "root";
    $dbName = "tadjiev_project";
    $conn = new mysqli($dbservername, $dbUsername,$dbPass,$dbName);
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    //   }
    // echo "Connected successfully";    
    $sql="INSERT INTO games (name, rating) VALUES ('$_POST[name]', '$_POST[rate]')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success' role='alert'> A new row was successfully added </div>" ."<br>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

function select_data () {
    $dbservername = 'localhost';
    $dbUsername = "root";
    $dbPass = "root";
    $dbName = "adil_project";
    $conn = new mysqli($dbservername, $dbUsername,$dbPass,$dbName);
    $sql = "SELECT * FROM games";
    $result = $conn->query($sql);
    
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
    $conn->close();
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