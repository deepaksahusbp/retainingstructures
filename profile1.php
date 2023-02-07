<?php 
session_start();
$_SESSION['ACTIVE'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>About</title>
    <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
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
            <div id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="col-lg-10 col-sm-12"> 
<!--                            <img src="images/_MG_2398.jpg" width="100%" height="auto">-->
                    
                        <!-- Helping Hand Ends-->
                    
                        <!-- Profile Pictures Starts -->
                        <div class="row" style="text-align:center;">
                                <img src="images/Deepak%20Sahu1.png" style="margin:0 5% 0 0;" class="img-circle" width="15%" height="auto">
                                <img src="images/pkpsir1.jpg" class="img-circle" width="30%" height="auto">
                                <img src="images/subham1.jpg" style="margin:0 0 0 5%;" class="img-circle" width="15%" height="auto">
                        </div>
                        
                        <!-- Profile Pictures Ends -->
                    
                       <!-- Profile Starts-->
                        
                       <div style="padding:1% 4% 1% 4%;">
                       <ul class="nav nav-tabs">
                           <li class="active"><a data-toggle="tab" href="#home"><b style="font-size:150%;"><i>Acknowledgement</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu1"><b style="font-size:150%;"><i>Features</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu2"><b style="font-size:150%;"><i>Assumptions</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu3"><b style="font-size:150%;"><i>Vission</i></b></a></li>
                         </ul>

                         <div class="tab-content">
                             
                             <div id="home" class="tab-pane fade in active">
                             <h3><b style="color:orange;">Acknowledgement</b></h3>
                                <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-education" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">
                               We have taken efforts in this project. However it wouldn’t have been possible without the kind support and help of my guide. We would like to extend our sincere thanks to our guide.<br><br>

                                 We are highly indebted to <b>Prof.(Dr.) Pradip Kumar Pradhan, Department of Civil Engineering</b> for his guidance and constant supervision as well as for providing necessary information regarding this project and also for his support in completing the project & presentation.
                                 
                               We would like to express our special gratitude and thanks to our guide for giving us such attention and time.<br><br>
                                 We are grateful to <b>Prof. Sanjay Kumar Patro, Head of the Department, Department of Civil Engineering</b>, for extending the departmental facilities.
   
                                
                                 
                             </p>
                           </div>
                             
                           <div id="menu1" class="tab-pane fade">
<!--
                             <h3><b style="color:orange;">Our Philosophy</b></h3>
                                <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-globe" style="font-size:585%;"></span></a></div>
-->
<!--                               <br>-->
<!--                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">We act as free lancer and our philosophy is to help every student with the basic concepts and syntax and ideas of various languages. Our aim is to help the society and thus we are providing this facility free of cost.</p>-->
                               <div class="page-header"> 
                                    <h1>Main Features</h1>
                               </div>

                               <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-danger">Calculate earth pressure coefficients based on Rankine's theory and Coulomb's theory.</a>
                                    <a href="#" class="list-group-item list-group-item-warning">Calculate Lateral earth pressure forces acting on the wall.</a>
                                    <a href="#" class="list-group-item list-group-item-danger">Analysis of the wall to check various stability conditions and calculate Factor of safety.</a>
                                    <a href="#" class="list-group-item list-group-item-warning">Calculate horizontal and vertical acceleration coefficients in accordance with Indian standard code IS:1893.</a>
                                    <a href="#" class="list-group-item list-group-item-danger">Calculate seismic earth pressure coefficients in accordance with IS:1893, cl. 8.1.</a>
                                    <a href="#" class="list-group-item list-group-item-warning">Perform seismic analysis using pseudo-static method of earth pressure analysis.</a>
                                    <a href="#" class="list-group-item list-group-item-danger">Design of reinforcements for various elements of the wall.</a>
                                </div>
                               
                           </div>
                           <div id="menu2" class="tab-pane fade">
<!--
                             <h3><b style="color:orange;">Our Goals...</b></h3>
                               <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-education" style="font-size:585%;"></span></a></div>
-->
<!--                               <br>-->
<!--                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">Our aim is to provide our students with 24 x 7 online aid which can provide an opportunity of learning, at any time preferable by the student. Our team members are always with them. Any registered student can call the members available and can have their doubts cleared or can mail their doubts at the e-mail address provided in the contact details</p>-->
                               <div class="page-header"> 
                                   <h1>Basic Assumptions</h1>
                               </div>

                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-danger">A perfectly granular backfill is considered for the analysis, which means there is no cohesion in backfill soil.</a>
                                    <a href="#" class="list-group-item list-group-item-warning">Proper drainage is assumed to be provided by the designer so that no hydrostatic pressure is developed on the back of the wall.</a>
                                    <a href="#" class="list-group-item list-group-item-danger">It is assumed that a triangular pressure distribution is developed on the back of the wall due to backfill earth.</a>
                                    <a href="#" class="list-group-item list-group-item-warning">All earth pressure forces are considered to act on a vertical plane, which pass through the rear end of base slab.</a>
                                    <a href="#" class="list-group-item list-group-item-danger">The wall inclination and friction angle between wall and backfill, are assumed zero for this plane while calculating the earth pressure coefficients.</a>
                                </div>
                               
                           </div>
                           <div id="menu3" class="tab-pane fade">
                             <h3><b style="color:orange;">Future Prospects</b></h3>
                               <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-road" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">We are dreaming this site to become a productive site for the students. We are not only helping our students to learn the design but also providing a platform for the registered students to store their design for future use. We are also looking forward to include more designs of different retaining structures.</p>
                             </div>
                         </div>
                         </div>
                         <br><br>

                        
                       <!-- Profile Ends-->
                           
                        <?php 
                            include 'xhomepage/bottom1.php';
                        ?> 
                    
                        <?php 
                            include 'xhomepage/quote.php';
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