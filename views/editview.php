<?php
require ('../models/db2.php');
session_start();
if(isset($_GET['id']) and is_numeric($_GET['id']))
{

	$id = $_GET['id'];
	$_SESSION['id']= $id;
	}else{
		echo 'failure';
	}

?>

!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>JustForViews Productions</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../signstyle.css">
		<meta name="description" content="">
		<meta name="author" content="Brian Azubuike">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://code.jquery.com/jquery-2.1.3.min.js">
		</script>
	</head>
	<main>
		<header>
			<p id="Slogan">Make It Happen Already.</p>
			<nav id="mobile_menu">
			</nav>
			<ul id="nav_menu">
				<li id="Home"><a>Home</a></li>
				<li id="Inquire"><a>Inquiries</a></li>
				<li id="Photography"><a>Photography</a></li>
				<li id="Films"><a>Films</a></li>
				<li id="About"><a>About Us</a></li>
			</ul>
		</header>
		<div class="banner">
			<h1>JFViews Productions </h1>
		</div>
	</main>
	<body>
		<a href="../../JustForViews/index.html">I used my website on this link as a template for this sign up page</a>
		<h2>Lets Make a few Changes, Shall We?!</h2>
		<div class="container">

	      	<form class="form-signin" method="get" action="../controllers/editor.php">
	       		<input type="text" id="inputduedate" class="form-control" placeholder="New Due Date: YYYY-MM-DD" name="due" required />
	       		<input type="text" id="inputtime" class="form-control" placeholder="New Time: HH:MM:SS" name="duetime" required />
	       		<input type="text" id="inputmessage" class="form-control" placeholder="New Task Message" name="taskmessage" required />
	       		<br />
	       		<button class="btn btn-lg btn-primary btn-block" type="submit" id="submitButton">Save Edits!</button>
	   		</form>

	    </div>
	</body>

	<footer>
		<p>&copy; 2017 JFV Productions</p>
	</footer>
</html>