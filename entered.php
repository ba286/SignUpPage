<?php
require "db2.php";
session_start();
$x = $_SESSION['email'];
$sql = 'SELECT * FROM ba286.accounts where email="'.$x.'"';
$results = runQuery($sql);

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>JustForViews Productions</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="signstyle.css">
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
		<a href="../JustForViews/index.html">I used my website on this link as a template for this sign up page</a>
		<h2>Long Time No See..<?php echo $results[0][2].' '.$results[0][3]; ?></br>
			<?php echo "Welcome to our creative space!"; ?></h2>
	</body>

	<footer>
		<p>&copy; 2017 JFV Productions</p>
	</footer>
</html>