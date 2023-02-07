<!DOCTYPE html>
<html lang="en">

<head>

    <title>TutorialPoint</title>
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
                    <?php 
                        $value='learnc';
                        include 'csidenav.php';
                    ?>
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
                            <h1 style="font-size:250px;">C</h1>
                                <blockquote class="blockquote">
                                    <p>.............................................................................................................................................................................   
                                     </p>
                                </blockquote>
                                <blockquote class="blockquote-reverse">
                                    <p>The only way to learn a new programming language is by writing programs in it.
                                    </p>
                                    <footer style="background-color: white;">By Dennis Ritchie</footer>
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

