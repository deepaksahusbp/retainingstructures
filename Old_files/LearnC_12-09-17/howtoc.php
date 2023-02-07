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
        <link rel="stylesheet" type="text/css" href="css/tutorial.css">
    </head>
    <body>

       <?php 
            include 'navbar.php';
        ?>


        <div class="container-fluid" style="display: block; padding: 0; ">    
            <div style="height: 650px;" class="row content">
                <?php
                    $value='howtoc';
                    include 'csidenav.php';
                ?>
                <div class="col-sm-8"> 
                    
                </div>
                <!-- <div class="col-sm-2 sidenav">
                </div> -->
            </div>
        </div>

        <footer style="opacity: 0.3;" class="container-fluid text-center">
            <p>Footer</p> 
        </footer>
    </body>
</html>
