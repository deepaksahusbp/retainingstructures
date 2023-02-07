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
                        $value='helloworld';
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
                                    <h1><code class="w3-codespan">&lt;Hello World&gt;</code></h1>
                            </div>
                            <br>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="javaeditor.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="helloworld.php" data-toggle="tooltip" data-placement="top" title="hello world">1</a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="jumbotron">
                                    <h1>Sorry!</h1>
                                    <h2>Page Under Construction!!</h2>
                                </div>
                            </div>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="javaeditor.php">Previous</a></li>
                               <li class="next"><a href="jdkinstall.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="helloworld.php" data-toggle="tooltip" data-placement="top" title="hello world">1</a></li>
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