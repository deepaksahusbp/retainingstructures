<?php
  //start the session
  session_start();
  if (!$_SESSION['ACTIVE']) {
    echo "<script>self.location='choose.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Proportioning</title>
        <link rel="shortcut icon" type="image/png" href="../images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
    </head>
    <body>
    	
		<!-- Window.alert(<?php	echo $_SESSION["HOSR"];?>); -->
       <?php 
            include 'includevariables.php';
            include '../navbar.php';
            //include 'navbar.php';
        ?>
        <!-- <?php $_SESSION["HOSR"]=$_POST["heightofsoilretained"];?>; --> 

        <div class="container" style="display: block; padding: 0; ">    
            <div style="height: 425px;" class="row content">
                    
                    <p>.............................................................................................................................................................................
                    </p>
            	<h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Proportioning</h1>
                    <p>.............................................................................................................................................................................
                    </p>
                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding: 0px;" class="col-sm-6"> 
                    <!-- <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Proportioning</h1>
                    <p>.............................................................................................................................................................................
                    </p> -->
                    <img src="../images/2.jpg" class="img-responsive" width="600px" height="350px" style="margin-left: auto;margin-right: auto;">
                    
                    <br>
                    
                </div>
                <div class="col-sm-6 sidenav">
        <fieldset class="xyz">
			<legend><b>Personal Information</b></legend><br>
			<div class="col-sm-6">
				Height Of Soil Rrtained h (m) :<br>
				<input type="text" name="hosr" id="ans1" value="<?php echo $_SESSION['HRS'];?>"><br>
				Surcharge S (m) :<br>
				<input type="text" name="Surcharge" value="<?php echo $_SESSION['SR'];?>"/><br>
				Depth Of Foundation Df (m) :<br>
				<input type="text" name="Df" value="<?php echo $_SESSION['DOF'];?>"/><br>
				Length Of Base L.b. (m) :<br>
				<input type="text" name="Lb" value="<?php echo $_SESSION['LOB'];?>"/><br>
				Toe Projection Tp (m) :<br>
				<input type="text" name="Tp" value="<?php echo $_SESSION['TOP'];?>"/><br>
				Stem Width S.W. (mm) :<br>
				<input type="text" name="SW" value="<?php echo $_SESSION['SW'];?>"/><br>
			</div>
				
			<div class="col-sm-6">
				Length Of Heel L.h. (m) :<br>
				<input type="text" name="hosr" value="<?php echo $_SESSION['LOH'];?>"><br>
				Lateral Force F1 (kN/m) :<br>
				<input type="text" name="Surcharge" value="<?php echo $_SESSION['LFF1'];?>"/><br>
				Lateral Force F2 (kN/m) :<br>
				<input type="text" name="Df" value="<?php echo $_SESSION['LFF2'];?>"/><br>
				Force P1 (kN) :<br>
				<input type="text" name="Lb" value="<?php echo $_SESSION['FP1'];?>"/><br>
				Force P2 (kN) :<br>
				<input type="text" name="Tp" value="<?php echo $_SESSION['FP2'];?>"/><br>
				<!-- Stem Width S.W. (mm) :<br>
				<input type="text" name="SW" value=""/><br> -->
				<a href="result2dummy.php">
				<input type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="alert('LOADING PRESSURE DISTRIBUTION')"ClickMe!/>
				</a>
				<button type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="window.print();">
                Print
                </button>

			</div>
				<br><br>
				
		</fieldset>
                </div>
                
            </div>

            

        </div>

        <!-- <div style="margin-top: 15%;">
                        <?php 
                                //include '../xhomepage/footer.php';
                        ?>
                    </div> -->
        <script src="../js/calculation.js" type="text/javascript"></script>

    	

    </body>
</html>
