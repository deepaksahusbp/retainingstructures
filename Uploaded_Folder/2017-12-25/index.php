<!DOCTYPE html>
<html lang="en">

<head>

    <title>TutorialPoint</title>
        <?php
            include 'includefiles.php';
        ?>
        <link href="css/togglesidebar.css" rel="stylesheet">

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
                      <div class="col-lg-9 col-sm-12"> 
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
                       
                      <div class="col-lg-3 col-md-0 col-sm-0" style="padding: 0;">
                          
                          <div class="container">
                              <div style="margin-right:80%;">
                              <h2 style="font-family:'sans-serif';color:#5E412F;">Date & Time</h2>
                              <marquee>
                                <p id="demo" style="font-family:'sans-serif';">
                                  <?php
                                        include 'xhomepage/dateandtime.php';
                                   ?>
                                </p>
                              </marquee>
                              </div>
                          </div>
                          
                          <div class="container" style="margin-right:80%">
                            <div style="margin-right:80%;">
                            <h2 style="font-family:'sans-serif';color:#5E412F;">News Headlines</h2><br>
                            <div class="panel-group col-lg-12" style="margin-right:80%;">
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#">News & Events</a>
                                  </h4>
                                </div>
                                <div id="collapse1s" class="panel-collapse collapse in">
                                  <ul class="list-group" style="color:skyblue;">
                                    <marquee direction="up">
                                      <li class="list-group-item">
                                          <a href="#">Summer Courses</a> 
                                          <span class="label label-danger" style="font-size:70%;">new</span>
                                      </li>
                                      <li class="list-group-item">
                                          <a href="#">Book Fair</a>
                                      </li>
                                      <li class="list-group-item">
                                          <a href="https://www.deepaksahusbp.blogspot.com">Blog Post</a> 
                                          <span class="label label-danger" style="font-size:70%;">new</span>
                                      </li>
                                    </marquee>  
                                  </ul>
                                  <div class="panel-footer panel-info"></div>
                                </div>
                              </div>
                            </div>
                              </div>
                            </div>
                          <div class="container" style="width: auto; height:auto;">
                              <div>
                              <h2 style="font-family:'sans-serif';color:#5E412F;">Visitor Number:</h2>
                              <div align=center><a href='https://www.counter12.com'><img style="margin-left:0%; margin-right:auto;" src='https://www.counter12.com/img-B83c6a04Z86Da6yZ-26.gif' width="30%" height="auto" border='0' alt='conter12'/></a><script type='text/javascript' src='https://www.counter12.com/ad.js?id=B83c6a04Z86Da6yZ'></script></div>
                              </div>
                          </div>


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
