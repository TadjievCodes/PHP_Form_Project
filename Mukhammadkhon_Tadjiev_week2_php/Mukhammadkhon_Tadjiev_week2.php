<?php

echo 'This is from PHP now<br>';

echo 'This is the first string ' . 'This is the second string' . ' This is my last string<br>';

echo'We are in the month of ' . date("F") ;

/* In the url of your webpage at the end after .php add the following
?my_var=amazing
Click enter to submit the page with the query string. If it works, change the word amazing, to some other word and repeat */
echo 'The value in the query string for  my_var is ' . $_REQUEST['my_var'];
/*If you don't run this line on the source domain area where we access localhost/.php exactly this line "?my_var=amazing"  It would result in an error*/

//Declaring a variable always with $ sign in PHP
$favorite_ice_cream = 'Vanilla';
echo 'My favorite flavour of ice cream is <br>' . $favorite_ice_cream;
//Create a variable, assign one data type then assign a dfferent data type to observe that PHP doesn't care if you change them
$dog_type = '<br> Poodle';
echo 'My Dog is a ' . $dog_type;
$dog_type = 12;
echo 'My Dog is a ' . $dog_type; //This does not make sense.. but PHP does not care

//Define a PHP constant and output it
define("ERROR_MSG","You have encountered an error, click the back button and try again <br>");
echo ERROR_MSG;

//Define a variable in the global space, access that variable inside a local scope
$a = 12;

//Starting a fucntion declaration with the name local
function local() {
$a = 'I like dogs';
echo 'value of $a is ' . $a;
echo 'value of $a in the global space is ' . $GLOBALS['a'];
}

//Calling the function here in this line of code
local();

//I've just added few extra html <br> tags to separate the content into the next line a bit
?>




/*
<?php
$var_dump = ($_POST);
 echo '<hr>';

 $var_dump = ($_POST);
  echo '<hr>';

  $var_dump = ($_POST);
   echo '<hr>';

 ?>
 */
