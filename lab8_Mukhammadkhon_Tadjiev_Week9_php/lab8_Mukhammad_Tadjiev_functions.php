
<?php



$referenceTowardsArray = $_POST['vehicle'];


function sanitizeArray(&$referenceTowardsArray) {




    foreach ($_POST['vehicle'] as $key => $element) {
        // clean the element with htmlentities here
        
           $vehicle[$key] = htmlentities($element);


      }





}



/*
function mysqli_connect() {

}
*/

/*

// loop through the cleaned output
foreach ($cleaned as $key : values => $element) {
    // code...
      echo " $element <br> ";


  }

*/




?>