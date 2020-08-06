

<pre> 

<?php

// preformatting the text again with the pre tag




/*
define('ROOT', dirname(__FILE__) );
echo ROOT

include 'output.php';
*/





var_dump($_POST ['vehicle']);


echo '<br>';

echo '<h2>The User owns:</h2>';

echo '<br>';


// including our function file here

include 'lab8_Mukhammad_Tadjiev_functions.php';

// sanitizing our array here which is the POST and vehicle as well as both of them are arrays

$cleaned = $_POST['vehicle'];
sanitizeArray($cleaned);
foreach ($_POST['vehicle'] as $key => $element) {
 echo $element;
 // creating a space new line between the items if more than one selected
 echo '<br>';



} //closing bracket

//again creating a br a new line break as on the lab's image displayed
 echo '<br>';



// Last task to check if the function exists

if (function_exists('mysqli_connect')) {
    echo "mysqli_connect functions are available.<br />\n";
} else {
    echo "mysqli_connect functions are not available.<br />\n";
}





// And then we create $var_dump($POST[vehicle]);

// So that it displays all the values of the vehicle array through the Post method array

?>

</pre>