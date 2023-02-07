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
                               <li class="previous"><a href="jdkinstall2.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall4.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li class="active"><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
                                    <li><a href="jdkinstall4.php" data-toggle="tooltip" data-placement="top" title="jdk install">4</a></li>
                                </ul>
                            </div>
                            <br>
                            <br>
                            <div>
                                <p>Now depending on your operating system type you have to download JDK.  So, go to google and type JDK download ( as shown in the 1st figure) and press enter. So, you will get the following screen.</p>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java6.png"> 
                                </div>
                                <br><br>
                                <p>From the above screen you can know that JAVA SE Development Kit 8 and 9 are available (We will use <mark>JDK 9</mark> and some situations we will go for <mark>JDK 8</mark> and <mark>JDK 7</mark> if required for clear understanding on different feature but as a beginner it is not possible right now, so please follow the instructions as mentioned here with). But without choosing any one of the list directly click on Java SE – Download | Oracle Technology Network | Oracle (Now the owner of JAVA is Oracle but earlier it was SUN Microsystem and Oracle acquired Sun Microsystem in the year 2010 as mentioned in the following figure.  So, to know the history of JAVA, visit the site as mentioned in the figure:)</p>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java7.png"> 
                                </div>
                                <br><br>
                                <p>So, you can read the history on your free time.  Now, let us go to our previous work.  So, I think you have already clicked on the site as mentioned earlier i.e. <mark>Java SE – Download | Oracle Technology Network | Oracle</mark> and you will get the following page as mentioned in the figure.</p>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java8.png"> 
                                </div>
                                <br><br>
                            </div>

                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="jdkinstall2.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall4.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li><a href="jdkinstall.php" data-toggle="tooltip" data-placement="top" title="jdk download">1</a></li>
                                    <li><a href="jdkinstall2.php" data-toggle="tooltip" data-placement="top" title="window's version">2</a></li>
                                    <li class="active"><a href="jdkinstall3.php" data-toggle="tooltip" data-placement="top" title="jdk install">3</a></li>
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