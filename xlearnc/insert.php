<?php 
session_start();
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
$conn=new mysqli("localhost","root","","wall_design");
		if($conn->connect_errno){
		die("Connection Failed".$conn->connect_errno);
	}

	if ($_SESSION['FLAG'] == 2) {
		$conn->query("INSERT INTO PARAMETERS2 VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['FLAG']}','{$_SESSION['HRS']}','{$_SESSION['SR']}','{$_SESSION['SBC']}','{$_SESSION['UW']}','{$_SESSION['AOR']}','{$_SESSION['Q']}','{$_SESSION['GC']}')");

		$conn->query("INSERT INTO GRAVITY VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['FLAG']}','{$_SESSION['DOF']}','{$_SESSION['LOB']}','{$_SESSION['FOSSLIDING']}','{$_SESSION['PMAX']}','{$_SESSION['PMIN']}','{$_SESSION['SBC']}','{$_SESSION['LFF2']}','{$_SESSION['FP2']}')");
			echo "<script>alert('DATA INSERTED SUCCESSFULLY INTO OUR DATABASE')</script>";		
		    echo "<script>self.location='../learnalanguage.php';</script>";

	}

	if ($_SESSION['FLAG'] == 0 || $_SESSION['FLAG'] == 1) {
		$conn->query("INSERT INTO PARAMETERS VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['FLAG']}','{$_SESSION['HRS']}','{$_SESSION['SR']}','{$_SESSION['SBC']}','{$_SESSION['UW']}','{$_SESSION['AOR']}','{$_SESSION['MU']}','{$_SESSION['GC']}','{$_SESSION['GS']}')");

		$conn->query("INSERT INTO PRESSURE VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['FLAG']}','{$_SESSION['UDL']}','{$_SESSION['PMAX']}','{$_SESSION['PMIN']}','{$_SESSION['PB']}','{$_SESSION['PC']}','{$_SESSION['PCRITICAL']}','{$_SESSION['FOSOM']}','{$_SESSION['FOSSLIDING']}','{$_SESSION['A']}','{$_SESSION['A']}','{$_SESSION['D']}')");

		$conn->query("INSERT INTO DETAILING VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['FLAG']}','{$_SESSION['S1']}','{$_SESSION['S2']}','{$_SESSION['S3']}','{$_SESSION['S4']}','{$_SESSION['S5']}','{$_SESSION['S6']}','{$_SESSION['S7']}')");
	}

	

	if ($_SESSION['FLAG'] == 0) {
		$conn->query("INSERT INTO CANTIPROPORTIONING VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['DOF']}','{$_SESSION['LOB']}','{$_SESSION['TOP']}','{$_SESSION['SW']}','{$_SESSION['LOH']}','{$_SESSION['LFF1']}','{$_SESSION['LFF2']}','{$_SESSION['FP1']}','{$_SESSION['FP2']}')");
            echo "<script>alert('DATA INSERTED SUCCESSFULLY INTO OUR DATABASE')</script>";	
		    echo "<script>self.location='../learnalanguage.php';</script>";
	} 
	else if($_SESSION['FLAG'] == 1){
		$conn->query("INSERT INTO COUNTERPROPORTIONING VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['DOF']}','{$_SESSION['LOB']}','{$_SESSION['TOP']}','{$_SESSION['SW']}','{$_SESSION['LOH']}','{$_SESSION['Q']}','{$_SESSION['LFF2']}','{$_SESSION['CD']}','{$_SESSION['FP2']}')");

		$conn->query("INSERT INTO COUNTERFORT VALUES ('{$_SESSION['USERNAME']}','$date','{$_SESSION['CS1']}','{$_SESSION['CS2']}','{$_SESSION['CS3']}','{$_SESSION['DWL']}')");
            echo "<script>alert('DATA INSERTED SUCCESSFULLY INTO OUR DATABASE')</script>";		
		    echo "<script>self.location='../learnalanguage.php';</script>";

	}
?>