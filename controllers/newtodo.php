<?php
require ('../models/db2.php');
session_start();
$owneremail = $_SESSION['email'];

$sql = 'SELECT id FROM ba286.accounts where email="'.$owneremail.'"';
$results = runQuery($sql);

$ownerid = $results[0][0];

$created = date('Y-m-d H:i:sa');

$due = $_GET['due'];

$time = $_GET['duetime'];

$date = date('Y-m-d H:i:s', strtotime("$due $time"));

$message = $_GET['taskmessage'];

$isdone = 0;

$sqladd = "INSERT INTO ba286.todos (owneremail, ownerid, createddate, duedate, message, isdone) VALUES ('$owneremail', '$ownerid', '$created', '$date', '$message', '$isdone')";
$write = runQuery($sqladd);
if (count($write) == 0){
	header("Location:../views/entered.php");
	} else{
		header('HTTP/1.1 500 Internal Server Error');

		exit("</br>Sign In ERROR: Incorrect Password. Please try to log in again<br><a href='../views/jfvlogin.html'>Go back to log-in page.</a>");
	}


?>