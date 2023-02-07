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
    $questionId = $_GET['questionId'];
    if(isset($_POST['update'])){
        $updatesql = "
            UPDATE javaquestionbank
            SET title = '".$_POST['title']."',question= '".$_POST['question']."',program = '".$_POST['program']."',
                output1 = '".$_POST['output1']."',output2 = 
                '".$_POST['output2']."',output3 = 
                '".$_POST['output3']."'
            WHERE id = '".$questionId."'
        ";
        if(mysqli_query($conn,$updatesql)){
            echo "<script>alert('Successfully Updated!')</script>";
            echo "<script>self.location='editquestionjava.php';</script>";
        }
        else{
            echo "<script>alert('Cann't update now!')</script>";
        }
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

        <div class="container-fluid" style="display: block; margin-top:5%; ">    
            <div style="" class="row content">
                <div class="col-lg-2 col-sm-2">
                </div>

                <div class="col-lg-8 col-sm-8 ">
	                <div class="col-lg-1 col-sm-2" style=""></div>
                    <div class="col-lg-10 col-sm-8">
                        <?php
                            if($questionId){
                                $sql="
                                    SELECT *
                                    FROM javaquestionbank
                                    WHERE id = '".$questionId."'
                                ";
                                $result=$conn->query($sql);
                                $row = $result->fetch_assoc();
                        ?>
                                <form style="margin-top: -4%" method="post" class="col6 boxshadow">
                                    <div class="form-group">
                                        
                                        <h2 style="text-align: center;">Update Java-Question Post</h2>
                                        <br>
                                        <label>Title</label>
                                        <input required="1" class="form-control" type="text" name="title" value="<?php echo $row['title'] ?>">
                                        <br>
                                        <label>Question</label>
                                        <textarea required name="question" class="form-control"><?php echo $row['question'] ?>
                                        </textarea>
                                        <br>
                                        <label>Program</label>
                                        <textarea required name="program" class="form-control" ><?php echo $row['program'] ?>
                                        </textarea>
                                        <br>
                                        <label>Output</label>
                                        <input class="form-control" type="text" name="output1" value="<?php echo $row['output1'] ?>">
                                        <br>
                                        <label>Output2</label>
                                        <input class="form-control" type="text" name="output2" value="<?php echo $row['output2'] ?>">
                                        <br>
                                        <label>Output3</label>
                                        <input class="form-control" type="text" name="output3" value="<?php echo $row['output3'] ?>">
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <button
                                        type="submit" name="update" class="btn btn-success">
                                            update
                                        </button>
                                    </div>

                                </form>

                        <?php
                            }
                            else{
                        ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Question</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
                                $sql="
                                    SELECT *
                                    FROM javaquestionbank
                                ";
                                $result=$conn->query($sql);
                                while($row = $result->fetch_assoc()){ 
                        ?>
                                    <tr>
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['question']; ?></td>
                                        <td>
                                            <a href="editquestionjava.php?questionId=<?php echo $row['id'] ?>">Edit</a> /
                                            <a href="deletequestionjava.php?questionId=<?php echo $row['id'] ?>">Delete</a>    
                                        </td>
                                    </tr>      
                        <?php
                                }                   
                            }
                        ?>
                            </tbody>
                        </table>
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
