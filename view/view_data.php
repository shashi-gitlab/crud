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
<h2>Register Database</h2>
<table>
	<tr>
		<th>Name</th>
		<th>Email id</th>
		<th>Phone No.</th>
	</tr>
	<?php
		$result=$obj->show_data();
		if(is_array($result)):
			foreach ($result as $val):
	?>
	<tr>

		<td><?php echo $val->log_name;?></td>
		<td><?php echo $val->log_email;?></td>
		<td><?php echo $val->log_phone;?></td>
		<td><a href="" class="delete" for="<?php echo $val->log_id;?>">Delete</a> </td>
		<td><a href="update.php?id=<?php echo $val->log_id;?>" class="update" for="<?php echo $val->log_id;?>">Update</a> </td>
	</tr>

	<?php
		endforeach;
		endif;
		?>

		<tr>
			<td> <a href="index.php"> <button>Add New record</button> </a> </td>
		</tr>
</table>










<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/project.js"></script>
</body>
</html>