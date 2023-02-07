<?php
    session_start();
	include 'dbconnect.php';
	$passwordErr=$cpasswordErr="";
    
    if(isset($_POST['submit'])){
    
        if (empty($_POST["Password"]))
            $passwordErr = "Password is required";
        if (empty($_POST["CPassword"]) || strcmp($_POST["CPassword"],$_POST["Password"]))
            $cpasswordErr = "Incorrect Pasword";
 
        $Err=$passwordErr.$cpasswordErr;

        if(empty($Err)){
            echo $_SESSION['id'];
            $sql="
                UPDATE stud SET
                password='".($_POST['Password'])."'
                WHERE id='".$_SESSION['id']."' 
            ";
            //print_r('$result');
            if(mysqli_query($conn,$sql))
            {
                //print_r($sql);
                echo "<script>alert('PassWord Reseted')</script>"; 
                include 'endsession.php';                               
            }
            else
                echo "<script>alert('Password Not Changed)</script>";
        }
        if(!empty($Err))
            echo "<script>alert('Password Not Changed')</script>";
    }
    // echo $oldpasswordErr;
    // echo $passwordErr;
    // echo $cpasswordErr;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TutorialPoint</title>
        <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
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
            <div style="height: 650px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>
                <div style="padding: 0px;" class="col-sm-8">
                    <div class="col-sm-3" style="height:650px;"></div>
                    <div class="col-md-6 col6 boxshadow">
                        
                        <h2 style="text-align: center;">Set Password</h2>

                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT --><!-- Done correcting -->
                        
                        <form method="post">
	                        <div class="form-group">
                                <label>New PassWord:</label>
                                <span class="error">* <?php echo $passwordErr;?></span>
                                <input class="form-control" type="password" name="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <span class="error">* <?php echo $cpasswordErr;?></span>
                               <input class="form-control" type="password" name="CPassword">
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
