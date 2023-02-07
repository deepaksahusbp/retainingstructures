<?php
  //start the session
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Retaining Wall</title>
    <style type="text/css">
        .xyz{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script>
        function bigImg(x) {
            x.style.height = "90px";
            x.style.width = "250px";
        }

        function normalImg(x) {
            x.style.height = "75px";
            x.style.width = "200px";
        }
    </script>
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
                        
                        <form action="#" method="get">
                        <fieldset class="xyz">
                            <!-- <legend>Choose An Option</legend> -->
                            <div class="page-header">
                                <h1 style="text-align: center;">Choose An Option</h1>      
                            </div>
                            <center><img src="images/mobile.png" width="200px" height="200px"></center>
                            <br>
                            <center><h1><?php echo $_SESSION['TXT'] ?></h1></center>
                            <center><h2 style="color:blue"><?php echo $_SESSION['TXT1'] ?></h2><h2 style="color:lightgreen"><?php echo $_SESSION['TXT2'] ?></h2>
                            </center>
        
                            <center><a href="logintodatabase.php"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="images/login_Icon.png" width="200px" height="75px"></a></center>
                            <br>
                            <!-- <center><a href="signuptodatabase.php"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src="images/Sign_Up_Icon.png" width="200px" height="75px"></a></center> -->
                            <br>
                        </fieldset>
                        </form>
                        
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
