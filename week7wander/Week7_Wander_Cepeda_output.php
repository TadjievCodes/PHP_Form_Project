
  <pre>
    <?php
      var_dump($_POST);
    ?>
  </pre>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Wander Cepeda - Lab7</title>
    <style>
      body {
        background: #333333;
        font: 16px arial, sans-serif;
        color: white;
      }
      .wrap {
        width: 80%;
        border: 2px solid cyan;
        margin: 100px auto;
        max-width: 900px;
        min-width: 600px;
      }
      h1 {
          color: cyan;
          text-align: center;
          margin: 20px auto;
      }
      label {
          color: cyan;
          margin-left: 5px; 
      }
    </style>    
  <body>
      <!-- Heading -->
      <h1>Thank you for your Form Submission</h1>
      <?php
        //Access the values from the form
        $custFullName = $_POST['full_name'];
        $custAddress = $_POST['cAddress'];
        $custItems = $_POST['itemOpts'];

        if ($cItems == Speaker) {
            echo "Hello ${fullName}, <br> Your information has been successfully updated and your ${custItems} will be shipped to ${custAddress}";
        }
        else if ($cItems == Sunglasses) {
            echo "Hello ${fullName}, <br> Your information has been successfully updated and your ${custItems} will be shipped to ${custAddress}";
        }
        else if ($cItems == Headphones) {
            echo "Hello ${fullName}, <br> Your information has been successfully updated and your ${custItems} will be shipped to ${custAddress}";
        }
      ?>
    <p><strong>Thank you!</strong></p>
    <!-- Script goes here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
