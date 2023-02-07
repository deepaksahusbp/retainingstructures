<?php
	session_start();
	include 'dbconnect.php';
	$emailErr="";
	if(isset($_POST['submit'])){
		// echo "<script>alert('Hello')</script>";
		if(!empty($emailErr)){
			$emailErr="Email Id Required";
			// echo "<script>alert('Inside 1st if')</script>";
		}
		else{
			// echo "<script>alert('Inside 1st else')</script>";          
			$sql="
				SELECT email
				FROM stud
				WHERE email='".$_POST['Email']."'
			";
			$result=$conn->query($sql);
			if($result->num_rows>0){
				
				$row=$result->fetch_assoc();
				$_SESSION['ID']=$row['id'];
				echo "<script>alert('Email Varified')</script>";
				echo"<script>self.location='forgetPassword_set.php';</script>";
				
			}
			else{
				$emailErr="Invalid Email";
				echo "<script>alert('UnSuccess')</script>";
			}
		}
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
                        
                        <h2 style="text-align: center;">Forget Password</h2>

                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT -->
                        
                        <form method="post">
							<div class="form-group">
								<label>EmailID:</label>
								<span class="error">* <?php echo $emailErr;?></span>
								<input class="form-control" type="text" name="Email">
							</div>
							<div class="form-group" style="text-align: center;">
                                <button 
                                type="submit" name="submit" class="btn" style="color:black; 
                                margin-bottom:5%; margin-top:2%;">
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
