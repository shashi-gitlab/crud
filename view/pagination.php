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
		ul li{
			list-style: none;
			float: left;

		}
		ul li a{
			text-decoration: none;
		}
		li{
			padding: 10px;
			margin: 10px;
			background-color: green;
			color:#fff;
		}
		.paginate{
	height:30px;
	background-color: #eee;
	margin: 10px 0;
}
.paginate a{
	display: inline-block;
	width:30px;
	height:30px;
	margin: 0 5px;
	background-color: #aaa;
	cursor: pointer;
	text-align: center;
}
	</style>

</head>
<body>
<h2>Register Database</h2>
<?php
$ans = $obj->get_all_record();
						$cnt = count($ans);						// echo $cnt;
						$perpage = 2;
						$pages = ceil($cnt/$perpage); //(24/5);
						// echo $pages;
						echo "<div class='paginate'>";
							for($i=1;$i<=$pages;$i++){
								echo "<a href='#' for='$i-$perpage'>$i</a>";
							}
						echo "</div>";

						echo "<div class='replacedata'>";
						//limit x,y
?>
<table>
	<tr>
		<th>Name</th>
		<th>Email id</th>
		<th>Phone No.</th>
	</tr>
	<?php
						
						$ans = $obj->get_all_record("limit 0,$perpage");
						// echo "<pre>";
						// print_r($ans);
						// echo "</pre>";
						if(is_array($ans)):
						foreach($ans as $val):
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