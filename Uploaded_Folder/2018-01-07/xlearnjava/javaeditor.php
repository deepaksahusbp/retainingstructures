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
                        $value='javaeditor';
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
                                    <h1><code class="w3-codespan">&lt;Java Editors&gt;</code></h1>
                            </div>
                            <br>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="javaeditor.php">Previous</a></li>
                               <li class="next"><a href="helloworld.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="advancevscore.php" data-toggle="tooltip" data-placement="top" title="Java Editors">1</a></li>
                                </ul>
                            </div>
                            <div>
                                <p>But before moving to write the actual program, we must have some basic knowledge like,</p>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">1.Why we need to write the program?
                                    </li>
                                    <li class="list-group-item list-group-item-success">2.Where we have to write the program? etc.
                                    </li>
                                </ul>
                                <p>So, In order to write a java program we need an operating system may be <mark>Windows, Linux, Mac.</mark> etc. 
                                </p>
                                <p>Here, we are going to discuss all our programs on the basis of Windows Operating System (Windows 10, you can go for Windows 7 or Windows 8).</p>
                                <p>Next, in order to write the program, we need an editor like,</p>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-danger">-    Notepad
                                    </li>
                                    <li class="list-group-item list-group-item-success">-   Notepad++ 
                                    </li>
                                    <li class="list-group-item list-group-item-info">-  Edit Plus etc.
                                    </li>
                                </ul>
                                <p>Besides this we can also go for IDE (Integrated Development Environment) like,</p>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">-   NetBeans
                                    </li>
                                    <li class="list-group-item list-group-item-success">-   Eclipse, etc.
                                    </li>
                                </ul>
                                <p>Here, <mark>we are going to discuss initially with notepad</mark>, then after having acquainted with Notepad, we will discuss how to write program using notepad++, Edit Plus, NetBeans, Eclipse etc.  </p>
                                <p>Now, here a question comes into mind that why we are starting with notepad and the one which we mentioned above.  So, to get this answer, you must have the knowledge on <mark> “How to write program using notepad ?”.
                                </mark>  This message herewith we have mentioned because we are assuming that you are new to java.</p>
                                <br><br>
                                <div class="alert alert-warning alert-dismissable">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <strong>Recommended!</strong> If you want to get a brief on java, please follow our advice and then you can make complain that you are the one who is unable to learn java from this site and we will take care to improve ourselves. So, your comments are highly required and we are eagerly waiting for this.
                                </div>
                            </div>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous"><a href="javaeditor.php">Previous</a></li>
                               <li class="next"><a href="helloworld.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="advancevscore.php" data-toggle="tooltip" data-placement="top" title="Java Editors">1</a></li>
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