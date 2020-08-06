<!-- Added testing variables for the POST Arrays as per the LAB instructions and pre tags for preformatted text -->
<?php
/*
<pre>
$var_dump = ($_POST);
 echo '<hr>';

 $var_dump = ($_POST);
  echo '<hr>';

  $var_dump = ($_POST);
   echo '<hr>';
   </pre>
   */
 ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Custom Output Page!</h1>

    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">This is a simple Form Practice with PHP, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
    </div>
 <hr>
 <!-- Added p texts with values of the POST that wass received from the FORM input -->
<p>You submitted a post value with favorite movie</p><?php echo $_POST['question_One']; ?>
<p>You submitted a post value with favorite football club</p><?php echo $_POST['question_Two']; ?>
<p>You submitted a post value with favorite country to travel</p><?php echo $_POST['question_Three']; ?>
