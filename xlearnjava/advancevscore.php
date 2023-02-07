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
                        $value='advancevscore';
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
                                    <h1><code class="w3-codespan">&lt;Advance Vs Core Java&gt;</code></h1>
                            </div>
                            <br>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous disabled"><a href="#">Previous</a></li>
                               <li class="next"><a href="javaeditor.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="advancevscore.php" data-toggle="tooltip" data-placement="top" title="Adv Vs Core">1</a></li>
                                    <!-- <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li> -->
                                </ul>
                            </div>
                            <div>
                                <p>This is our first lecture on Java.  Today, we will learn how to write a simple Hello World program in java.</p>
                                <p>As per my knowledge whenever you are going to learn this java course somewhere you crossed across with two terms i.e. Core Java and Advanced Java.  Most of the time students are thinking that java is basically classified into two parts those are:</p>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-success">i. Core Java and 
                                    </li>
                                    <li class="list-group-item list-group-item-info">ii. Advanced Java.
                                    </li>
                                </ul>
                                <p>But it is true some extent from the point of view of experts who are sharing knowledge because core java is the base to learn advanced java.  In other words, we can say with the help of an example:
                                </p>
                                <!-- <div class="jumbotron" style="padding-top: 10px; padding-bottom: 10px;"><p>Suppose you want to learn how to ride a bike (with gear), then first of all you have to how to put first gear (with the help of clause, for that you are supposed to release the very slowly otherwise if you will release the gear instantly then definitely you will face with injuries along with your bike) and then only you can use any gear of your choice.</p>
                                </div> -->
                                <div class="well well-lg"><p>Suppose you want to learn how to ride a bike (with gear), then first of all you have to how to put first gear (with the help of clause, for that you are supposed to release the very slowly otherwise if you will release the gear instantly then definitely you will face with injuries along with your bike) and then only you can use any gear of your choice.</p></div>

                                <p>Like the above example on how to ride a bike, you are bound to know the basics of java which is core java and then only you can go for any advance topics in advanced java. So, this differentiation is only on the basis of learning.  But Oracle Corporation (Sun microsystem is the initial owner and Oracle acquired Sun microsystem in the year 2010 as shown in the following figure) classified java into three types:</p>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-danger">- JSE or JAVA SE(Java Standard Edition) 
                                    </li>
                                    <li class="list-group-item list-group-item-success">- JEE or JAVA EE(Java Enterprise Edition) 
                                    </li>
                                    <li class="list-group-item list-group-item-info">- JME or JAVA ME(Java Micro or Mobile Edition)
                                    </li>
                                </ul>
                                <br><br>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                    <img src="images/java1.png"> 
                                </div>
                                <br><br>
                                <p>Basically <mark>Core Java corresponds to JSE and Advanced Java Corresponds to JEE</mark>.  Initially JME was applicable for Mobile application and the day from which Android comes into picture of programming it dominates JME.  Because of this in java everyone is interested with JSE and JEE for developing different types of application (Small scale, medium scale and large scale application (regarding this we will discuss in later part of our course)) and for mobile application most of the users are interested to go for Android Development (Android development is easier if you have knowledge on core java, better if you know advanced java but it is not compulsory)
                                </p>
                            </div>
                            <br>
                            <br>
                            <ul style="margin-top: 0; margin-bottom: 0;" class="pager">
                               <li class="previous disabled"><a href="#">Previous</a></li>
                               <li class="next"><a href="javaeditor.php">Next</a></li>
                            </ul>
                            <div class="text-center">
                                <ul style="margin-top: 0;" class="pagination">
                                    <li class="active"><a href="advancevscore.php" data-toggle="tooltip" data-placement="top" title="Adv Vs Core">1</a></li>
                                </ul>
                            </div>
                             <!-- <div class="text-center thumbnail" style="margin-top: 0;">
                                <img src="images/helloworld.png"> 
                                <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                    Use <kbd>printf()</kbd> to o/p an info. / data.
                                </div>
                            </div> -->
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