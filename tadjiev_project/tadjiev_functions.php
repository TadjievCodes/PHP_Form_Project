<?php 
// Database connecting variables created and given as arguments in new mysqli function or method

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

// First I was only displayign the POST array values through var_dump and then decided that it's not necessary


// if (isset($_GET['debug'])) {
//     echo '<pre>';
//     var_dump("submission_counter:", $_SESSION);
//     var_dump("Post array:", $_POST);
//     echo '</pre>';
// }

// First try this then move on to the next line hey otherwise so many bugs are coming out
// Displays the session on the side every time it gets incremented
// checks whether the session exists
if(!isset($_SESSION['submission_counter'])) {
    $_SESSION['submission_counter'] = 0;
} else {
    $_SESSION['submission_counter'];
}





function insert_data () {
    
 // Had some errors to connect the variables outside of the function scope, so just created the same thing again 
 // Tried to connect with GLOBALS[''] or adding a global keyword beside the variable but still didn't really work
 
$dbServer = 'localhost';
$dbUser = "phpuser";
$dbPassword = "phpuser";
$dbName = "tadjiev_project";


$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

    // if ($connecting->connect_error) {
    //     die("Connection failed: " . $connecting->connect_error);
    //   }
    // echo "Connected successfully";    


 // Inserts our data to our database as required with the following code

    $sql="INSERT INTO movies (nameMovie, genre, rating) VALUES ('$_POST[name]', '$_POST[genreEntry]', '$_POST[rate]')";
    if ($connecting->query($sql) === TRUE) {

        echo "<div class='alert alert-success' role='alert'> A new row has successfully been added! Congratulations Dear User! </div>" ."<br>";
      } else {
        echo "Error was detected: " . $sql . "<br>" . $connecting->error;
    }
    $connecting->close();
}






// Getting the data from our phpMyAdmin database and displaying accordingly as required

function select_data () {
    
$dbServer = 'localhost';
$dbUser = "phpuser";
$dbPassword = "phpuser";
$dbName = "tadjiev_project";

$connecting = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);



    $sql = "SELECT * FROM movies";
    $result = $connecting->query($sql);
    
    if ($result->num_rows > 0) {
           // output data of each row in the table of Bootstrap
          
           echo '<table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Movie Name</th>
            <th scope="col">Genre</th>
            <th scope="col">Rating</th>
          </tr>
        </thead> 
        ';


      while($row = $result->fetch_assoc()) {

        // First idea was just a normal simple display but then added a Bootstrap table with table-dark theme color
        // echo "id: " . $row["id"]. " - Name: " . $row["nameMovie"]. " " . $row["genre"]. " " . $row["rating"]. "<br>";

        echo '  <tr>
        <th scope="row">'. $row["id"].'</th>

        <td>'. $row["nameMovie"].'</td>
        <td>'. $row["genre"].'</td>
        <td>'. $row["rating"]. '</td>
      </tr>';
    
      echo '</tbody>';
    }
    
      
    } else {

      echo "0 results";
    }
    $connecting->close();

} // end of the function






// THe function to sanitize with htmlentities specially
function sanitize_html () {
    foreach($_POST as $key => $element) {
        $_POST[$key] = htmlentities($element);
    } 
}




// session related

function increment_session_counter() {
    $_SESSION['submission_counter'] = $_SESSION['submission_counter'] + 1;

} // closing bracket of the function increment_session_counter()





?>