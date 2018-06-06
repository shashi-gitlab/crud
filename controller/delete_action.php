<?php
	require_once"../model/db_project.php";

	$id=$_POST['lg_id'];
	// echo $id;

	$obj->delete("login","log_id='$id'");

	echo "User deleted";
?>