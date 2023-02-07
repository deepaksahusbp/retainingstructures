<?php
    include '../../../dbconnect.php';
    $id = $_GET['id'];
    $sql="
        SELECT *
        FROM javaquestionbank
    ";
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>TutorialPoint</title>
        <?php
            include '../includefiles.php';
        ?>
    <style type="text/css">
        .programCode{
            font-size: 1.5em!important;
            float: left!important;
        }
        .donotcopy{
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
    </style>
</head>

<body onload="document.getElementById('menu-toggle').click()">
    
    <?php
            include '../includevariables.php';
            include '../../../navbar.php';
    ?>
       
    <div class="container-fluid" style="margin-top: 10px;">
        <div id="wrapper" class="row">

        <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #ffffff;">
                <div class="sidebar-nav" >
                    <br>
                    <?php 
                        $value='helloworld';
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
                        <?php 
                            $result=$conn->query($sql);
                            while($row = $result->fetch_assoc()){  
                                if($row['id']==$id){    ?>
                            <figure>
                                <figcaption><?php echo $row['question']; ?></figcaption>
                                <pre>
                                    <code class="programCode donotcopy">
        <?php echo $row['program']; ?>
        <!-- The indentation depends upon the start of php but not of echo -->
                                    </code>
                                </pre>
                            </figure>
                            <br>
                            <br>
                            <figure>
                                <figcaption>Output</figcaption>
                                <div class="text-center thumbnail" style="margin-top: 0;">
                                        <img src="images/<?php echo $row['output1'] ?>"> 
                                    <!-- <div style="width: 100%; margin-left: 0; margin:0; " class="well">
                                        Wohh it says we have an <kbd>Error</kbd>.
                                    </div> -->
                                </div>
                            </figure>
                        <?php
                                }
                            }
                        ?>
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

