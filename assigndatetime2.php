<?php
$er=$_GET['choice'];
session_start();
if (!$_SESSION['ACTIVE']) {
    echo "<script>self.location='choose.php';</script>";
  }

include 'dbconnect.php';
$count=0;
$slno=0;
$query="SELECT * FROM PARAMETERS2";
$my=mysqli_query($conn,$query);
//echo"<pre>";
while($row=mysqli_fetch_array($my)){
	//echo "<script>alert('in LOOP')</script>";
    if($row['USERNAME']==$_SESSION['USERNAME']){
        //echo "<script>alert('in MIL GAYA')</script>";
        $count++;
        if ($count == $er) {
        	$_SESSION["DATE"] = $row['DATE'];
          $_SESSION["HRS"] = $row['HRS'];
          $_SESSION["SR"] = $row['B1'];
          $_SESSION["SBC"] = $row['SBC'];
          $_SESSION["UW"] = $row['UW'];
          $_SESSION["AOR"] = $row['AOR'];
          $_SESSION["Q"] = $row['Q'];
          $_SESSION["GC"] = $row['GC'];
          //$_SESSION["GS"] = $row['GS'];
        	//echo "<script>alert('before break')</script>";
        		break;
        }
        $slno++;
    }
}?>
        <!-- //echo "<script>alert('in database')</script>";
        // $a1=$row['Firstname'];
        // $a2=$row['Lastname'];
        // $a3=$row['Date_Of_Birth'];
        // $a4=$row['Gender'];
        // $a5=$row['Address'];
        // $a6=$row['City'];
        // $a7=$row['State'];
        // $a8=$row['Pincode'];
        // $a9=$row['E-MailID'];
        // $a10=$row['Mobile_No'];
        // $a11=$row['Treatment'];
        // $a12=$row['Begining_Time'];
        // $a13=$row['Ending_Time'];
        // $a14=$row['Days_Preferred'];
        // $a15=$row['Fees']; -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Design Home</title>
        <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
    </head>
    <body>

       <?php 
            include 'includevariables.php';
            include 'navbar.php';
        ?>


        <div class="container-fluid" style="display: block; padding-left: 20px; padding-right: 20px; ">    
            <div style="height: auto;" class="row content">
                <!-- <div class="col-sm-2 sidenav">
                </div> -->

                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style=" padding-left: 20px; padding-right: 20px;" class="col-sm-12"> 
                    
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................</p>                    
                    <center>Welcome, <?php echo $_SESSION['FIRSTNAME'];?> <?php echo $_SESSION['LASTNAME'];?></center>
                    <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Gravity Retaining Wall</h1>

<div>
  <h2>Design Results</h2>
  <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p> -->                    
<form action="xlearnc/result111dummy.php" method="get">                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>Foundation Depth(m)</th>
        <th>Length Of Base (m)</th>
        <th>FOS<sub>sliding</sub></th>
        <th>P<sub>MAX</sub> (kN/m<sup>2</sup>)</th>
        <th>P<sub>MIN</sub> (kN/m<sup>2</sup>)</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>Lateral Force (kN/m)</th>
        <th>P<sub>a</sub> (kN)</th>
      </tr>
    </thead>
    
    <tbody>
<?php
//$findit=$_GET['ise'];
//session_start();
//include 'dbconnect.php';
//$count=0;
$slno=0;
$sql="SELECT *
      FROM GRAVITY
      WHERE USERNAME='{$_SESSION['USERNAME']}' AND DATE_TIME='{$_SESSION['DATE']}'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    //print_r($result);
    //$_SESSION['FIRSTNAME']=$row['Firstname'];
    //$_SESSION['LASTNAME']=$row['Lastname'];
  $_SESSION["DOF"] = $row['DOF'];
  $_SESSION["LOB"] = $row['LOB'];
  $_SESSION["FOSSLIDING"] = $row['FOSS'];
  $_SESSION["PMAX"] = $row['PMAX'];
  $_SESSION["PMIN"] = $row['PMIN'];
  $_SESSION["SBC"] = $row['SBC'];
  $_SESSION["LFF2"] = $row['LFF2'];
  $_SESSION["FP2"] = $row['FP2'];

  
  // $_SESSION["DWL"] = 0;
  // $_SESSION["CD"] = 0;
  // $_SESSION["CS1"] = 0;
  // $_SESSION["CS2"] = 0;
  // $_SESSION["CS3"] = 0;
  // $_SESSION["CNB"] = 0;
  // $_SESSION["Q"] = 0;

$slno++;
?>

      <tr>
        <td><input type="radio" name="choice" value="<?php echo "$slno";?>"></td>
        <td><?php echo $row['DOF'] ?></td>
        <td><?php echo $row['LOB'] ?></td>
        <td><?php echo $row['FOSS'] ?></td>
        <td><?php echo $row['PMAX'] ?></td>
        <td><?php echo $row['PMIN'] ?></td>
        <td><?php echo $row['SBC'] ?></td>
        <td><?php echo $row['LFF2'] ?></td>
        <td><?php echo $row['FP2'] ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  
  <center><input type="reset"/><input type="submit" name="Submit" value="Submit" onclick="alert('Confirm?')"ClickMe!/></center>

  </form>
  <br>
  <center>
    <a href="mailgravity.php">
    <button type="button" class="btn btn-danger btn-lg">
                      <b>Mail my Results</b>               
    </button>
    </a>
  </center>
</div>

                    
                    <br>
                    <div style="margin-top: 5%;">
                        <?php 
                                include 'xhomepage/footer.php';
                        ?>
                    </div>
                </div>
                <!-- <div class="col-sm-2 sidenav">
                </div> -->
            </div>
        </div>
    </body>
</html>
