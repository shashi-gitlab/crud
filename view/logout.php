<?php

		setcookie('logindetails', $cookiedata, time() - 3600,"/");
		// $cookiedata="";
		$_COOKIE['logindetails']="";
		unset($_COOKIE['logindetails']);
		//$cookiedata="";
		header("location:index.php");
?>