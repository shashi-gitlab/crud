<?php
	require_once"db_parameter.php";

	abstract class db_connect implements db_parameter
	{
		var $conn="";

		function __construct()

		{
			$this->conn=mysqli_connect(self::HOST, self::USER, self::PASS, self::DATABASE);
			// print_r($this->conn);
		}

		function __destruct()
		{
			$result=mysqli_close($this->conn);
		}
	}


?>