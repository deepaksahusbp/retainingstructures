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
                    <img src="../images/MOD2.png" class="img-responsive" width="600px" height="350px" style="margin-left: auto;margin-right: auto;">
                    
                    <br>
                    
                </div>
                <div class="col-sm-6 sidenav">
        <fieldset class="xyz">
			<legend><b>Design Results </b></legend><br>
			<div class="col-sm-6">
				Height Of Soil Rrtained h (m) :<br>
				<input type="text" name="hosr" id="ans1" value="<?php echo $_SESSION['HRS'];?>"><br>
				<!-- Surcharge S (m) :<br>
				<input type="text" name="Surcharge" value="<?php echo $_SESSION['SR'];?>"/><br> -->
				Depth Of Foundation Df (m) :<br>
				<input type="text" name="Df" value="<?php echo $_SESSION['DOF'];?>"/><br>
				Length Of Base b (m) :<br>
				<input type="text" name="Lb" value="<?php echo $_SESSION['LOB'];?>"/><br>
				Top Width b1 (m) :<br>
				<input type="text" name="TW" value="<?php echo $_SESSION['SR'];?>"/><br>
				FOS<sub>sliding</sub> :<br>
				<input type="text" name="SW" value="<?php echo $_SESSION['FOSSLIDING'];?>"/><br>
			</div>
				
			<div class="col-sm-6">
				P<sub>max</sub> (kN/m<sup>2</sup>) :<br>
				<input type="text" name="hosr" value="<?php echo $_SESSION['PMAX'];?>"><br>
				P<sub>min</sub> (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Surcharge" value="<?php echo $_SESSION['PMIN'];?>"/><br>
                Soil Bearing Capacity (kN/m<sup>2</sup>) :<br>
                <input type="text" name="Lb" value="<?php echo $_SESSION['SBC'];?>"/><br>
				Lateral Force LF (kN/m) :<br>
				<input type="text" name="Df" value="<?php echo $_SESSION['LFF2'];?>"/><br>
				Force Pa (kN) :<br>
				<input type="text" name="Tp" value="<?php echo $_SESSION['FP2'];?>"/><br>
				<!-- Stem Width S.W. (mm) :<br>
				<input type="text" name="SW" value=""/><br> -->
				<!-- <a href="insert.php">
                <input type="submit" name="Submit" style="margin-top: 15px" value="Save In Database" onclick="alert('SAVING IN DATABASE FOR FUTURE USE')"/>
                </a> -->
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
