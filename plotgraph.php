<?php 
session_start();
$_SESSION['ACTIVE'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plot Graph</title>
        <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
        <script type="text/javascript">
        window.onload = function() {
            var dps = []; //dataPoints. 

            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Accepting DataPoints from User Input"
                },
                data: [{
                    type: "line",
                    dataPoints: dps
                }]
            });

            function addDataPointsAndRender() {
                xValue = Number(document.getElementById("xValue").value);
                yValue = Number(document.getElementById("yValue").value);
                dps.push({
                    x: xValue,
                    y: yValue
                });
                chart.render();
            }

            var renderButton = document.getElementById("renderButton");
            renderButton.addEventListener("click", addDataPointsAndRender);
        }
    </script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </head>
    <body>

       <?php 
            include 'includevariables.php';
            include 'navbar.php';
        ?>


        <div class="container-fluid" style="display: block; padding: 0; ">    
            <div style="height: 1475px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>

                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding: 0px;" class="col-sm-8"> 
                    <!-- <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:400%;">Choose a Retaining Wall to Search</h1> -->
                    <p>.............................................................................................................................................................................
                    ................................................................................................................................................................................</p>                    
                    
                    
                    
                    X Value:
    <input id="xValue" type="number" step="any" placeholder="Enter X-Value"> Y Value:
    <input id="yValue" type="number" step="any" placeholder="Enter Y-Value">
    <button id="renderButton">Add DataPoint & Render</button>
    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;">
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
