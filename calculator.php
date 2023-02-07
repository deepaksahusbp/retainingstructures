<?php 
session_start();
$_SESSION['ACTIVE'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Scientific Calculator
        </title>
    
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
            
            <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-align-center" style=""></span></a>
            <div style="" id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="row">
                      <div class="col-lg-12 col-sm-12"> 
                        <div class="embedblock" style="height: 600px;">
                            <script src="https://math.tools/extensions/embed/v1/sc.js?v1"></script>
                            <script>
                            MathToolsScCalc.Embed.render({context: 'calculator', toolId: 'scientific-calculator'});
                            </script>
                        <noscript>Please enable JavaScript to view the <a href="https://math.tools/scientific-calculator"> scientific calculator powered by math tools.</a></noscript>
                        <div class="light-text" style="text-decoration: none; color:#ccc; z-index: 999; text-align: left; padding-left: 20px; margin-top: -20px;"><a href="https://math.tools/scientific-calculator" title="Powered by scientific calculator math.tools" style="text-decoration: none; color:#ccc; ">math.tools</a></div>
                        </div>
                        </div>


                        

                      </div>
                      <div class="row">
                          <?php 
                            include 'xhomepage/footer.php';
                            ?>
                      </div>
                       
                      <!-- <div class="col-lg-3 col-sm-0 col-xs-0" style="padding: 0;">
                            <?php
                                //include 'right_sidebar.php';
                            ?> 
                      </div> -->
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
