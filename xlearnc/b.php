<?php
	session_start();
	$emps = 0;
	print_r($_POST);
	print_r($_POST['emps']);
	$emps1 = json_decode($_POST['emps']);
	$meraid;
	print_r($emps1);
	
	if (json_last_error() == JSON_ERROR_NONE) {
		foreach ($emps1 as $key2) {
			print_r($key2->id);
			//DisplayKar($key2->id);
			$meraid = $key2->id;
			$_SESSION["ABCD"]=$meraid;
			print_r($meraid);
			print_r($_SESSION["ABCD"]);
		}
	}
	else{
		echo json_last_error_msg();
	}
	// public function DisplayKar($value123)
	// {
	// 	alert($value123);
	// }

	// $emp1 = json_decode($_POST['emp1']);
	// foreach ($emp1 as $emp) {
	// 	print_r($emp->id);
	// }
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>next page</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
		
</body>
</html>
