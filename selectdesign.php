<?php
  //start the session
  session_start();
  $_SESSION["FLAG"] = 5;
  $_SESSION["HRS"] = 0;
  $_SESSION["SBC"] = 0;
  $_SESSION["UW"] = 0;
  $_SESSION["AOR"] = 0;
  $_SESSION["MU"] = 0;
  $_SESSION["GC"] = 0;
  $_SESSION["GS"] = 0;
  $_SESSION["SR"] = 0;
  $_SESSION["DOF"] = 0;
  $_SESSION["LOB"] = 0;
  $_SESSION["TOP"] = 0;
  $_SESSION["SW"] = 0;
  $_SESSION["LOH"] = 0;
  $_SESSION["LFF1"] = 0;
  $_SESSION["LFF2"] = 0;
  $_SESSION["FP1"] = 0;
  $_SESSION["FP2"] = 0;
  $_SESSION["UDL"] = 0;
  $_SESSION["PMAX"] = 0;
  $_SESSION["PMIN"] = 0;
  $_SESSION["PC"] = 0;
  $_SESSION["PB"] = 0;
  $_SESSION["PCRITICAL"] = 0;
  $_SESSION["A"] = 0;
  $_SESSION["D"] = 0;
  $_SESSION["FOSOM"] = 0;
  $_SESSION["FOSSLIDING"] = 0;
  $_SESSION["S1"] = 0;
  $_SESSION["S2"] = 0;
  $_SESSION["S3"] = 0;
  $_SESSION["S4"] = 0;
  $_SESSION["S5"] = 0;
  $_SESSION["S6"] = 0;
  $_SESSION["S7"] = 0;
  $_SESSION["S8"] = 0;
  $_SESSION["DWL"] = 0;
  $_SESSION["CD"] = 0;
  $_SESSION["CS1"] = 0;
  $_SESSION["CS2"] = 0;
  $_SESSION["CS3"] = 0;
  $_SESSION["CNB"] = 0;
  $_SESSION["Q"] = 0;
  $_SESSION["FIRSTNAME"] = "";
  $_SESSION["LASTNAME"] = "";
  if (!$_SESSION['ACTIVE']) {
    echo "<script>self.location='choose.php';</script>";
  }
  $username1 = $_SESSION['USERNAME'];
  include 'dbconnect.php';
  $sql="
      SELECT *
      FROM PROFILE
      WHERE Username='{$_SESSION['USERNAME']}'";
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['FIRSTNAME']=$row['Firstname'];
    $_SESSION['LASTNAME']=$row['Lastname'];
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


        <div class="container-fluid" style="display: block;  padding-left: 20px; padding-right: 20px;">    
            <div style="height: 1035px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style=" padding-left: 20px; padding-right: 20px;" class="col-sm-8"> 
                    
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................</p>                    
                    <center>Welcome, <?php echo $_SESSION['FIRSTNAME'];?> <?php echo $_SESSION['LASTNAME'];?></center>
                    <center>
                      <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Choose a Retaining Wall to Search</h1>
                    </center>
                    
                    
                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th>Languages</th>
                            </tr>
                        </thead>
                         <tbody>
                            <tr>
                                <td><a href="#">C</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">C++</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">JAVA</a></td>               
                            </tr>
                        </tbody>
                    </table> -->
                    <div style="padding-top: 3%;" class="list-group">
                        <a href="searchgravity.php" class="list-group-item list-group-item active"><center><b>Gravity Retaining Wall</b></center></a>
                        <a href="searchcanti.php" class="list-group-item"><center><b>Cantilever Retaining Wall</b></center></a>
                        <a href="searchcounter.php" class="list-group-item active"><center><b>Counterfort Retaining Wall</b></center></a>
                    </div>
                    <a href="selectdesign.php">
                    <button type="button" class="btn btn-info btn-lg">
                      <b>Show Previous Design</b>               
                    </button>
                    </a>
                    <a href="endsession.php">
                    <button type="button" class="btn btn-danger btn-lg" style="float: right;">
                      <b>Logout</b>               
                    </button>
                    </a>
                    <br>
                    <div style="margin-top: 35%;">
                        <?php 
                                include 'xhomepage/footer.php';
                        ?>
                    </div>
                </div>
                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>
    </body>
</html>
