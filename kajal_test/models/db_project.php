<?php

	require_once 'db_helper.php';

	final class db_project extends db_helper{

		function show_record(){

			return parent::select("*","products_test","1");

		}

		function delete_records($id){
			return parent:: delete("products_test","$id=''id");
		}

	}

	$obj= new db_project();

?>