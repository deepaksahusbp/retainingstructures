<?php
$er=$_GET['choice'];
session_start();
if (!$_SESSION['ACTIVE']) {
    echo "<script>self.location='choose.php';</script>";
  }

include 'dbconnect.php';
$count=0;
$slno=0;
$query="SELECT * FROM PARAMETERS";
$my=mysqli_query($conn,$query);
//echo"<pre>";
while($row=mysqli_fetch_array($my)){
	//echo "<script>alert('in LOOP')</script>";
    if($row['USERNAME']==$_SESSION['USERNAME'] && $row['FLAG']==0){
        //echo "<script>alert('in MIL GAYA')</script>";
        $count++;
        if ($count == $er) {
        	$_SESSION['DATE'] = $row['Date'];
          //$_SESSION["HRS"] = $row['HRS'];
          //$_SESSION["SR"] = $row['SR'];

        $_SESSION["HRS"] = $row['HRS'];
        $_SESSION["SBC"] = $row['SBC'];
        $_SESSION["UW"] = $row['UW'];
        $_SESSION["AOR"] = $row['AOR'];
        $_SESSION["MU"] = $row['MU'];
        $_SESSION["GC"] = $row['GC'];
        $_SESSION["GS"] = $row['GS'];
        $_SESSION["SR"] = $row['SR'];
  
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
                    <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Cantilever Retaining Wall</h1>

<div>
  <h2>Proportioning</h2>
  <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p> -->                    
<form action="diversion.php" method="get">                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>Foundation Depth(m)</th>
        <th>Length Of Base (m)</th>
        <th>Toe Projection (m)</th>
        <th>Stem Width (mm)</th>
        <th>Length of Heel (m)</th>
        <th>F1 (kN/m)</th>
        <th>F2 (kN/m)</th>
        <th>P1 (kN)</th>
        <th>P2 (kN)</th>
      </tr>
    </thead>
    
    <tbody>
<?php
//$findit=$_GET['ise'];
//session_start();
//include 'dbconnect.php';
//$count=0;
$slno=0;
$sql="
      SELECT *
      FROM CANTIPROPORTIONING
      WHERE Username='{$_SESSION['USERNAME']}' AND Date='{$_SESSION['DATE']}'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    //$_SESSION['FIRSTNAME']=$row['Firstname'];
    //$_SESSION['LASTNAME']=$row['Lastname'];
  $_SESSION["DOF"] = $row['DOF'];
  $_SESSION["LOB"] = $row['LOB'];
  $_SESSION["TOP"] = $row['TOP'];
  $_SESSION["SW"] = $row['SW'];
  $_SESSION["LOH"] = $row['LH'];
  $_SESSION["LFF1"] = $row['F1'];
  $_SESSION["LFF2"] = $row['F2'];
  $_SESSION["FP1"] = $row['P1'];
  $_SESSION["FP2"] = $row['P2'];

  
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
        <td><?php echo $row['TOP'] ?></td>
        <td><?php echo $row['SW'] ?></td>
        <td><?php echo $row['LH'] ?></td>
        <td><?php echo $row['F1'] ?></td>
        <td><?php echo $row['F2'] ?></td>
        <td><?php echo $row['P1'] ?></td>
        <td><?php echo $row['P2'] ?></td>
      </tr>
    </tbody>
  </table>
  </div>
  <!-- LOAD DISTRIBUTION IN TABLE -->
    <div>
  <h2>Load Distribution</h2>
  <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p> -->                    
<!-- <form action="#" method="get"> -->                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>UDL</th>
        <th>P<sub>max</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>min</sub> (kN/m<sup>2</sup>)</th>
        <!-- <th>SBC (kN/m<sup>2</sup>)</th> -->
        <th>P<sub>B</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>C</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>critical</sub>(kN/m<sup>2</sup>)</th>
        <th>FOS<sub>overturning</sub></th>
        <th>FOS<sub>sliding</sub></th>
        <th>Shear Key (mm)</th>
        <th>Critical Distance (mm)</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
//$findit=$_GET['ise'];
//session_start();
    $slno++;
include 'dbconnect.php';
$sql="
      SELECT *
      FROM PRESSURE
      WHERE Username='{$_SESSION['USERNAME']}' AND Date='{$_SESSION['DATE']}'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();

  $_SESSION["UDL"] = $row['UDL'];
  $_SESSION["PMAX"] = $row['PMAX'];
  $_SESSION["PMIN"] = $row['PMIN'];
  $_SESSION["PC"] = $row['PC'];
  $_SESSION["PB"] = $row['PB'];
  $_SESSION["PCRITICAL"] = $row['PCRITICAL'];
  $_SESSION["A"] = $row['WIDTH'];
  $_SESSION["D"] = $row['CD'];
  $_SESSION["FOSOM"] = $row['FOSOM'];
  $_SESSION["FOSSLIDING"] = $row['FOSS'];

    ?>
      <tr>
        <td><input type="radio" name="choice" value="<?php echo "$slno";?>"></td>
        <td><?php echo $row['UDL'] ?></td>
        <td><?php echo $row['PMAX'] ?></td>
        <td><?php echo $row['PMIN'] ?></td>
        <!-- <td><?php echo $row['SBC'] ?></td> -->
        <td><?php echo $row['PB'] ?></td>
        <td><?php echo $row['PC'] ?></td>
        <td><?php echo $row['PCRITICAL'] ?></td>
        <td><?php echo $row['FOSOM'] ?></td>
        <td><?php echo $row['FOSS'] ?></td>
        <td><?php echo $row['WIDTH'] ?> x <?php echo $row['HEIGHT'] ?></td>
        <td><?php echo $row['CD'] ?></td>
      </tr>
    </tbody>
  </table>
  </div>

  <!-- LOAD DISTRIBUTION IN TABLE ENDS -->
  <!-- REINFORCEEMEENT SPACING IN TABLE -->
  <div>
  <h2>c/c Spacing</h2>
  <!-- <p>The .table-responsive class creates a responsive table which will scroll horizontally on small devices (under 768px). When viewing on anything larger than 768px wide, there is no difference:</p> -->                    
<!-- <form action="#" method="get"> -->                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>S1 (mm)</th>
        <th>S2 (mm)</th>
        <th>S3 (mm)</th>
        <th>S4 (mm)</th>
        <th>S5 (mm)</th>
        <th>S6 (mm)</th>
        <th>S7 (mm)</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
//$findit=$_GET['ise'];
//session_start();
    $slno++;
include 'dbconnect.php';
$sql="
      SELECT *
      FROM DETAILING
      WHERE Username='{$_SESSION['USERNAME']}' AND Date='{$_SESSION['DATE']}'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
  $_SESSION["S1"] = $row['S1'];
  $_SESSION["S2"] = $row['S2'];
  $_SESSION["S3"] = $row['S3'];
  $_SESSION["S4"] = $row['S4'];
  $_SESSION["S5"] = $row['S5'];
  $_SESSION["S6"] = $row['S6'];
  $_SESSION["S7"] = $row['S7'];
  //$_SESSION["S8"] = $row['S8'];
  
    ?>
      <tr>
        <td><input type="radio" name="choice" value="<?php echo "$slno";?>"></td>
        <td><?php echo $row['S1'] ?></td>
        <td><?php echo $row['S2'] ?></td>
        <td><?php echo $row['S3'] ?></td>
        <td><?php echo $row['S4'] ?></td>
        <td><?php echo $row['S5'] ?></td>
        <td><?php echo $row['S6'] ?></td>
        <td><?php echo $row['S7'] ?></td>
      </tr>
    </tbody>
  </table>
  </div>

  <!-- REINFORCEMENT SPACING IN TABLE ENDS -->
  
  <center><input type="reset"/><input type="submit" name="Submit" value="Submit" onclick="alert('Confirm?')"ClickMe!/></center>

  </form>
  <br>
  <center>
    <a href="message_module.php">
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
