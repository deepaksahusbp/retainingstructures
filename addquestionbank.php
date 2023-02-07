<?php
	session_start();
	include 'dbconnect.php';
	//$usernameErr=$passwordErr="";
	$sql="
		SELECT *
		FROM admin
		WHERE username='".$_SESSION['username']."' 
		AND ( password='".$_SESSION['password']."' )
	";
	$result=$conn->query($sql);
	//print_r($result);
	
	if ($result->num_rows==0) {
		echo "<script>alert('U r not supposed to be here. ByeBye!!')</script>";
		echo "<script>self.location='adminlogin.php';</script>";
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ComeLet'sCode</title>
        <?php
            include 'includefiles.php';
        ?>
    </head>
    <body>

        <?php 
            include 'includevariables.php';
            include 'navbar.php';
        ?>

        <div class="container-fluid" style="display: block; margin-top:5%; ">    
            <div style="" class="row content">
                <div class="col-lg-2 col-sm-2">
                </div>

                <div class="col-lg-4 col-sm-8 ">
	                <ul class="list-group">
                        <li class="list-group-item dropdown-submenu">
                            <a href="addquestionjava.php" class="btn">Java</a>
                            <ul class="dropdown-menu">
                                <li><a href="addquestionjava.php" class="btn">Add
                                </a></li>
                                <li><a href="editquestionjava.php" class="btn">Edit</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item"><a href="#" class="btn">C</a></li>
                        <li class="disabled list-group-item dropdown-submenu">
                            <a tabindex="1" href="#" class="btn disabled">Web</a>
                            <ul class="dropdown-menu">
                                <li><a href="#" class="btn disabled">HTML</a></li>
                                <li><a href="#" class="btn disabled">CSS</a></li>
                                <li><a href="#" class="btn disabled">JS</a></li>
                                <li><a href="#" class="btn disabled">PHP</a></li>
                                <li><a href="#">...</a></li>
                            </ul>
                        </li>
                    </ul>
             	</div>      
                <div class="col-lg-6 col-sm-2">
                </div>
            </div>
        </div>
        <form action="logout.php">
            <div class="form-group">
                <button type="submit" name="logout" class="btn btn-success">
                    logout
                </button>
            </div>
        </form>
    </body>
</html>
