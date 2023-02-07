<?php 
session_start();
$_SESSION['ACTIVE'] = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Counterfort Wall</title>
    <link rel="shortcut icon" type="image/png" href="../images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
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
                                      <p style="text-align: justify; padding: 10px;">
                                      A Gravity Wall is of plain concrete and provides stability by its weight.<br><br> The retained material exerts a push on structure and this tends to overturn and slide it.<br><br> The weight of the retaining wall is of considerable significance in achieving and maintaining stability of entire system.
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
                <div class="row">
                        <div class="col-md-1 col-xsm-0">
                        </div>

                        <div class="col-md-10 col-xsm-12"> 
                            <!-- <h1 style="font-size:250px;">C</h1> -->
                            <img src="../images/gravity1.jpg" class="img-responsive" width="500px" height="350px" style="margin-left: auto;margin-right: auto;">
                                <blockquote class="blockquote">
                                    <p>.............................................................................................................................................................................   
                                     </p>
                                </blockquote>
                                <blockquote class="blockquote-reverse">
                                    <p>
                                    A Gravity Wall is of plain concrete and provides stability by its weight. The retained material exerts a push on structure and this tends to overturn and slide it. The weight of the retaining wall is of considerable significance in achieving and maintaining stability of entire system.
                                    </p>
                                    <center>
                                      <a href="input3.php">
                                      <button type="button" class="btn btn-success btn-lg">
                                        <b>Proceed to Design</b>               
                                      </button>
                                    </a>
                                  </center>
                                    <!-- <footer style="background-color: white;">By Dennis Ritchie</footer> -->
                                </blockquote>        
                                                    
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

