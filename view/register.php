<?php
	require_once"../model/db_project.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th ,td{
			min-width: 100px;
			padding: 10px;
		}
		div{
			float: left;
		}
	</style>

</head>
<body>


<div>
	
	<form id="rg_form">
	Name: <input type="text" name="name"><br><br>
	Mobile: <input type="text" name="mobile" maxlength="10"><br><br>
	Email-Id: <input type="text" name="email"><br><br>
	Gender: <select name="gender">
			<option>Male</option>
			<option>Female</option>
	</select><br><br>
	Address: <input type="text" name="address"><br><br>
	password: <input type="password" name="pass"><br><br>
	Confirm password: <input type="password" name="cpass"><br><br>
	<button type="button" class="rg_btn">Register</button>

</form>
</div>




<div>
	<!-- <a href="view_data.php"><button>View Inserted Data</button></a> -->

</div>




<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/project.js"></script>
</body>
</html>