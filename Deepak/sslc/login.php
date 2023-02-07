<?php
	session_start();
	include 'dbconnect.php';
	//$usernameErr=$passwordErr="";

	if(isset($_POST['submit'])){

		$sql="
			SELECT *
			FROM stud
			WHERE userName='".$_POST['Username']."' 
			AND ( Password='".md5($_POST['Password'])."' )
		";
		$result=$conn->query($sql);
		//print_r($result);
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id']=$row['Sl_No'];
			// echo "<script>self.location='profile.php';</script>";
			echo "<script>alert('Logined Successfully')</script>";

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
            include 'navbar.php';
        ?>

        <div class="container-fluid" style="display: block; padding: 0; ">    
            <div style="height: 650px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>
                <div style="padding: 0px;" class="col-sm-8">
                    <div class="col-sm-3" style="height:650px;"></div>
                    <div class="col-md-6 col6 boxshadow">
                        
                        <h2 style="text-align: center;">LOGIN</h2>

                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT -->
                        
                        <form method="post">
							<div class="form-group">
								<label>UserName:</label>
								<span class="error">*</span>
								<input class="form-control" type="text" name="Username">
							</div>
							<br>
							<div class="form-group">
								<label>Paseword:</label>
								<span class="error">*</span>
								<input class="form-control" type="text" name="Password">
							</div>
							<a href="ForgotPassword.php">Forget pasword?</a>
							<div class="form-group">
								<button
								type="submit" name="submit" class="btn btn-success" 
								style=" float:right; color:black; margin-bottom:25%;
								margin-top:10%;">
									Submit
								</button>
							</div>
						</form>
	      	        </div>
		            <div class="col-sm-3" style="height:650px;"></div>
	    	        </div>
                <div class="col-sm-2 sidenav">
                </div>
            </div>
        </div>

        <footer style="opacity: 0.3;" class="container-fluid text-center">
            <p>Footer</p> 
        </footer>
    </body>
</html>
