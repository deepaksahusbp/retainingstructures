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
                               <li class="previous"><a href="jdkinstall.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall3.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li class="active"><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
                                </ul>
                            </div>
                            <br>
                            <br>
                            <div>
                                <p>Now question is how I will know your operating system is of which type.  For this follow the following step: </p>
                                <br>
                                <br>
                                <div class="thumbnail" style="margin-top: 0;">
                                    <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                        1.  In your Search the web and windows bar type <kbd>This PC.</kbd>
                                    </div>
                                    <img src="images/java3.png"> 
                                </div>
                                <br>
                                <br>
                                <div class="thumbnail" style="margin-top: 0;">
                                    <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                        2.  Now move your mouse pointer to This PC and 
                                        <kbd>right click</kbd> there which will display pop-menu.
                                    </div>
                                    <img src="images/java4.png"> 
                                </div>
                                <br>
                                <br>
                                <div class="thumbnail" style="margin-top: 0;">
                                    <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                        3.  Now, click on <kbd>properties</kbd>, which will display the following screen.
                                    </div>
                                    <img src="images/java5.png"> 
                                </div>
                                <br><br>
                                <div class="well well-md"><p>4. Now in the above screen you can see that System Type : 64 bit Operating System (don’t think whatever be written after that) is written and the operating system is also mentioned as Windows 10.</p></div>
                                <br><br>
                                <div class="well well-md"><p>5. And if it is 32 bit Operating System then you will get x64 instead of 64 bit Operating System.</p></div>

                            </div>

                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="jdkinstall.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall3.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li class="active"><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
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