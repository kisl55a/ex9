<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <h1>Person info</h1>
  Post array: <br>
  <?php 
  print_r($_POST);
  ?>
  <br>
  Firstname is <?php echo($_POST['fname'])  ?> <br>
  Lastname is <?php echo($_POST['lname'])  ?> 
  <?php
  session_start();
  $_SESSION['firstname']=$_POST['fname'];
  $_SESSION['lastname']=$_POST['lname'];
  ?> 
  <a href="sessio.php">Press</a>
</body>
</html>