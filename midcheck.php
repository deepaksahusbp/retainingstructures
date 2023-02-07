<?php
session_start();
$a1=$_GET['fname'];
$a2=$_GET['lname'];
$a3=$_GET['gender'];
$a4=$_GET['email'];
$a5=$_GET['uname'];
$a6=$_GET['Password'];
$a7=$_GET['CPassword'];
$passwordmd5 = md5($a6);

$conn=new mysqli("localhost","root","","wall_design");
if($conn->connect_errno){
    die("Connection Failed".$conn->connect_errno);
}

$count=0;
$taken=0;
$_SESSION['TXT']="Account created successfully...";
$_SESSION['TXT1']="Your Username : ";
$_SESSION['TXT2']=$a5;
$query="SELECT * FROM PROFILE";
$my=mysqli_query($conn,$query);
echo"<pre>";
while($row=mysqli_fetch_array($my)){
        
        $count++;
        
        $use=$row['Username'];
        $pw=$row['Password'];
        if($a5==$use){
            $_SESSION['TXT']="Ooopss That username is already taken";
            $_SESSION['TXT1']="Sorry";
            $_SESSION['TXT2']="Try Again";
            $taken=1;
        }
}

if($taken==0){
    $conn->query("INSERT INTO PROFILE VALUES ('$a1','$a2','$a3','$a4','$a5','$passwordmd5')");
}
echo "<script>self.location='choose1.php';</script>";
	
?>

