<!DOCTYPE html>
<html lang="en">

<head>

    <title>TutorialPoint</title>
    <link rel="shortcut icon" type="../image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>

</head>

<body onload="document.getElementById('menu-toggle').click()">

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="background-color: #ffffff;">
            <div class="sidebar-nav">                
                <?php 
                        $value='howtoc';
                        include 'csidenav1.php';
                ?>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <br>
        <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-align-center" style=""></span></a>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <!-- <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a> -->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
