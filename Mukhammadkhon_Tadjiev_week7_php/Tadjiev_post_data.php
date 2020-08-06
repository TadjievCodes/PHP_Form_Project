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


/*

  $x = 5;
	switch ($x) { 	 	// less than zero
		case 0 :
			echo ’Your value is less than zero’;
			break;
		case 10: 		// between 0 and 100
			echo ’Your value is between 0 and 100’;
			break;
*/
 //Access the values from the form
 $customerName = $_POST['question_One'];
 //$customerGender = $_POST['gender'];
 $customerCar = $_POST['cars'];
  

/*
      if ($customerGender == 'Male') {
        echo `Hello your gender is: ${customerGender} and you're a boy`;
    }
    else if ($customerGender == 'Female') {
      echo `Hello your gender is: ${customerGender} and you're a girl`;
    }
    else if ($customerGender == 'Other') {
      echo `Hello your gender is: ${customerGender} and you're an Other type of person`;
    }
*/




 // echo htmlentities($string, ENT_QUOTES, 'UTF-8');
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

 
<p>You submitted a post value with your Full name: </p><?php echo $_POST['question_One']; ?>


<p>You submitted a post value with your gender: </p>
<?php echo $customerGender = $_POST['gender'];      //$_POST['gender']; 
 
 if ($customerGender == 'Male') {
  echo `Hello your gender is: ${customerGender} and you're a boy`;
  exit();
}
else if ($customerGender == 'Female') {
echo `Hello your gender is: ${customerGender} and you are a girl`;
exit();
}
else if ($customerGender == 'Other') {
echo `Hello your gender is: ${customerGender} and you are an Other type of person`;
exit();
}


?>



<p>You submitted a post value with favorite car: </p><?php echo $_POST['cars']; ?>
  