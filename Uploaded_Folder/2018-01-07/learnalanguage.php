<!DOCTYPE html>
<html lang="en">
    <head>
        <title>COMEnCODE</title>
        <?php
            include 'includefiles.php';
        ?>
    </head>
    <body>

       <?php 
            include 'includevariables.php';
            include 'navbar.php';
        ?>


        <div class="container-fluid" style="display: block; padding: 0; ">    
            <div style="height: 1035px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding: 0px;" class="col-sm-8"> 
                    <h1 style="margin-left: 5%;">Learn a Language</h1>                    
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................
                    ................................................................................................................................................................................
                    ................................................................................................................................................................................</p>
                    <!-- <table class="table">
                        <thead>
                            <tr>
                                <th>Languages</th>
                            </tr>
                        </thead>
                         <tbody>
                            <tr>
                                <td><a href="#">C</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">C++</a></td>
                            </tr>
                            <tr>
                                <td><a href="#">JAVA</a></td>               
                            </tr>
                        </tbody>
                    </table> -->
                    <div style="padding-top: 3%;" class="list-group">
                        <a href="xlearnc/learnc.php" class="list-group-item list-group-item-danger">C</a>
                        <a href="#" class="list-group-item disabled">C++</a>
                        <a href="xlearnjava/learnjava.php" class="list-group-item active">JAVA</a>
                    </div>
                    <br>
                    <div style="margin-top: 35%;">
                        <?php 
                                include 'xhomepage/footer.php';
                        ?>
                    </div>
                </div>
                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>
    </body>
</html>
