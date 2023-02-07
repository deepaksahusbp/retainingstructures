<?php 
session_start();
$_SESSION['ACTIVE'] = 0;
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


        <div class="container-fluid" style="display: block; padding-left: 10px; padding-right: 10px; ">    
            <div style="height: 1475px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding-left: 20px; padding-right: 20px;" class="col-sm-8"> 
                    <!-- <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Choose a Retaining Wall to Search</h1> -->
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................</p>                    
                    
                    
                    
                    <?php 
                      include 'xhomepage/privacypolicy.php';
                    ?>
                    
                    <br>
                    <div style="margin-top: 2%;">
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
