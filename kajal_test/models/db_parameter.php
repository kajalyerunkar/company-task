<?php

	require_once 'db_function.php';

	interface db_parameter{

		CONST HOSTNAME = "localhost";
		CONST USER = "root";
		CONST PASSWORD ="";
		CONST DATABASE ="kajal_test";
	}

	interface db_general_function{

		function select($col,$tab,$condition);
		function insert($table,$columns,$values);
		function delete($table,$condition);
		function update($table,$record,$condition);
	}

?>