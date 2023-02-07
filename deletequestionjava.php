<?php
	session_start();
	include 'dbconnect.php';
	//$usernameErr=$passwordErr="";
	$sql="
		SELECT *
		FROM admin
		WHERE username='".$_SESSION['username']."' 
		AND ( password='".$_SESSION['password']."' )
	";
	$result=$conn->query($sql);
	//print_r($result);
	
	if ($result->num_rows==0) {
		echo "<script>alert('U r not supposed to be here. ByeBye!!')</script>";
		echo "<script>self.location='adminlogin.php';</script>";
	}
    $questionId = $_GET['questionId'];
    $deletesql = "
        DELETE FROM javaquestionbank
        WHERE id = '".$questionId."'
    ";
    if(mysqli_query($conn,$deletesql)){
        echo "<script>alert('Successfully Deleted!')</script>";
        echo "<script>self.location='editquestionjava.php';</script>";
    }
    else{
        echo "<script>alert('Cann't delete now!')</script>";
    }
?>
