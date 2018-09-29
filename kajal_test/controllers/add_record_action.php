<?php
	
	require_once '../models/db_project.php';
	print_r($_POST);

	if(empty($_POST['prd'])){
		echo "enter product name";	
	}
	
	else{

		$product_nm=($_POST['prd']);
		echo "$product_nm";
		
		// $result=$obj->check_data($product_nm);
		
		// if($result[0]['cnt']>0){
		// 	echo "product already exits";
		// }
		// else{

		// 	if($obj->user_insert($product_nm)){
		// 		echo "successfully added";
		// 	}
		// }
			
		 }
?>
