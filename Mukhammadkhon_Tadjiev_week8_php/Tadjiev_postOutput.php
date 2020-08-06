<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world with Week8 Tadjiev!</title>
  </head>
  <body>
    <!-- Added testing variables for the POST Arrays as per the LAB instructions and pre tags for preformatted text -->
    <?php
    // Commented out the var_dumnp but possible to check if it's actually like working
    //var_dump($_POST);


    // Do 3 string Functions



    //$cleaned = $_POST;
    // Main looping is happening here
    // clean the array with html entities
    foreach ($_POST as $key => $element) {
      // clean the element with htmlentities
         $cleaned[$key] = htmlentities($element);


    }



    ?>



    <h2>Output File:</h2>
    <br>
       <h1>Fun with string and Array Functions</h1>
      <h1>String Functions are so Fun</h1>



    <pre>
    <h3>Before Strings:</h3>
    <?php
    // loop through the cleaned output
    foreach ($cleaned as $key => $element) {
      // code...
        echo " $key : $element <br> ";


    }



    // Do 3 Array Functions

     ?>

    <h3>After Strings:</h3>

    <?php

    echo 'After with strlen() :' . strlen($cleaned['fname']);
     echo '<br>';
      echo 'After with strrev() :' . strrev($cleaned['fname']);

    echo '<br>After with md5() :' . md5($cleaned['lname']);

    echo '<br>After with str_shuffle() :' . str_shuffle($cleaned['lname']);

    // Do 3 Array Functions
    echo '<p> </p>';
    // This line prints the data and vertically as we set the <pre> tag ooutside as html element
    print_r($cleaned);


     ?>

<h2>Array Functions are amazing too! Ours are going to get mashed up here!</h2>
// First type
     <div class="container">
       <div class="row">
         <div class="col-sm">
         Before array:
        <?php
           print_r($cleaned);
         ?>


         </div>

         <div class="col-sm">
           After array function asort():
           <?php
              asort($cleaned); // this is kinda sorted now with in built funtion asort
              print_r($cleaned); // this is going to show the output now which we gave to the variable $new
            ?>
         </div>

       </div>
     </div>

     // Second type
      // array_flip() returns an array in flip order, i.e. keys from array become values and values from array become keys.
          <div class="container">
            <div class="row">
              <div class="col-sm">
              Before array:
             <?php
                print_r($cleaned);
              ?>


              </div>

              <div class="col-sm">
                After with array_flip():
                <?php
                  $flipped = array_flip($cleaned); // this is kinda sorted now with in built funtion asort
                   print_r($flipped); // this is going to show the output now which we gave to the variable $new
                 ?>
              </div>

            </div>
          </div>



          // Third type
           // Merges the elements of one or more arrays together so that the values of one are appended to the end of the previous one. It returns the resulting array.
               <div class="container">
                 <div class="row">
                   <div class="col-sm">
                   Before array:
                  <?php
                     print_r($cleaned);
                   ?>


                   </div>

                   <div class="col-sm">
                     After with array_merge():
                     <?php
                      // so we merge it here and also do the flip on it at the same time
                       print_r(array_merge($cleaned,array_flip($cleaned)));

                      ?>
                   </div>

                 </div>
               </div>










</pre>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
