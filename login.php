<?php
require "db.php" ;
session_start();

$email = $_GET['reg_email'];
$_SESSION['email'] = $email;
$pass = $_GET['reg_pass'];

$sql = 'SELECT * FROM ba286.accounts where email="'.$email.'"';
$results = runQuery($sql);

if (count($results) != 1){
	header('HTTP/1.1 500 Internal Server Error');

	exit("</br>Sign In ERROR: The e-mail address does n0t exist in our system. Please choose a different one or Register if you are new to the site.<br><a href='jfvlogin.html'>Go back to main page.</a>");

		}
$passcheck = 'SELECT * FROM ba286.accounts WHERE email="'.$email.'" AND password="'.$pass.'"';
$login = runQuery($passcheck);
if (count($login) == 1){
	header("Location:entered.php");
	} else{
		header('HTTP/1.1 500 Internal Server Error');

		exit("</br>Sign In ERROR: Incorrect Password. Please try to log in again<br><a href='jfvlogin.html'>Go back to log-in page.</a>");
}


?>