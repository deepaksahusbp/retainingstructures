<?php
error_reporting(1);
//$con=mysql_connect("localhost","root","","wall_design");
$conn=new mysqli("localhost","root","","wall_design");
//mysql_select_db("vssut",$con);
//$servername = "148.72.232.172:3306";
//$username = "melogikmagik";
//$password = "Burle@1978";
//$dbname = "sharmasirlearningcener";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	echo "hii:";
    die("Connection failed: " . $conn->connect_error);
} 
?>
