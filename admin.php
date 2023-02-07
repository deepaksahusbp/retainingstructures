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
        <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
            include 'navbar.php';

        ?>
    </head>
    <body>

        <?php 
            include 'includevariables.php';
        ?>

        <div class="container-fluid" style="display: block; margin-top:5%; ">    
            <div style="" class="row content">
                <div class="col-lg-2 col-sm-2">
                </div>

                <div class="col-lg-8 col-sm-8 ">
	                <ul class="list-group">
						<li class="list-group-item"><a href="addquestionbank.php">	Question bank</a></li>
						<li class="disabled list-group-item"><a href="addnotes">Add Notes</a></li>
						<li class="disabled list-group-item">Other..</li>
					</ul>
             	</div>      
                <div class="col-lg-2 col-sm-2">
                </div>
            </div>
        </div>

        <!-- <a href='https://www.counter12.com'><img style=" margin-left:2%; padding-bottom: 10%;" src='https://www.counter12.com/img-B83c6a04Z86Da6yZ-26.gif' width="30%" height="auto" border='0' alt='conter12'/></a> -->
		<a href="https://smallseotools.com/visitor-hit-counter/" target="_blank" title="Web Counter">
		<img src="https://smallseotools.com/counterDisplay?code=41ac6facf0a5b9bc4d7c360c8364f2ec&style=0015&pad=5&type=page&initCount="  title="Web Counter" Alt="Web Counter" border="0">
		</a>
        <form action="logout.php">
            <div class="form-group">
                <button type="submit" name="logout" class="btn btn-success">
                    logout
                </button>
            </div>
        </form>
    </body>
</html>
