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
    if(isset($_POST['submit'])){
        $sql=
            "
            INSERT INTO javaquestionbank VALUES
            ('NULL','".$_POST['title']."','".$_POST['question']."','".$_POST['program']."','".$_POST['output1']."','".$_POST['output2']."','".$_POST['output3']."')
            ";

            if(mysqli_query($conn,$sql)){
                echo "<script>alert('The data is inserted')</script>";
            }
            else{
                echo "<script>alert('The data is not inserted')</script>";
            }
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

        <div class="container-fluid" style="display: block; margin-top:0%; ">    
            <div style="" class="row content">
                <div class="col-lg-2 col-sm-2">
                </div>

                <div class="col-lg-8 col-sm-8 ">
	                <div class="col-lg-1 col-sm-2" style=""></div>
                    <div class="col-lg-10 col-sm-8">
                        
                        <!-- BOXSHADOW NOT WORKING #CORRECT_IT -->
                        
                        <form method="post" class="col6 boxshadow">
                            <div class="form-group">
                                
                                <h2 style="text-align: center;">New Java-Question Post</h2>
                                <br>
                                <label>Title</label>
                                <input required="1" class="form-control" type="text" name="title" placeholder="new post title">
                                <br>
                                <label>Question</label>
                                <textarea required name="question" class="form-control" placeholder="new post question"></textarea>
                                <br>
                                <label>Program</label>
                                <textarea required name="program" class="form-control" placeholder="new post program"></textarea>
                                <br>
                                <label>Output</label>
                                <input class="form-control" type="text" name="output1" placeholder="new post output file name">
                                <br>
                                <label>Output2</label>
                                <input class="form-control" type="text" name="output2" placeholder="new post output file name">
                                <br>
                                <label>Output3</label>
                                <input class="form-control" type="text" name="output3" placeholder="new post output file name">
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
                    <div class="col-lg-1 col-sm-2" style=""></div>
                    </div>
             	</div>      
                <div class="col-lg-2 col-sm-2">
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
