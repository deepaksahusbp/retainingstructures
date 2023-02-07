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

                <div style="padding-left: 20px; padding-right: 20px;" class="col-sm-12"> 
                    
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................</p>                    
                    <center>Welcome, <?php echo $_SESSION['FIRSTNAME'];?> <?php echo $_SESSION['LASTNAME'];?></center>
                    <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Gravity Retaining Wall</h1>

<div>
  <h2>Input Parameters</h2>
  <marquee>Choose the record whose details you want to see</marquee>                    
<form action="assigndatetime2.php" method="get">                                                                  
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Choose</th>
        <th>Username</th>
        <th>Date & Time</th>
        <th>Retained Soil (m)</th>
        <th>Top Width (m)</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>Unit Weight Of Soil (kN/m<sup>3</sup>)</th>
        <th>Angle Of Shearing Resistance (in &#8728;)</th>
        <th>Angle b/w Base & Foundation Soil (in &#8728;)</th>
        <th>Density Of Wall</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
//$findit=$_GET['ise'];
//session_start();
include 'dbconnect.php';
$count=0;
$slno=0;
$query="SELECT * FROM PARAMETERS2";
$my=mysqli_query($conn,$query);
//echo"<pre>";
while($row=mysqli_fetch_array($my)){

    if($row['USERNAME']==$_SESSION['USERNAME'] && $row['FLAG']==2){
        
        $count++;
        $slno++;?>

      <tr>
        <td><input type="radio" name="choice" value="<?php echo "$slno";?>"></td>
        <td><?php echo $row['USERNAME'] ?></td>
        <td><?php echo $row['DATE'] ?></td>
        <td><?php echo $row['HRS'] ?></td>
        <td><?php echo $row['B1'] ?></td>
        <td><?php echo $row['SBC'] ?></td>
        <td><?php echo $row['UW'] ?></td>
        <td><?php echo $row['AOR'] ?></td>
        <td><?php echo $row['Q'] ?></td>
        <td><?php echo $row['GC'] ?></td>
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
