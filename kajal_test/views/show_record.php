<?php
	
	require_once "../models/db_project.php";
?>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<div class="container">

	<a href="index.php">Add record</a>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>PRODUCT NAME</th>
			<th>DELETE</th>
			<th>EDIT</th>
		</tr>

		<?php 
			$result=$obj->show_record();	
			//print_r($result);
			if(is_array($result)):
				foreach ($result as $val): 
		?>
			<tr>
				<td><?php echo $val['id'] ?></td>
				<td><?php echo $val['product_name'] ?></td>
				<td><a href="delete_record.php?ab=<?php echo $val['id']?>"> Delete
				</a></td>
				<td><a href="update_record.php?ab=<?php echo $val['id']?>">EDIT
				</a></td>

			</tr>
			<?php 
				endforeach;
			endif;
			?>
			
		
	</table>
</div>