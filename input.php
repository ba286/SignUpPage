<?php
require "db.php" ;

$first = $_GET['reg_fname'];

$last = $_GET['reg_lname'];

$email = $_GET['reg_email'];

$phone = $_GET['reg_phone'];

$pass = $_GET['reg_pass'];

$bday = $_GET['reg_bday'];

$gender = $_GET['reg_gender'];

$sql = 'SELECT * FROM accounts where email="'.$email.'"';
$results = runQuery($sql);

if (count($results) > 0){

		header('HTTP/1.1 500 Internal Server Error');

		exit("</br>ERROR: The e-mail address already exists. Please choose a different one.<br><a href='jfvsignup.html'>Go back to main page.</a>");

}

$sql = "INSERT INTO ba286.accounts (email, fname, lname,phone, birthday,
		gender,password) VALUES ('$email', '$first', '$last', '$phone', '$bday', '$gender', '$pass')";
$results = runQuery($sql);
	header("Location: jfvsignup.html");

?>