<?php
session_start();

$email = $_POST["email"];
$password =($_POST["password"]);

$con = mysqli_connect("localhost", "root", "", "stadium");

$sql = "SELECT * FROM admin WHERE email =$email AND password =$password";

    
$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'admin23@gmail.com' && $password === 'admin23@gmail.com') {
  // Successful login
  $_SESSION['email'] = $email;
  header('Location: admin.php');
} else {
  // Invalid login
  header('Location: stadium.php?error=1');
}
?>

