<?php

$username = "root";
$password = "";
$hostname = "localhost";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbhandle = mysqli_connect($hostname, $username, $password);


$selected = mysqli_select_db($dbhandle, 'site-fac');



  $cin = $_POST['cin'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  

  $result = mysqli_query($dbhandle, "INSERT INTO `user` (cin, username, email, password,role) VALUES ('$cin', '$username', '$email', '$password','$role')");
  

  if ($result) {
    session_start();
    echo "done";
      $_SESSION['loggedin'] = true;
      exit;
  } else {
    $erreur = "Échec lors de l'inscription!";
  }



?>


