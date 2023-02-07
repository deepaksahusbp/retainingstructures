<?php 
session_start();
//$_SESSION['ACTIVE'] = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Sign In
        </title>
        <style type="text/css">
        .xyz{
            margin-left: auto;
            margin-right: auto;
        }
        .allignment{
            text-align: right;
        }
        .rang{
            float: right;
            margin-left: 0px;
            margin-right: 200px;
            color: red;
            text-align: left;
            font-size: 12px;
        }
    </style>
    <script type="text/javascript">
        gvalue=0;
        gvalue1=false;
        gvalue2=true;
       function cleartext1(){
           var x=document.getElementById("id4");
           x.value="";
       } 
        function cleartext2(){
           if(gvalue2==true){
               saaf(5);
               var y=document.getElementById("id5");
               y.value="";
               gvalue2=false;
           }
       }
        function alfa2mailuse(y,m,ID){
            //alert("ENTERED IN alfa2mail use y m id= "+ID+" "+y+" "+m+" ");
            x=y.split("");
            //alert("after spilting x="+x);
            if(x.length==0){
                alert("You are not allowed to leave "+m+" as blank.");
                gvalue=1;
                if(ID==3){
                    //document.getElementById("demo").innerHTML="* enter a valid email";
                    redemail();
                }
                if(ID==4){
                    //document.getElementById("demo1").innerHTML="* enter a valid username";
                    reduse();
                }
                if(ID==5){
                    //document.getElementById("demo2").innerHTML="* enter a valid password";
                    gvalue1=true;
                    redpass();
                }
                /*if(ID==6){
                    redcpass();
                }*/
                return false;
            }
            if(x.length>60 && ID==4){
                alert("You cannot use more than 60 characters");
                reduse();
            }
            /*if(x.length<13 && ID==3){
                alert("Email should be atleast 13 characters");
                redemail();
                
            }
            if(x.length<8 && ID==5){
                alert("Password must be atleast 8 characters");
                redpass();
                
            }
            if(x.length>60 && ID==5){
                alert("You cannot use more than 60 characters password");
                redpass();
            }*/
            return true;
        }
        function alfa1mailuse(y,ID1,idea){
            //alert("entered..value id1 & y in alfamailuse="+ID1+" "+y);
            var mil=alfa2mailuse(y,idea,ID1);
            var temp1=ID1;
            x=y.split("");
            //alert("value of x="+x);
            //document.write(x.length);
            //alert("length of string x="+x.length);
            if(ID1==3 && mil==true){
                mailcheck(temp1,x);
            }
            if(ID1==4 && mil==true){
                usecheck(temp1,x);
            }
            if(ID1==5 && mil==true){
                passcheck(temp1,x);
            }        
            if(ID1==6 && mil==true){
                cpasscheck();
            }        
        }
        function alfamailuse(ID) {
            //alert("entered in alfamailuse");
            var temp=ID;
            /*if(ID==3){
                alert("value id n temp in alfamailuse="+ID+" "+temp);
                var y=document.getElementById('id3').value;
                 alfa1mailuse(y,temp,"mail");
            }*/
            if(ID==4){
                //alert("value id n temp in alfamailuse="+ID+" "+temp);
                var z=document.getElementById('id4').value;
                 alfa1mailuse(z,temp,"username");
            }
            if(ID==5){
                //alert("value id n temp in alfamailuse="+ID+" "+temp);
                var z=document.getElementById('id5').value;
                 alfa1mailuse(z,temp,"password");
            }
            /*if(ID==6){
                alert("value id n temp in alfamailuse="+ID+" "+temp);
                var z=document.getElementById('id6').value;
                 alfa1mailuse(z,temp,"confirm password");
            }*/
            //alert("value of y="+y);
            //document.write(y.length);
            //alert("value of ID="+ID);
        }
        function reduse(){
            document.getElementById("demo1").innerHTML="*choose a valid username";
        }
        function redpass(){
            document.getElementById("demo2").innerHTML="*choose a valid password";
        }
        function saaf(f){
            /*if(f==3){
                document.getElementById("demo").innerHTML="";
            }*/
            if(f==4){
                document.getElementById("demo1").innerHTML="";
            }
            if(f==5){
                document.getElementById("demo2").innerHTML="";
            }
            /*if(f==6){
                document.getElementById("demo3").innerHTML="";
            }*/
        }
    </script>
    <link rel="shortcut icon" type="image/png" href="images/wall design logo1.png">
        <?php
            include 'includefiles.php';
        ?>
        <!-- <link rel="preload" href="css/togglesidebar.css" as="style">
        <link rel="preload" href="vendor/jquery/jquery.min.js" as="script">
        <link rel="preload" href="vendor/popper/popper.min.js" as="script"> -->
        <link href="css/togglesidebar.css" rel="stylesheet">

</head>

<body onload="document.getElementById('menu-toggle').click()">
    
     <?php
         include 'includevariables.php';
         include 'navbar.php';
     ?>
       
    <div class="container-fluid" style="margin-top: 10px;">
        <div id="wrapper" class="row">

        <!-- Sidebar -->
            <div id="sidebar-wrapper" style="background-color: #ffffff;">
                <div class="sidebar-nav">
                    <br>
                    <?php 
                        include 'xhomepage/profile.php';
                    ?>
                </div>
            </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
            
            <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-align-center" style=""></span></a>
            <div style="" id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="col-lg-9 col-sm-12"> 
                        
                        <form action="logintodatabase1.php" method="get">
                            <fieldset class="xyz">
                                <!-- <legend>Log In</legend> -->
                                
                                <img src="images/LogIn%20Head.jpg" width="500px" height="150px" class="img-responsive">
                                <br>
                                    Username:<p id="demo"></p>
                                <input type="text" id="id4" onfocus="cleartext1()" name="username" onblur="alfamailuse(4)" onkeydown="saaf(4)" value="Enter your username"/><div id="demo1" class="rang"></div>
                                <br><br>
                                    Password:<p id="demo"></p>
                                <input type="password" id="id5" onfocus="cleartext2()" name="pass" id="id5" onchange="alfamailuse(5)" onkeydown="saaf(5)" value="Enter Password"/><div id="demo2" class="rang"></div>
                                <br><br>
                                <input type="checkbox">Remember Me
                                <br>
                                <span class="allignment">
                                <a href="#"><u>Forgot Password?</u></a></span><br>
                                <input type="submit" value="Sign In"/><span class="allignment">
                                <a href="signuptodatabase.php"><u>Click here to Sign Up</u></a></span>
                                <center>or</center>
                                <br>
                                <a href="#"><img src="images/facebook-login-button-png-11.png" width="500px" height="60px" class="img-responsive"></a>
                            </fieldset>
                        </form>

                        <?php 
                            include 'xhomepage/footer.php';
                        ?>

                      </div>
                       
                      <div class="col-lg-3 col-sm-0 col-xs-0" style="padding: 0;">
                            <?php
                                include 'right_sidebar.php';
                            ?> 
                      </div>
                   </div>
                </div>
            </div>
        <!-- /#page-content-wrapper -->

        </div>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <!-- Menu Toggle Script -->
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
