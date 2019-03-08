<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'formData';
$con = mysqli_connect($servername,$username,$password,$db);
mysqli_select_db($con, $db);
$email = mysqli_real_escape_string($con,$_POST['email']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$subject = mysqli_real_escape_string($con,$_POST['subject']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$query = mysqli_real_escape_string($con,$_POST['query']);
$sql = "INSERT INTO formDataTable (email, name, subject, message, query)
VALUES ('$email', '$name', '$subject', '$message', '$query')";
if (!mysqli_query($con, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title>Success !</title>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
 	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/submit.css">
  <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet">
  </head>
  <body>
    <h1>Thanks for contacting us ! </h1>
    <p>We'll reach back soon </p>
  </body>
