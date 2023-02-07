<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TutorialPoint</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="fonts\font-awesome\css\font-awesome.min.css">
        <script src="bootstrap\js\jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>   
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container-fluid" style="display: block; padding: 0; ">    
<!--            <div style="height: 650px;" class="row content">-->
                <div class="row">
                <div class="col-sm-12">
                    <?php 
                        include 'navbar.php';
                    ?>
                </div>
                </div>
            <div style="height:auto;" class="row content">       
                <div class="col-sm-3 sidenav sidenav-fixed">
                    <br>
                    <?php 
                        include 'profile.php';
                    ?>
                </div>
                <div style="padding: 0px;" class="col-sm-6"> 
                    
                        <!---   <div class="container-fluid">
                        <div class="row content">
                            <div class="col-sm-12 " style="padding: 0;">
                                <!-- <div class="container-fluid" style="background: url(images/helpinghand1.jpg) no-repeat center center fixed; 
                                  -webkit-background-size: cover;-moz-background-size: cover;
                                  -o-background-size: cover;
                                  background-size: cover; width:100%; height: 100%;">
                                </div> -->
                                <!-- <img id="body_bg_img" src="images/helpinghand1.jpg"> -->
                                <!-- <div>
                                    <img src="images/helpinghand1.jpg" class="img-fluid" alt="Responsive image">
                                </div>-->
<!--
                        <div class="visible-lg myBack-lg">
                        </div>
                        <div class="visible-md myBack-md">
                        </div>
                        <div class="visible-sm myBack-sm">
                        </div>
                        <div class="visible-xs myBack-xs">
                        </div>
-->
                        <?php 
                            include 'carousel.php';
                        ?>
                    
                        <?php 
                            include 'members1.php';
                        ?>
                           
                        <?php 
                            include 'bottom1.php';
                        ?> 
                    
                        <?php 
                            include 'quote.php';
                        ?>
                    
                </div>
                <div class="col-sm-3 sidenav">
                </div>
            </div>
        
        
        
        <div class="col-sm-12" style="padding:0;">
            <footer style="opacity: 0.7;" class="container-fluid text-center">
                <?php 
                    include 'footer.php';
                ?>
            </footer>
            <footer style="opacity: 0.9;border-top: 1px solid black;" class="container-fluid text-center">
                &copy; Logik - Magik 2017 | All Rights Reserved | Privacy Policy | About Us
<!--                 &copy; Logik - Magik 2017 <span style="font-size:500%">.</span> All Rights Reserved | Privacy Policy | About Us-->
            </footer>
        </div>
        </div>
    </body>
</html>
