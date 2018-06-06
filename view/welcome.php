<?php
	if(!isset($_COOKIE['logindetails']))
	{
		header("location:index.php");
	}
	else
	{
		// $_COOKIE['logindetails'];
echo $_COOKIE['logindetails'];
	}


?>