
<h1>Refer to <a href="https://www.w3schools.com/php/php_operators.asp" target="_blank">w3schools for PHP reference</a> and interactive help</h1>
<h2>String operators</h2>
<?php
  //Testing operators
  echo $string = 'Have a ' . ' nice day';

  //String concatenator and append string
  echo $string .= ', today<br>';

  //assign a value 5 to variable a and 10 to variable b
  $a = 5;
  $b = 10;
?>
<h2>Arithmetic operators</h2>
<?php echo $a + $b ?>
<br>
<?php echo  $a - $b ?>
<br>
<?php echo  $a * $b ?>
<br>
<?php echo  $a / $b ?>
<br>
<?php echo  $a % $b ?>
<br>
<?php echo  $a ** $b ?>

<h2>Pre-Increment/Decrement operators</h2>
Pre-Increment a
<?php echo ++$a ?>
 Output value of a:
<?php echo $a ?>
<br>
Pre-Decrement b:
<?php echo --$b ?>
<br>Output value of b:
<?php echo $b ?>

<h2>Post-Increment/Decrement operators</h2>
Post-Increment a:
<?php echo $a++  ?>
<br>Output value of a:
<?php echo $a ?>
<br>
Post-Decrement b:
<?php echo $b-- ?>
<br>Output value of b:
<?php echo  $b ?>

<h2>Comparison operators</h2>
<h3 style="border:2px solid red">the value of a: <?php echo $a ?><br> and the value of b: <?php echo $b ?><br>Will not change after this</h3>

a greater than 10:
<?php var_dump($a > 10) ?>
<br>
a less than 10:
<?php var_dump($a < 10) ?>
<br>
a equal to 7:
<?php var_dump($a == "7") ?>
<br>
a identical to 7:
<?php var_dump($a === "7") ?>
<br>
a less or equal to 7:
<?php var_dump($a <= 7) ?>
<br>
a greater or equal to 7:
<?php var_dump($a >= 7) ?>
<br>
spaceship, a is less, equal or greater than 8:
<?php var_dump($a <=> 8) ?>
<br>
spaceship, a is less, equal or greater than 7:
<?php var_dump($a <=> 7) ?>
<br>
spaceship, a is less, equal or greater than 6:
<?php var_dump($a <=> 6) ?>
<br>

<h2>Logical operators</h2>
a is equal to 7 AND b is equal to 8 :
<?php var_dump($a == 7 && $b == 8) ?>
<br>
a is equal to 7 OR b is equal to 9 :
<?php var_dump($a == 7 && $b == 9) ?>
<br>
a is equal to 7 XOR b is equal to 8 :
<?php var_dump($a == 7 xor $b == 8) ?>
<br>
a is ! :
<?php var_dump(!$a) ?>
<br>
0 is ! :
<?php var_dump(!0) ?>
<br>

<h2>Ternary operators</h2>
Is the value of the variable a truly 7 still ? <?php echo($a == 7) ? 'TRUE !, a is 7' : 'FALSE :(, a is not 7' ?> and that is the truth !<br>
Is the value of the variable b greater than 0 AND less than 100 still ? <?php echo($b > 0 && $b < 100) ? 'TRUE' : 'FALSE' ?> and that is the truth !
