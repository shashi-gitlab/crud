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
	</style>

</head>
<body>




<form id="update_form">
<?php

		$id=$_GET['id'];
		// echo $id;
		$result=$obj->update_data($id);
		if(is_array($result)):
			foreach ($result as $val):
	?>
	<input type="hidden" name="logid" value="<?php echo $id;?>">
	Name: <input type="text" name="name" value="<?php echo $val->log_name ?>"><br><br>
	Mobile: <input type="text" name="mobile" maxlength="10" value="<?php echo $val->log_phone ?>"><br><br>
	Email-Id: <input type="text" name="email" value="<?php echo $val->log_email ?>"><br><br>
	Gender: <select name="gender" value="<?php echo $val->log_gender ?>">
			<option>Male</option>
			<option>Female</option>
	</select><br><br>
	Address: <input type="text" name="address" value="<?php echo $val->log_add ?>"><br><br>
	
	<button type="button" class="update_btn">Update record</button>
	<?php
		endforeach;
		endif;
		?>

</form>











<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/project.js"></script>
</body>
</html>