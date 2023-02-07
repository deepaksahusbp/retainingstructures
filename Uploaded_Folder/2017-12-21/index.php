<!DOCTYPE html>
<html lang="en">

<head>

    <title>ComeLets_CODE</title>
        <?php
            include 'includefiles.php';
        ?>
        <link href="css/togglesidebar.css" rel="stylesheet">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4878475338474506",
    enable_page_level_ads: true
  });
</script>

</head>

<body onload="document.getElementById('menu-toggle').click()">
    
     <?php
         $loc='';        //since navbar is in the same folder.
         $learnc='xlearnc/';  //to go to xlearnc folder
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
            <div id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="col-lg-10 col-sm-12"> 
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
                        <?php 
                            include 'xhomepage/footer.php';
                        ?>

                      </div>
                      <div class="col-lg-2 col-sm-0 sidenav" style="padding: 0; width: 0;">

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
