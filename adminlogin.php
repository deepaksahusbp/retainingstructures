<?php
	session_start();
	include 'dbconnect.php';
	//$usernameErr=$passwordErr="";

	if(isset($_POST['submit'])){

		$sql="
			SELECT *
			FROM javaquestionbank
			WHERE username='".$_POST['Username']."' 
			AND ( password='".$_POST['Password']."' )
		";
		$result=$conn->query($sql);
		//print_r($result);
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id']=$row['id'];
			$_SESSION['username']=$row['username'];
			$_SESSION['password']=$row['password'];
			echo "<script>self.location='admin.php';</script>";
			// echo "<script>alert('Logined Successfully')</script>";
		}
		else {
			// echo "Invalid UserName or Password";
			echo "<script>alert('Invalid UserName or Password')</script>";
		}

		//$row=$result->fetch_assoc();
		// if(empty($row['Username']))
		// 	$usernameErr="Invalid UserName";
		// if(empty($row['Password']))
		// 	$passwordErr="Invalid Password";
		// $Err=$usernameErr.$passwordErr;
		// if(!$Err){

		// }
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ComeLet'sCode</title>
        <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
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
            <div style="" class="row content">
                <div class="col-lg-2 col-sm-2">
                </div>
                <div style="padding: 0px;" class="col-lg-8 col-sm-8 ">
                    <div class="col-lg-3 col-sm-2" style=""></div>
                    <div class="col-lg-6 col-sm-8">
                        
                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT -->
                        
                        <form method="post" class="col6 boxshadow">
							<div class="form-group">
								
								<h2 style="text-align: center;">Admin-Login</h2>

								<label>UserName:</label>
								<span class="error">*</span>
								<input required="1" class="form-control" type="text" name="Username">
								<br>
								<label>Paseword:</label>
								<span class="error">*</span>
								<input required="1" class="form-control" type="password" name="Password">
								<br>
							</div>
							<div class="form-group">
								<button
								type="submit" name="submit" class="btn btn-success">
									Submit
								</button>
							</div>

						</form>
	      	        </div>
		            <div class="col-lg-3 col-sm-2" style=""></div>
	    	        </div>
                <div class="col-lg-2 col-sm-2">
                </div>
            </div>
        </div>

    </body>
</html>
