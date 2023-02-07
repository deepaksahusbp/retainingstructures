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
  			$_SESSION["MU"] = $key2->mu;
  			$_SESSION["GC"] = $key2->gc;
  			$_SESSION["GS"] = $key2->gs;
  			$_SESSION["DOF"] = $key2->Df;
  			$_SESSION["LOB"] = $key2->Lb;
  			$_SESSION["TOP"] = $key2->Tp;
  			$_SESSION["SW"] = $key2->SW;
  			$_SESSION["LOH"] = $key2->Lh;
  			$_SESSION["LFF1"] = $key2->LF1;
  			$_SESSION["LFF2"] = $key2->LF2;
  			$_SESSION["FP1"] = $key2->p1;
  			$_SESSION["FP2"] = $key2->p2;

  			$_SESSION["UDL"] = $key2->udl;
  			$_SESSION["PMAX"] = $key2->pmax;
  			$_SESSION["PMIN"] = $key2->pmin;
  			$_SESSION["PB"] = $key2->pb;
  			$_SESSION["PC"] = $key2->pc;
  			$_SESSION["PCRITICAL"] = $key2->pcritical;
  			$_SESSION["A"] = $key2->a;
  			$_SESSION["D"] = $key2->d;
  			$_SESSION["FOSOM"] = $key2->fosom;
  			$_SESSION["FOSSLIDING"] = $key2->fossliding;

  			$_SESSION["S1"] = $key2->s1;
  			$_SESSION["S2"] = $key2->s2;
  			$_SESSION["S3"] = $key2->s3;
  			$_SESSION["S4"] = $key2->s4;
  			$_SESSION["S5"] = $key2->s5;
  			$_SESSION["S6"] = $key2->s6;
  			$_SESSION["S7"] = $key2->s7;

			$_SESSION["DWL"] = $key2->dwl;
  			$_SESSION["CD"] = $key2->counterdepth;
  			$_SESSION["CS1"] = $key2->cs1;
  			$_SESSION["CS2"] = $key2->cs2;
  			$_SESSION["CS3"] = $key2->cs3;
  			$_SESSION["CNB"] = $key2->counternoofbar;
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
