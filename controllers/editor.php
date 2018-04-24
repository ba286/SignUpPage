<?php
require ('../models/db2.php');
session_start();
$taskid = $_SESSION['id'];

$due = $_GET['due'];

$message = $_GET['taskmessage'];

$time = $_GET['duetime'];

$date = date('Y-m-d H:i:s', strtotime("$due $time"));

$sqledit = "UPDATE ba286.todos SET message = '$message', duedate = '$date' WHERE id = $taskid"; 
$write = runQuery($sqledit);
if (count($write) == 0){
	header("Location:../views/entered.php");
	} else{
		header('HTTP/1.1 500 Internal Server Error');

		exit("</br>Sign In ERROR: Incorrect Password. Please try to log in again<br><a href='jfvlogin.html'>Go back to log-in page.</a>");
	}


?>