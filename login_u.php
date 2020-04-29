<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['email'])) {
$error = "Email is invalid";
}
else
{

$email=$_POST['email'];

require 'connection.php';
$conn = Connect();

$query = "SELECT email FROM CustomerAccount WHERE email=? LIMIT 1";

if ($query)
{
	$_SESSION['login_user2']=$email; // Initializing Session
	header("location: menu.php");
} else {
$error = "Email is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>