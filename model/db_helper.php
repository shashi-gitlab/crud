<?php
	require_once"db_connect.php";

	abstract class db_helper extends db_connect
	{
		function insert($table, $col, $value)
		{
			$str="insert into $table ($col) values($value)";
			$result=mysqli_query($this->conn, $str) or die(mysqli_error($this->conn));
		}

		function select($col, $table, $cond)
		{
			$str="select $col from $table where $cond";
			$result=mysqli_query($this->conn, $str) or die(mysqli_error($this->conn));

			if($result->num_rows>0)
			{
				while($ans=$result->fetch_object())
				{
					$data[]=$ans;
				}
				return $data;
			}
			else
			{
				return 0;
			}
		}

		function delete($table, $cond)
		{
			$str="delete from $table where $cond";
			$result=mysqli_query($this->conn, $str) or die(mysqli_error($this->conn));
		}

		function update($table,$record,$cond)
		{
			$str="update $table set $record where $cond";
			$result=mysqli_query($this->conn, $str) or die(mysqli_error($this->conn));
		}

		function cnt($table, $cond)
		{
			$ans=$this->select("count(*) as cnt", $table,$cond);
			return $ans[0]->cnt;
		}
	}
?>