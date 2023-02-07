<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TutorialPoint</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <link rel="stylesheet" href="fonts\font-awesome\css\font-awesome.min.css">
        <script src="bootstrap\js\jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>   
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

       <?php 
            $loc='';        //since navbar is in the same folder.
            $learnc='xlearnc/';  //to go to xlearnc folder
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
                        <a href="#" class="list-group-item disabled">JAVA</a>
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
