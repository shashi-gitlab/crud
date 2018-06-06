<?php
	
	require_once"../model/db_project.php";

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	if(empty($_POST['email']))
	{
		echo "Please type email id";
	}
	else
	{
		$email=$_POST['email'];
		$result=$obj->select("*","login","log_email='$email'");
		if($result==0)
		{
			echo "email id does not exist";
		}
		else
		{
			if(empty($_POST['pass']))
			{
				echo "please type password";
			}
			else
			{
				$lpass=$result[0]->log_pass;
				$pass=$_POST['pass'];
				if($lpass!=$pass)
				{
					echo "Password does not match";
				}
				else
				{

					// echo "ok";
					if(!isset($_COOKIE['']))
					{
						$cookiedata=$email;
						setcookie("logindetails",$cookiedata, time()+3600,"/");
						// echo "Login successfully";
						echo 1;
						

					}
					else
					{
						$result=$cdata;
						setcookie("logindetails",$cookiedata, time()+3600,"/");
						echo "you are already loged in";
					}
				}
			}
		}
	}
?>

