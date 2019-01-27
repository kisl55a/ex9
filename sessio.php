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
    <h1>Profile</h1>
<?php
session_start();
echo'Firstname '.$_SESSION['firstname'].'<br>';
echo'Lastname '.$_SESSION['lastname'].'<br>';

?>

</body>
</html>