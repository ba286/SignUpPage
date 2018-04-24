<?php
require ('../models/db2.php');
session_start();
$x = $_SESSION['email'];
$sql = 'SELECT * FROM ba286.accounts where email="'.$x.'"';
$results = runQuery($sql);
$sql2 = 'SELECT * FROM ba286.todos where owneremail="'.$x.'"';
$results2 = runQuery($sql2);

?>
<!DOCTYPE html>
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
		<h2>Long Time No See..<?php echo $results[0][2].' '.$results[0][3]; ?></br>
			<?php echo "Welcome to our creative space!"; ?></br></br>
			<?php echo "Todo List!"; ?></br></br>
			<a class="add" href="todoadd.html">&#160;New&#160;</br></a>
		
			
			<div class='table' style="margin:5px auto; width:75%">
				<?php if(count($results2) > 0)
				{
					echo "<table border=\"3\"><tr><th>Incomplete</th><th>ID</th><th>Created</th><th>Due</th><th>Message</th></tr>";
					foreach ($results2 as $row) {
						if( $row[6] == 0){
							echo "<tr><td></td>
								<td>".$row["id"]."</td>
								<td>".$row["createddate"]."</td>
								<td>".$row["duedate"]."</td>
								<td>".$row["message"]."</td>
								<td><a class='deletedItem' href='../controllers/deleted.php?id=".$row['id']."'>&#160;Delete&#160;</a></td>
								<td><a class='completedItem' href='../controllers/complete.php?id=".$row['id']."'>&#160;Complete&#160;</a></td>
								<td><a class='editItem' href='editview.php?id=".$row['id']."'>&#160;Edit&#160;</a></td>
								</tr>";
						}
					}
					
				}else{
				    echo '0 results';
				} 
				?>

				<?php if(count($results2) > 0)
				{
					echo "<table border=\"3\"><tr><th>Complete</th><th>ID</th><th>Created</th><th>Due</th><th>Message</th></tr>";
					foreach ($results2 as $row) {
						if( $row[6] == 1){
							echo "<tr><td></td>
								<td>".$row["id"]."</td>
								<td>".$row["createddate"]."</td>
								<td>".$row["duedate"]."</td>
								<td>".$row["message"]."</td>
								<td><a class='deletedItem' href='../controllers/deleted.php?id=".$row['id']."'>&#160;Delete&#160;</a></td>
								<td><a class='editItem' href='editview.php?id=".$row['id']."'>&#160;Edit&#160;</a></td>
								</tr>";
						}
					}
					
				}else{
				    echo '0 results';
				} 
				?>
				<?php?>
				<?php echo ' '?>
			</div>
		</h2>
		<h3> </br></h3>
		<h4> </h4>
	</body>
	<footer>
	</footer>
</html>