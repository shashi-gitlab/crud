<tr>
		<th>Name</th>
		<th>Email id</th>
		<th>Phone No.</th>
	</tr>

<?php
	require_once '../model/db_project.php';
	// print_r($_POST);
	//2-5
	$ans = explode("-",$_POST['record']);
	// print_r($ans);
	$pageno = $ans[0];
	$perpage = $ans[1];
	$b=$perpage;
	$a = $perpage*$pageno - $perpage;
	$limit = "limit $a,$b";
	// echo $limit;
	$ans = $obj->get_all_record($limit);
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