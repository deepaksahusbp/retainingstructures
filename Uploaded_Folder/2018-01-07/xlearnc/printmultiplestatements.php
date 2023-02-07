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
                        $value='helloworld';
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
                            <div style="margin-bottom: 0;" class="text-center page-header">
                                    <h1><code class="w3-codespan">&lt;Priny Multiple Statements&gt;</code></h1>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                <!-- <div class="thumbnail"> -->
                                    <img src="images/printmultiplestatements.png"> 
                                <!-- </div> -->
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            <!-- <pre style="width: 819px;">
                            
                            </pre> -->
                            </div>
                            <!-- <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div> --><!-- #IMAGE FRAME -->
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements1.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements2.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements3.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements4.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements5.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements6.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements7.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                            <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/printmultiplestatements8.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    <kbd>turboc/c++</kbd>
                                </div>
                            </div>
                    
                        </div>
                        <div class="col-md-1 col-xsm-0">
                        
                        </div>
                        <br>
                        <br>
                        <hr>
                        <?php 
                                include '../xhomepage/footer.php';
                        ?> 
            
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
