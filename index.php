<?php 
session_start();
$_SESSION['ACTIVE'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Retaining Wall</title>
    <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
        <!-- <link rel="preload" href="css/togglesidebar.css" as="style">
        <link rel="preload" href="vendor/jquery/jquery.min.js" as="script">
        <link rel="preload" href="vendor/popper/popper.min.js" as="script"> -->
        <link href="css/togglesidebar.css" rel="stylesheet">

</head>

<body onload="document.getElementById('menu-toggle').click()">
    
     <?php
         include 'includevariables.php';
         include 'navbar.php';
     ?>
       
    <div class="container-fluid" style="margin-top: 10px;">
        <div id="wrapper" class="row">

        <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #ffffff;">
                <div class="sidebar-nav">
                    <br>
                    <?php 
                        include 'xhomepage/profile.php';
                    ?>
                </div>
            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
            <br>
            <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-align-center" style=""></span></a>
            <div style="" id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="col-lg-9 col-sm-12"> 
                        <?php 
                            include 'xhomepage/carousel.php';
                        ?>
                        <br>
                        <center>
                            <a href="learnalanguage.php">
                                <button type="button" class="btn btn-success btn-lg">
                                    <b>Start Design</b>               
                                </button>
                            </a>
                        </center>
                        <?php 
                            include 'xhomepage/jumbotron.php';
                        ?>    
                        
                        <?php 
                            include 'xhomepage/textual.php';
                        ?> 
                    
                        <?php 
                            include 'xhomepage/gallery.php';
                        ?> 
                    
                        <?php 
                            include 'xhomepage/bottom1.php';
                        ?> 
                    
                        <?php 
                            include 'xhomepage/quote.php';
                        ?>
                        <?php 
                            include 'xhomepage/footer.php';
                        ?>

                      </div>
                       
                      <div class="col-lg-3 col-sm-0 col-xs-0" style="padding: 0;">
                            <?php
                                include 'right_sidebar.php';
                            ?> 
                      </div>
                   </div>
                </div>
            </div>
        <!-- /#page-content-wrapper -->

        </div>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Menu Toggle Script -->
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
