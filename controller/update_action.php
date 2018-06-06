<?php
	require_once"../model/db_project.php";

	// print_r($_POST);
	// echo "shashikant";

	if(empty($_POST['name']))
	{
		echo "Name field is empty";
	}
	elseif (empty($_POST['mobile']))
	 {
		echo "Mobile field is empty";
	}
	elseif (empty($_POST['email'])) 
	{
		echo "Email id field is empty";
	}
	elseif (empty($_POST['gender'])) 
	{
		echo "gender field is empty";
	}
	elseif (empty($_POST['address'])) 
	{
		echo "address field is empty";
	}
	else
	{
		$name=$_POST['name'];
	// echo $name;
	$email=$_POST['email'];
	$add=$_POST['address'];
	$phone=$_POST['mobile'];
	$gender=$_POST['gender'];
	// $pass=$_POST['pass'];
	$id=$_POST['logid'];
	// echo $id;
	$obj->update("login","log_name='$name', log_email='$email', log_add='$add', log_phone='$phone',log_gender='$gender'","log_id='$id'");
	echo "data updated";
	}
	
?>