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
        <title>Load/Pressure</title>
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
            	<h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Load Distribution</h1>
                    <p>.............................................................................................................................................................................
                    </p>
                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding: 0px;" class="col-sm-6"> 
                    <!-- <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Proportioning</h1>
                    <p>.............................................................................................................................................................................
                    </p> -->
                    <img src="../images/3.jpg" class="img-responsive" width="600px" height="350px" style="margin-left: auto;margin-right: auto;">
                    
                    <br>
                    
                </div>
                <div class="col-sm-6 sidenav">
        <fieldset class="xyz">
			<legend><b>Pressure Distribution and Stability Checks</b></legend><br>
			<div class="col-sm-6">
				UDL (kN/m):<br>
				<input type="text" name="udl" id="udl" value="<?php echo $_SESSION['UDL'];?>" readonly><br>
				Pmax (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Pmax" value="<?php echo $_SESSION['PMAX'];?>" readonly /><br>
				Pmin (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Pmin" value="<?php echo $_SESSION['PMIN'];?>" readonly/><br>
				Pressure at B (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Pb" value="<?php echo $_SESSION['PB'];?>" readonly/><br>
				Pressure at C (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Pc" value="<?php echo $_SESSION['PC'];?>" readonly/><br>
				Pcritical (kN/m<sup>2</sup>) :<br>
				<input type="text" name="Pcritical" value="<?php echo $_SESSION['PCRITICAL'];?>" readonly/><br>
			</div>
				
			<div class="col-sm-6">
				Factor Of Safety (Overturning) :<br>
                <input type="text" name="Lh" value="<?php echo $_SESSION['FOSOM'];?>" readonly><br>
                Factor Of Safety (Sliding) :<br>
                <input type="text" name="Tp" value="<?php echo $_SESSION['FOSSLIDING'];?>" readonly/><br>
				Width Of Shear Key (mm) :<br>
				<input type="text" name="a" value="<?php echo $_SESSION['A'];?>" readonly/><br>
				Height Of Shear Key (mm) :<br>
				<input type="text" name="a" value="<?php echo $_SESSION['A'];?>" readonly/><br>
				Critical Distance d (mm) :<br>
				<input type="text" name="d" value="<?php echo $_SESSION['D'];?>" readonly/><br>
				<!-- Stem Width S.W. (mm) :<br>
				<input type="text" name="SW" value=""/><br> -->
                <a href="result3.php">
				<input type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="alert('SHOWING DETAILING')"ClickMe!/>
                </a>

                <button type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="window.print();">
                Print
                </button>
                
                <br><br>

			</div>

				
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
