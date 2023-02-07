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
                               <li class="previous"><a href="helloworld.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall2.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
                                </ul>
                            </div>

                            <div>
                                <p>Upto this we know that to write a simple java program like Hello World, we need an operating system i.e. Windows 10 and an editor i.e. Notepad.  But which software we have to execute and run java program and it is JDK (Java Development Kit).</p>       
                                <p>Now, we know that JDK is required to write java program and it is available with different versions and the latest one is JDK 9.</p>
                                <p>To get JDK, you have to go to Google and there you have to type JDK download.</p>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java2.png"> 
                                </div>
                                <p>Now, from the above image you can easily know that JDK is available for <mark>Windows(10, 7 etc.), Ubuntu</mark>(Like ICE-Cream flavaours vanilla, chocolate etc. Ubuntu is one of the flavour of Linux and  other flavour of Linux are Mandrake, SuSe , Knoppix etc.). JDK is also for netbeans , eclipse. </p>
                                <p>But one question must be raised in your mind i.e. what is this 64 bit and 32 bit.  Now let me explain what are these ?  These are the versions of windows operating system.  It means windows operating system are available in two different versions i.e. <mark>32 bit and 64 bit</mark>.
                                </p>

                            </div>

                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="helloworld.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall2.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
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