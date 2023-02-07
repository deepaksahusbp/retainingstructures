<?php
	session_start();
	//$emps = 0;
	print_r($_POST);
	print_r($_POST['emps']);
	$emps1 = json_decode($_POST['emps']);
	//$meraid;
	print_r($emps1);
	
	if (json_last_error() == JSON_ERROR_NONE) {
		foreach ($emps1 as $key2) {
			//print_r($key2->id);
			//DisplayKar($key2->id);
			//$meraid = $key2->id;
			$_SESSION["FLAG"] = $key2->flag;
			$_SESSION["HRS"] = $key2->h;
  			$_SESSION["SR"] = $key2->s;
  			$_SESSION["SBC"] = $key2->sbc;
  			$_SESSION["UW"] = $key2->uw;
  			$_SESSION["AOR"] = $key2->aor;
  			//$_SESSION["MU"] = $key2->mu;
  			$_SESSION["GC"] = $key2->gc;
  			//$_SESSION["GS"] = $key2->gs;
  			$_SESSION["DOF"] = $key2->Df;
  			$_SESSION["LOB"] = $key2->Lb;
  			$_SESSION["LFF2"] = $key2->LF2;
  			//$_SESSION["FP1"] = $key2->p1;
  			$_SESSION["FP2"] = $key2->p2;

  			//$_SESSION["UDL"] = $key2->udl;
  			$_SESSION["PMAX"] = $key2->pmax;
  			$_SESSION["PMIN"] = $key2->pmin;
  			$_SESSION["FOSSLIDING"] = $key2->fossliding;
  			$_SESSION["Q"] = $key2->q;

			
			//print_r($meraid);
			print_r($_SESSION["HRS"]);
			print_r($_SESSION["HRS"]);
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
