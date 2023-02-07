<?php
$er=$_GET['choice'];
session_start();
if ($er == 1) {
	if ($_SESSION['FLAG']==1) {
		echo "<script>self.location='xlearnc/result11dummy.php';</script>";
	}
	else
		echo "<script>self.location='xlearnc/result1dummy.php';</script>";
}
elseif ($er == 2) {
	echo "<script>self.location='xlearnc/result2dummy.php';</script>";		
}
elseif ($er == 3) {
	echo "<script>self.location='xlearnc/result3dummy.php';</script>";
}
elseif ($er == 4) {
	echo "<script>self.location='xlearnc/result4dummy.php';</script>";
}
?>