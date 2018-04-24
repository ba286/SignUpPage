<?php
require ('../models/db2.php');
if(isset($_GET['id']) and is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "DELETE FROM ba286.todos WHERE id = $id"; 
	runQuery($sql);
	header("Location:../views/entered.php");}
	else{
		echo 'failure';
	}

?>