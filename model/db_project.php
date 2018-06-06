<?php
	require_once"db_helper.php";

	final class db_project extends db_helper
	{
		function show_data()
		{
			return self::select("log_name, log_email, log_add, log_id, log_pass, log_phone","login","1 order by log_name asc");
		}

		function update_data($id)
		{
			return self::select("log_name, log_email, log_add, log_id, log_pass, log_phone","login","log_id='$id' and 1 order by log_name asc");
		}



		function get_all_record($limit="")
		{
			
			return self::select("*", "login","1 order by log_name desc $limit");
		}


	}

	$obj= new db_project();
?>