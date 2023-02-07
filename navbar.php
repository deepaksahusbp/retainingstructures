<?php 
//session_start();
$t1="logintodatabase.php";
$t2="LogIn";
  if ($_SESSION['ACTIVE']) {
    //echo "<script>self.location='choose.php';</script>";
    $t1 = "endsession.php";
    $t2 = "LogOut";
  }
?>
<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid" style="padding: 0px;">
<!-- -Navbar Header Started- -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                <!-- <a class="navbar-brand" href="#" style="margin-left:auto; margin-right:auto;" > --><!-- <span class="glyphicon glyphicon-envelope"></span> --> <!-- Logik - <span class="glyphicon glyphicon-envelope"></span>agik</a> -->
            <a class="navbar-brand" href="<?php echo $loc; ?>index.php" style="margin: 0; padding: 0;">
                <div class="text-center thumbnail"
                style="width: /*11.764%*/168px; height: auto; border: 0; padding: 0; margin: 0;">
                    <img src="<?php echo $loc; ?>images/wall design logo3.jpg">
                </div>
            </a>
        </div>  
<!---Navbar Header Closed- -->
            <div class="collapse navbar-collapse" id="myNavbar">
                    <ul style="margin-left: 5%;" class="nav navbar-nav">
                        <li style="padding:0 10px 0px 10px" class="active">
                            <a href="<?php echo $loc; ?>index.php"><span class="glyphicon glyphicon-home"></span> Home </a>
                        </li>

                        <li class="dropdown" style="margin-top:1.5%;">
                                <button style="background-color: black; color: white; opacity: 1; " class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">    
                                <a href="#" style="color: black;"><span style="font-size: 120%; color:
                                white;" 
                                    class="glyphicon glyphicon-education">Design</span></a>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">

                                    <!-- Starting...Sub_Menu -->
                                    <li class="dropdown-submenu">
                                        <a href="#" class="btn disabled">Tools</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="plotgraph.php" class="btn">Plot Graphs</a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="#" class="btn disabled">HTML</a></li>
                                                    <li><a href="#" class="btn disabled">CSS</a></li>
                                                    <li><a href="#" class="btn disabled">JS</a></li>
                                                    <li><a href="#" class="btn disabled">PHP</a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <!-- <li><a href="#">...</a></li> -->
                                                <!-- </ul> --> 
                                            </li>
                                            <li>
                                            <a href="Calculator.php" class="btn">Scientific Calculator</a>
                                            </li>
                                            <!-- <li><a href="#" class="btn disabled">Sliding Check</a></li>
                                            <li>
                                            <a href="#" class="btn disabled">Bearing Pressure Check</a>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <!-- Starting...Sub_Menu -->
                                    <li class="dropdown-submenu">
                                        <a tabindex="1" href="<?php echo $loc; ?>learnalanguage.php">Retaining Wall</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo $learnc; ?>learnc.php" class="btn">Gravity
                                                </a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <!-- <li><a href="learnalanguage">...</a></li>

                                                </ul>  -->
                                            </li>
                                            <li>
                                            <a href="<?php echo $learnc; ?>learnc.php" class="btn">
                                            Cantilever
                                            </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $learnc; ?>counterhome.php" class="btn">Counterfort</a>
                                                <!-- <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a href="<?php echo $learnjava;?>learnjava.php" class="btn">Core Java</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a target="1" tabindex="1" href="<?php echo $learnjava; ?>https://www.youtube.com/watch?v=lfSJrptM058&list=PLxJHDupGoOopyGb77qqowqEshiGBCileu" class="btn">youtube links</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#" class="btn disabled">Adv. Java</a></li>
                                                </ul> -->
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <!-- Starting...Sub_Menu -->
                                    <li>
                                        <a tabindex="1" href="selectdesign.php" class="btn">DataBase</a>
                                        <!-- <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="1" href="#" class="btn disabled">Oracle</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <!-- <li><a href="#">...</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#" class="btn disabled">MySQL</a></li>
                                            <li><a href="#" class="btn disabled">PL/SQL</a></li>
                                        </ul>  -->
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <li class="divider"></li>
                                    <li><a href="#" class="btn disabled">All Features</a></li>
                                </ul>
                        </li>
                        <!-- <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                ...
                            </ul>
                        </li> -->
<!--
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
-->
                            <!-- <span class=" glyphicon glyphicon-question-sign"></span> -->
<!--
                            <button type="button" class="btn btn-default btn-xs">
                                <span style="font-size: 1.1em;" class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                            </button>
                             <span style=" font-size: 1.1em;">Bank</span><span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="active"><a href="<?php echo $qbank;?>xqbank/quant/number.php">Quant</a></li>
                            <li class="disabled"><a href="#">Reasoning</a></li>
                            <li class="disabled"><a href="#">Comprehensive</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="active dropdown-submenu">
                                <a href="#">Programming</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $qbank;?>xqbank/programming/java/javaquestionbank.php">Java</a></li>
                                    <li class="disabled"><a href="#">C</a>
                                    </li>
                                    <li class="disabled"><a href="#">C++</a>
                                    </li>
                                    <li class="disabled"><a href="#">PHP</a>
                                    </li>
                                </ul>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li class="disabled"><a href="#">Mathematical</a></li>
                          </ul>
                        </li>
-->
                        <li>
                            <a  href="<?php echo $loc; ?>members.php"><span class="glyphicon glyphicon-user"></span> Members</a>
                        </li>
                        <li>
                            <a href="<?php echo $loc; ?>profile1.php""><span class="glyphicon glyphicon-book"></span> About</a>
                        </li> 
                    </ul> 

                    <!-- <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="input-group-btn">
                        <button style="padding: 5px 4px 5px 4px;" class="btn btn-default" type="submit">
                             <i class="glyphicon glyphicon-search"></i>  
                        </button>
                    </form> -->
                    <ul class="navbar-form navbar-left">
                        <div class="input-group">
                            <!-- <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" onclick="function()" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                             -->
                             <!-- Custom Google Search Starts-->
                             <div style="width: /*11.764%*/280px; height: 12p; border: 0; padding: 0; margin: 0; ">
                             <center>
<script>
  (function() {
    var cx = '015470958271493038135:6nzh60hdtvk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
                            </center>
                            </div>
                            <!-- Custom Google Search Ends-->
                        </div>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 3%;">
                        <li><a href="<?php echo $t1; ?>" class="btn"><span class="glyphicon glyphicon-log-in"></span> <?php echo $t2; ?></a></li>
                        <li><a href="signuptodatabase.php" class="btn"><span class="glyphicon glyphicon-log-in"></span> SignUp</a></li>
                    </ul>
                </div>
        </div>
</nav>