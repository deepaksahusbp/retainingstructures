<?php
//$findit=$_GET['ise'];
session_start();
?>
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
  <h2>Input Parameters</h2>
  <marquee>Choose the record whose details you want to see</marquee>                    
<form action="assigndatetime.php" method="get">                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>Username</th>
        <th>Date & Time</th>
        <th>Retained Soil (m)</th>
        <th>Surcharge</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>&gamma; (kN/m<sup>3</sup>)</th>
        <th>&empty; (in degrees)</th>
        <th>(&mu;)</th>
        <th>f<sub>ck</sub> (N/mm<sup>2</sup>)</th>
        <th>f<sub>y</sub> (N/mm<sup>2</sup>)</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
//$findit=$_GET['ise'];
//session_start();
include 'dbconnect.php';
$count=0;
$slno=0;
$query="SELECT * FROM PARAMETERS";
$my=mysqli_query($conn,$query);
//echo"<pre>";
while($row=mysqli_fetch_array($my)){

    if($row['USERNAME']==$_SESSION['USERNAME'] && $row['FLAG']==0){
        
        $count++;
        $slno++;
         //echo "<script>alert('in database')</script>";
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
        // $_SESSION["HRS"] = $row['HRS'];
        // $_SESSION["SBC"] = $row['SBC'];
        // $_SESSION["UW"] = $row['UW'];
        // $_SESSION["AOR"] = $row['AOR'];
        // $_SESSION["MU"] = $row['MU'];
        // $_SESSION["GC"] = $row['GC'];
        // $_SESSION["GS"] = $row['GS'];
        // $_SESSION["SR"] = $row['SR'];
        ?>


      <tr>
        <td><input type="radio" name="choice" value="<?php echo "$slno";?>"></td>
        <td><?php echo $row['USERNAME'] ?></td>
        <td><?php echo $row['Date'] ?></td>
        <td><?php echo $row['HRS'] ?></td>
        <td><?php echo $row['SR'] ?></td>
        <td><?php echo $row['SBC'] ?></td>
        <td><?php echo $row['UW'] ?></td>
        <td><?php echo $row['AOR'] ?></td>
        <td><?php echo $row['MU'] ?></td>
        <td><?php echo $row['GC'] ?></td>
        <td><?php echo $row['GS'] ?></td>
      </tr>
    
    <?php }
}
$tempheading;
if($count==0){
     $tempheading="Oooppps...There is no such record in our Database.";
}
else{
    $tempheading="DATA DISPLAYED ABOVE SUCCESSFULLY FROM OUR DATA - BASE";
}
?>
        </tbody>
  </table>
  </div>
  <center><input type="reset"/><input type="submit" name="Submit" value="Submit" onclick="alert('Confirm?')"ClickMe!/></center>

  </form>
</div>

                    
                    <br>
                    <div style="margin-top: 35%;">
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
