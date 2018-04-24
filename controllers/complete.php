<?php
require ('../models/db2.php');
if(isset($_GET['id']) and is_numeric($_GET['id']))
{
	$id = $_GET['id'];
	$done='SELECT * FROM ba286.todos WHERE id="'.$id.'"';
	runQuery($done);
	if ($done[0][6]==0) {
		$sql = "UPDATE ba286.todos SET isdone= 1 WHERE id = $id"; 
		runQuery($sql);
		header("Location:../views/entered.php");}
	}
	else{
		echo 'failure';
	}

?>