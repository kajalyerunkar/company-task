<?php

	require_once '../models/db_Project.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form id="form_id">
    <div class="form-group">
      <label>product name:</label>
      <input type="text" class="form-control" id="prd" placeholder="Enter product name" name="prd">
    </div>
    <button type="button" class="btn btn-default">Submit</button>
    <div class="err_msg"></div>

  </form>
  <a href="show_record.php">Show records</a>
</div>
	
	<script type="text/javascript" src="../assets/js/form.js"></script>
</body>
</html>
