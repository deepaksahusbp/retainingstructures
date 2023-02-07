<?php
session_start();
if (!$_SESSION['ACTIVE']) {
    echo "<script>self.location='choose.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gravity Retaining Wall</title>
    <link rel="shortcut icon" type="image/png" href="../images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
    <script type="text/javascript">
      function change1() {
        //alert(123456);
          var txt = "<b>Symbol:<b> ws<br><br><b>Unit:<b> kN/m2<br><br><b>Expected value:<b> can be 0<br><br>Gravity loads acting on backfill due to the construction of buildings or the movement of vehicles near the top of the retaining wall<br><br>These loads are considered as uniformly distributed loads, and are mostly present on a level backfill.";
         document.getElementById("para1").innerHTML = txt;

      }
      function change2() {
        //alert(123456);
          var txt = "<b>Symbol:<b> γSoil, γe<br><br><b>Unit:<b> kN/m<sup>2<sup><br><br><b>Symbol : qo <br><br> Unit: kN/m2 <br><br> Expected value: It is the bearing capacity of soil corresponding to given depth of foundation.<b>";
         document.getElementById("para1").innerHTML = txt;

      }
      function change3() {
        //alert(123456);
          var txt = "<b>Symbol:<b> γSoil, γe<br><br><b>Unit:<b> kN/m3<br><br><b>Expected value:<b> 14-22 kN/m3<br><br>Unit weight of soil varies from 14 kN/m3 for clay to 22 kN/m3 for gravels.";
         document.getElementById("para1").innerHTML = txt;

      }
      function change4() {
        //alert(123456);
          var txt = "<b>Symbol:<b> φ<br><br><b>Unit:<b> degree (°)<br><br><b>Expected value:<b> 20 - 40°<br><br>Cessionless granular soil has been considered in this design.";
         document.getElementById("para1").innerHTML = txt;

      }
      function change5() {
        //alert(123456);
          var txt = "<b>Symbol:<b> δ <br><br><b>Unit:<b> Degrees <br><br>A angle of friction is a value that shows the relationship between the force of friction between two objects and the normal reaction between the objects that are involved. <br><br>It is a value that is sometimes used in physics to find an object's normal force or frictional force when other methods are unavailable.";
         document.getElementById("para1").innerHTML = txt;

      }
      function change6() {
        //alert(123456);
          var txt = "<b>Symbol:<b> γc<br><br><b>Unit:<b> kN/m3<br><br><b>Expected value:<b> 20-25 kN/m3<br><br>Unit weight of concrete is usually taken as 24 kN/m3.";
         document.getElementById("para1").innerHTML = txt;

      }
      function change7() {
        //alert(123456);
          var txt = "<b>Symbol:<b> b1 <br><br><b>Unit:<b> m <br><br>The top width is assumed here as 1m. Here top width is minimum because moment here is minimum. <br><br>";
         document.getElementById("para1").innerHTML = txt;

      }

      function clickhuahai() {
        alert("fun call hua");
      }
    </script>
</head>

<body onload="document.getElementById('menu-toggle').click()">
    
    <?php
            include 'includevariables.php';
            include '../navbar.php';
    ?>
       
    <div class="container-fluid" style="margin-top: 10px;">
        <div id="wrapper" class="row">

        <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #ffffff;">
                <div class="sidebar-nav" >
                    <br>
<!--
                    <?php 
                        $value='learnc';
                        include 'csidenav.php';
                    ?>
-->
                    
                          <div class="container" style="margin-right:80%">
                            <div style="margin-right:70%;">
                            <center><h2 style="font-family:'sans-serif';color:#5E412F;">Follow Instructions</h2></center>
                            <br>
                            <div class="panel-group col-lg-12" style="margin-right:80%;">
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#">Help !</a>
                                  </h4>
                                </div>
                                <div id="collapse1s" class="panel-collapse collapse in">
                                  <ul class="list-group" style="color:skyblue;">
                                    <marquee direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                                      <!-- <li class="list-group-item">
                                          <span class="glyphicon glyphicon-chevron-right"> </span>
                                          <a href="#">Summer Courses</a> 
                                          <span class="label label-danger" style="font-size:70%;">new</span>
                                      </li>
                                      <li class="list-group-item">
                                          <span class="glyphicon glyphicon-chevron-right"> </span>
                                          <a href="#">Question Bank</a>
                                      </li>
                                      <li class="list-group-item">
                                          <span class="glyphicon glyphicon-chevron-right"> </span>
                                          <a href="#">Aptitude & Reasoning</a>
                                      </li> -->
                                      
                                        <p id="para1" style="text-align: justify; padding: 10px;">
                                          Symbol: h <br><br> Unit: m <br><br> Expected value: design is economical for less than 10 m height of earth <br><br> It is the difference between the level of earth on either side of the wall.
                                        </p>
                                      
                                    </marquee>  
                                  </ul>
                                  <div class="panel-footer panel-info"></div>
                                </div>
                              </div>
                            </div>
                              </div>
                            </div>

                    
                </div>
            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
            <br>
            <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle" style="margin-left: 2%;"><span class="glyphicon glyphicon-align-center" style=""></span></a>
            <div id="page-content-wrapper" >
              <h2 style="text-align: center;">Input Parameters</h2>
                <div class="row">
                        <div class="col-md-1 col-xs-0">
                        </div>
                        <div class="container">
                        <form id="sbc" method="post" class="col6 boxshadow">                                
                            <div class="col-xs-12 form-group">
                              <label>Input Height Of The Earth Retained (in m) :</label>
                              <span class="error">*</span>
                              <input required="1" value="5" id="v1" class="form-control input-sm" type="number"  autofocus>
                            </div>
                            <!-- <div class="col-xs-12 form-group">
                              <label>Input Height of Surcharge on Backfill (m) :</label>
                              <span class="error">*</span>
                              <input required="1" value="0" id="v2" onfocus="change1()" class="form-control input-sm" type="number">
                            </div> -->
                            <div class="col-xs-12 form-group">
                              <label>Input Soil Bearing Capacity (kN/m<sup>2</sup>) :</label>
                              <span class="error">*</span>
                              <input required="1" value="150" id="v3" onfocus="change2()" class="form-control input-sm" type="number">
                            </div>
                            <div class="col-xs-12 form-group">
                              <label>Input Unit Weight Of Soil &gamma; (kN/m<sup>3</sup>) :</label>
                              <span class="error">*</span>
                              <input required="1" value="18" id="v4" onfocus="change3()" class="form-control input-sm" type="number" name="sbc">
                            </div>
                            <div class="col-xs-12 form-group">
                              <label>Input Angle Of Shearing Resistance &empty; (in degrees) :</label>
                              <span class="error">*</span>
                              <input required="1" value="30" id="v5" onfocus="change4()" class="form-control input-sm" type="number" name="sbc">
                            </div>
                            <div class="col-xs-12 form-group">
                              <label>Angle Of Friction between Base of wall & foundation soil (δ) :</label>
                              <span class="error">*</span>
                              <input required="1" value="30" id="v6" onfocus="change5()" class="form-control input-sm" type="number" name="sbc">
                            </div>
                            <div class="col-xs-12 form-group">
                              <label>Unit Weight of masonary used in wall (kN/m<sup>3</sup>) :</label>
                              <span class="error">*</span>
                              <input required="1" value="20" id="v7" onfocus="change6()" class="form-control input-sm" type="number" name="sbc">
                            </div>
                            <div class="col-xs-12 form-group">
                              <label>Input Width of wall at top (m) :</label>
                              <span class="error">*</span>
                              <input required="1" value="1" id="v8" onfocus="change7()" class="form-control input-sm" type="number" name="sbc">
                            </div>
                            <div class="form-group">
                                <a href="result111.php" onclick="assignvalues(2)" class="btn btn-success" role="button">Next</a>
                                <!-- <a href="result11.php"><button
                                type="submit" onclick="assignvalues(1)" name="submit" class="btn btn-success"> -->
                                 <!--  Next
                                </button></a> -->
                            </div>
                        </form>
                        </div>
                        
                        <div class="col-md-1 col-xsm-0">
                        </div>
                        <!-- <br>
                        <br>
                        <hr>
                        
                        <div style="margin-top: 35%;">

                            <?php 
                                    // include '../xhomepage/footer.php';
                            ?> 
                        </div>
                 -->
            </div>
        <!-- /#page-content-wrapper -->

        </div>
    </div>
</div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../js/form.js" type="text/javascript"></script>
    <script src="../js/calculation.js" type="text/javascript"></script>
    <!-- <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- Menu Toggle Script -->
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
</body>

</html>

