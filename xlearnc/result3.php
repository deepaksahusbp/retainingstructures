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
        <title>Detailing</title>
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
            <div style="height: 475px;" class="row content">
                    
                    <p>.............................................................................................................................................................................
                    </p>
            	<h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Detailing Of Reinforcement</h1>
                    <p>.............................................................................................................................................................................
                    </p>
                <!-- Idea-Keep a Background Image about prgramming languages -->

                <div style="padding: 0px;" class="col-sm-6"> 
                    <!-- <h1 style="margin-left: 5%; font-family:'sans-serif';color:#5E412F; text-align: center; font-size:200%;">Proportioning</h1>
                    <p>.............................................................................................................................................................................
                    </p> -->
                    <img src="../images/1.png" class="img-responsive" width="600px" height="400px" style="margin-left: auto;margin-right: auto;">
                    
                    <br>
                    
                </div>
                <div class="col-sm-6 sidenav">
        <fieldset class="xyz">
			<legend><b>C/C SPACING OF BARS</b></legend><br>
			<div class="col-sm-6">
				S1 (mm) [10 mm bar used] :<br>
				<input type="text" name="s1" value="<?php echo $_SESSION['S1'];?>" readonly><br>
				S2 (mm) [8 mm bar used] :<br>
				<input type="text" name="s2" value="<?php echo $_SESSION['S2'];?>" readonly /><br>
				S3 (mm) [8 mm bar used] :<br>
				<input type="text" name="s3" value="<?php echo $_SESSION['S3'];?>" readonly/><br>
				S4 (mm) [25 mm bar used] :<br>
				<input type="text" name="s4" value="<?php echo $_SESSION['S4'];?>" readonly/><br>
				S5 (mm) [18 mm bar used] :<br>
				<input type="text" name="s5" value="<?php echo $_SESSION['S5'];?>" readonly/><br>
				S6 (mm) [16 mm bar used] :<br>
				<input type="text" name="s6" value="<?php echo $_SESSION['S6'];?>" readonly/><br>
                S7 (mm) [10 mm bar used] :<br>
                <input type="text" name="s7" value="<?php echo $_SESSION['S7'];?>" readonly/><br>
                <!-- <a href="result4.php">
                <input type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="alert('SHOWING DETAILING OF COUNTERFORT')"ClickMe!/>
                </a> -->
                <button type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="window.print();">
                Print
                </button>


			</div>
            <a href="insert.php">
                <input type="submit" name="Submit" style="margin-top: 15px" value="Save In Database" onclick="alert('SAVING IN DATABASE FOR FUTURE USE')"/>
            </a>
            <a href="../learnalanguage.php">
                <input type="submit" name="Submit" style="margin-top: 15px" value="New Design" onclick="alert('DESIGN NEW RETAINING WALL')"/>
            </a>
            <br><br>
            <center>
                <a href="../message_module.php">
                    <button type="button" class="btn btn-danger btn-lg">
                      <b>Mail my Results</b>               
                    </button>
                </a>
            </center>
				
			<!-- <div class="col-sm-6">
				S1 (mm) :<br>
				<input type="text" name="Lh" value="<?php echo $_SESSION['FOSOM'];?>" readonly><br>
				S2 (mm) :<br>
				<input type="text" name="Tp" value="<?php echo $_SESSION['FOSSLIDING'];?>" readonly/><br>
				S3 (mm) :<br>
				<input type="text" name="a" value="<?php echo $_SESSION['A'];?>" readonly/><br>
				S4 (mm) :<br>
				<input type="text" name="a" value="<?php echo $_SESSION['A'];?>" readonly/><br>
				S5 (mm) :<br>
				<input type="text" name="d" value="<?php echo $_SESSION['D'];?>" readonly/><br> -->
				<!-- Stem Width S.W. (mm) :<br>
				<input type="text" name="SW" value=""/><br> -->
				<!-- <button type="submit" name="Submit" style="margin-top: 15px" value="Submit" onclick="window.print();">
                Print
                </button>

			</div> -->
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
