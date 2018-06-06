<?php
	require_once"../model/db_project.php";

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	$reg_exp="/^[a-zA-Z]+( )?[a-zA-Z]+$/";
	$reg_name=preg_match($reg_exp, $_POST['name']);
	if($reg_name!=1)
	{
		echo "Type valid name";
	}
	else
	{
		$reg_exp="/^[0-9]+$/";
		$reg_mob=preg_match($reg_exp, $_POST['mobile']);
		if($reg_mob!=1)
		{
			echo "Type valid mobile number";
		}
		else
		{
			$reg_exp="/^[0-9a-zA-z]+(\._-)?[0-9a-zA-z\._-]+@[0-9a-zA-z]+.[0-9a-zA-z]+$/";
			$reg_mail=preg_match($reg_exp, $_POST['email']);

			if($reg_mail!=1)
			{
				echo "Type valid email id";
			}
			else
			{
				$reg_exp="/^[a-zA-Z]+( )?[a-zA-Z]+$/";
				$reg_add=preg_match($reg_exp, $_POST['address']);

				if($reg_add!=1)
				{
					echo "Type valid address";
				}
				else
				{
					$reg_exp="/^[a-zA-Z0-9@!?]+$/";
					$reg_pass=preg_match($reg_exp, $_POST['pass']);

					if($reg_pass!=1)
					{
						echo "Type valid password";
					}
					elseif($_POST['pass']!=$_POST['cpass'])
					{
						echo "password does not match";
					}
					else
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$add=$_POST['address'];
						$phone=$_POST['mobile'];
						$gender=$_POST['gender'];
						$pass=$_POST['pass'];
						$obj->insert("login","log_name, log_email, log_add, log_phone, log_gender, log_pass","'$name','$email','$add','$phone','$gender','$pass'");
						echo "Data inserted";
					}
				}
			}
		}
	}
	

?>