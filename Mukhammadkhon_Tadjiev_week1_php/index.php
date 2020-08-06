This is the Start of PHP, Welcome to PHP

<?php

echo "hello World";

$a = 2;
$b = 2;

echo $sum = $a + $b;


$fname = 'Jane';
$lname = 'Doe';


echo ' Your first name is $fname. Your last name is $lname '
?>

</*?php
    $a = 5;
    $b = 6;
    var_dump($a !== $b); //  output 1
    var_dump($a < $b);    //   output 2
    var_dump($a > $b);    //   output 3
    var_dump($a == $b);  //   output 4
? */>

</*?php

     $a = 20;

     var_dump($a > 0 xor $a < 100 ); // Choice 1
     var_dump($a > 0 && $a < 100 ); // Choice 2
     var_dump($a > 0   ||  $a > 100 );  // Choice 3
     var_dump($a = 20);                      // Choice 4
? */>


</*?php

$a = 5;
echo $a++; // Choice 1:
var_dump($a == 6 ); // Choice 2:
$a +=5;
echo $a; // Choice 3:
echo ($a >= 11 || $a == 6) ? 'right' : 'wrong' ; // Choice 4:

?*/>




<?php

$a = 6;
$b = 13;
$c = 342;
$d = 0;

$a += $c; 348
$b *= $b; 169
$c = $b - $a; 179

$d = ($b > $c xor $d >= $a) ? 1 : 0;

?>
