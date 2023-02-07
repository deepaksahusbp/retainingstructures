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
            include '../../navbar.php';
    ?>
       
    <div class="container-fluid" style="margin-top: 10px;">
        <div id="wrapper" class="row">

        <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #ffffff;">
                <div class="sidebar-nav" >
                    <br>
                    <?php 
                        $value='hcfnlcm';
                        include 'prosidenav.php';
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
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-success">
                                    1.  Write a program to accept a number and display prime factors.<br>
                                    Input : 24<br>
                                    Output : 2 2 2 3

                                </li>
                                <li class="list-group-item list-group-item-info">
                                    2.  Write a program to accept a number and display frequency prime factors.<br>
                                    Input : 24<br>
                                    Output : <br>
                                    2 => 3 times<br>
                                    3 => 1 time

                                </li>
                                <li class="list-group-item list-group-item-success">
                                    3.  Write a program to accept a number and display distinct prime factors.<br>
                                    Input : 24<br>
                                    Output : 2 and 3
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    4.  Write a program to accept two numbers and display HCF (Highest Common Factor) using division method.
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    5.  Write a program to accept any numbers (more than 2) and display HCF (Highest Common Factor)<br> using division method. (with array)
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    6.  Write a program to accept any numbers (more than 2) and display HCF (Highest Common Factor)<br> using division method. (without array)
                                </li>
                            </ul>
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

