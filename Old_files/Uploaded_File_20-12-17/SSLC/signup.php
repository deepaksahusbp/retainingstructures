<?php
    include 'dbconnect.php';

    $nameErr=$phoneErr = $emailErr = $genderErr = $dobErr = $usernameErr=$passwordErr=$cpasswordErr="";

    if(isset($_POST['submit'])){
    
        if (empty($_POST["Name"]))
            $nameErr = "Name is required";
        if (empty($_POST["Email"]))
            $emailErr = "Email is required";
        if (empty($_POST["DOB"]))
            $dobErr = "DOB is required";
        if (empty($_POST["Gender"]))
            $genderErr = "Gender is required";
        if (empty($_POST["Username"]))
            $usernameErr = "UserName is required";
        if (empty($_POST["PassWord"]))
            $passwordErr = "Password is required";
        if (empty($_POST["CPassword"]) || strcmp($_POST["CPassword"],$_POST["PassWord"])){
            $cpasswordErr = "Incorrect Pasword";
        if (empty($_POST["Phone"]))
            $phoneErr = "Phone Number is required";
        }
        $Err=$nameErr.$emailErr.$genderErr.$dobErr.$usernameErr.$passwordErr.$cpasswordErr.$phoneErr;
        if(empty($Err)){
            $sql=
            "
            INSERT INTO stud VALUES
            ('NULL','".$_POST['Name']."','".$_POST['DOB']."','".$_POST['Gender']."','".$_POST['Phone']."',
            '".$_POST['Email']."','NULL','".$_POST['Username']."','".md5($_POST['PassWord'])."')
            ";

            if(mysqli_query($conn,$sql)){
                echo "<script>alert('The data is inserted')</script>";
            }
            else{
                echo "<script>alert('The data is not inserted')</script>";
            }
        }
        if (!empty($Err)) {
            echo "Hello";
            echo "<script>alert('The data is not inserted')</script>";
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
            $loc='';
            $learnc='xlearnc/';  //to go to xlearnc folder
            include 'navbar.php';
        ?>

        <div class="container-fluid" style="display: block; padding: 0; ">    
            <div style="height: 850px;" class="row content">
                <div class="col-sm-2 sidenav">
                </div>
                <div style="padding: 0px;" class="col-sm-8">
                    <div class="col-sm-3" style="height:650px;"></div>
                    <div class="col-md-6 col6 boxshadow">
                        
                        <h2 style="text-align: center;">Sign Up</h2>

                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT -->
                        
                        <form  class="" method="post" 
                        action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                <label>Name:</label>
                                <span class="error">* <?php echo $nameErr;?></span>
                                <input class="form-control" type="text" name="Name">
                            </div>
                            <div class="form-group">    
                                <label>DOB:</label>
                                <span class="error">* <?php echo $dobErr;?></span>
                                <input class="form-control" type="date" name="DOB">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label>
                                <span class="error">* <?php echo $genderErr;?></span><br>
                                <label class="radio-inline"><input type="radio" name="Gender" value="Male">Male</label>
                                <label class="radio-inline"><input type="radio" name="Gender" value="Female">Female
                                <label>
                                <label class="radio-inline"><input type="radio" name="Gender" value="Other">Other
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <span class="error">* <?php echo $phoneErr;?></span>
                               <input class="form-control" type="text" name="Phone">
                           </div>
                           <div class="form-group">
                                <label>Email:</label>
                                <span class="error">* <?php echo $emailErr;?></span>
                                <input class="form-control" type="text" name="Email">
                            </div>
                            <div class="form-group">
                                <label>User Nmae:</label>
                                <span class="error">* <?php echo $usernameErr;?></span>
                                <input class="form-control" type="text" name="Username">
                            </div>
                            <div class="form-group">
                                <label>PassWord:</label>
                                <span class="error">* <?php echo $passwordErr;?></span>
                                <input class="form-control" type="password" name="PassWord">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password:</label>
                                <span class="error">* <?php echo $cpasswordErr;?></span>
                               <input class="form-control" type="password" name="CPassword">
                            </div>
                            <div class="form-group" style="text-align: center;">
                                <button 
                                type="submit" name="submit" class="btn" style="color:black; margin-bottom:5%; 
                                margin-top:2%;">
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
