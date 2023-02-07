<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TutorialPoint</title>
        <?php
            include 'includefiles.php';
        ?>
        <link href="css/togglesidebar.css" rel="stylesheet">
    </head>
    <body>

        <div class="container-fluid" style="display: block; padding: 0; "> 
            <div class="row">
                <div class="col-xs-12">
                    <?php 
                        $loc='';        //since navbar is in the same folder.
                        $learnc='xlearnc/';  //to go to xlearnc folder
                        include 'navbar.php';
                    ?>
                </div>
            </div>
            <div style="height: 650px;" class="row content">
                <div style="height: 5.2px;" class="col-lg-12 col-xs-0">
                </div>

<!-- --------------------------SideBar Started------------------------------------------------- -->
                <div class="col-lg-3 col-xs-0" id="wrapper">
                    <!-- <div class="sidebar-nav-fixed affix"> -->
                        <!-- <div class="well"> -->
                        <br>
                        <!-- <div id="wrapper"> -->

                            <?php 
                                include 'xhomepage/profile.php';
                            ?>
                            <!-- <div id="page-content-wrapper">
                                <div class="container-fluid"> -->
                                    <!-- <h1>Simple Sidebar</h1> -->
                                    <!-- <p>This template has a responsive menu toggling system. The hmenu will   appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page   content will be pushed off canvas.</p>
                                    <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->
                                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle
                                    </a>
                                <!-- </div>
                            </div> -->
                        <!-- </div> -->
                        <!-- Wraper Closed -->
                    <!-- </div> -->
                </div>
<!-- --------------------------SideBar Closed------------------------------------------------- -->
                <div style="padding: 0px;" class="col-lg-7 col-xs-12"> 
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
                            include 'xhomepage/carousel.php';
                        ?>
                    
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

                </div>
                <div class="col-lg-2 col-xs-0 sidenav">

                </div>
            </div>
        </div>

        <div class="col-xs-12 " style="padding:0;">
            <footer style="opacity: 0.7;" class="container-fluid text-center">
                <?php 
                    include 'xhomepage/footer.php';
                ?>
            </footer>
            <footer style="opacity: 0.9;border-top: 1px solid black;" class="container-fluid text-center">
                <p>Footer</p>
            </footer>
        </div>
        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </body>
</html>
    
