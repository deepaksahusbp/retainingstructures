<!DOCTYPE html>
<html lang="en">

<head>

    <title>Come Let's Code</title>
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
                        $value='jdkinstall';
                        include 'javasidenav.php';
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
                                    <h1><code class="w3-codespan">&lt;jdk install&gt;</code></h1>
                            </div>
                            <br>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="jdkinstall3.php">Previous</a></li>
                               <li class="next disabled"><a href="xyz.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li class="active"><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
                                </ul>
                            </div>
                            <br>
                            <br>
                            <div>
                                <p>Now click on Java Platform (JDK) 9 and you will get the following page i.e. JDK available for different Operating System (Remember JDK 9 is available for 64 bit operating system only).</p>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java9.png"> 
                                </div>
                                <br><br>
                                <p>Already somewhere I have mentioned we will work with JDK 8 . So, whether you are going to work with JDK 9 or JDK 1.8 it doesn’t matter but we will first start with JDK 1.8 and then we will go for JDK 8. But my advice is to test the programs in both JDK 8 and JDK 9.</p>
                                <div class="alert alert-warning alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong>Recommended!</strong> And if you will go through the lesson completing one by one you will easily know how to work with more than one JDK version at a time using the same program may be Hello World(have patience for that because no one is going to be a programmer on a single day)
                                </div>
                                <p>If your operating system is not of 64 bit then download JDK 8 i.e. go to jdk download page and click on JDK SE Development kit 8, then you will get the following screen:</p>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java10.png"> 
                                </div>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java11.png"> 
                                </div>
                                <br><br>
                            </div>

                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="jdkinstall3.php">Previous</a></li>
                               <li class="next disabled"><a href="xyz.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li class="active"><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
                                </ul>
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
                </div><!-- row -->
            </div><!-- /#page-content-wrapper -->
        </div><!-- /#wrapper -->
    </div><!-- container fluid -->

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