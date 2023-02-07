<?php
$u=$_GET['username'];
$p=$_GET['pass'];
session_start();
$_SESSION['USERNAME'] = $u;
$_SESSION['ACTIVE'] = 0;
$p = md5($p);

$conn=new mysqli("localhost","root","","wall_design");
if($conn->connect_errno){
    die("Connection Failed".$conn->connect_errno);
}

$count=0;
$query="SELECT * FROM PROFILE";
$my=mysqli_query($conn,$query);
echo"<pre>";
while($row=mysqli_fetch_array($my)){
    
        $use=$row['Username'];
        $pw=$row['Password'];
        
        //$p = md5($p);
        if($u==$use && $p==$pw){
            $count++;
            echo "<script>self.location='learnalanguage.php';</script>";
            $_SESSION['ACTIVE'] = 1;
            break;
        }
        else if($u==$use && $p!=$pw){
            $count++;
            echo "<script>alert('hiii----'+'$p'+'-------'+'$pw')</script>";
            echo "<script>self.location='logintodatabase2.php?tempo=<?php echo $u ?>';</script>";
            break;
        }
}
if(count==0){
    echo "<script>self.location='logintodatabase3.php';</script>";
}

?>