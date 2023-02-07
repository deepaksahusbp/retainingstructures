<nav class="navbar navbar-inverse navbar-fixed-top" >
    <div class="container-fluid" style="padding: 0px;">
<!-- ---------------------------------Navbar Header Started------------------------------------------- -->
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
                    <img src="<?php echo $loc; ?>images/main_logo7.jpg">
                </div>
            </a>
        </div>  
<!-- ---------------------------------Navbar Header Closed------------------------------------------- -->
            <div class="collapse navbar-collapse" id="myNavbar">
                    <ul style="margin-left: 5%;" class="nav navbar-nav">
                        <li style="padding:0 10px 0px 10px" class="active">
                            <a href="<?php echo $loc; ?>index.php"><span class="glyphicon glyphicon-home"></span> Home </a>
                        </li>

                        <li class="dropdown" style="margin-top:1.5%;">
                                <button style="background-color: black; color: white; opacity: 1; " class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">    <a href="#" style="color: black;"><span style="font-size: 120%; color: white;" 
                                    class="glyphicon glyphicon-education">Tutorials</span></a>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">

                                    <!-- Starting...Sub_Menu -->
                                    <li class="dropdown-submenu">
                                        <a tabindex="1" href="#" class="btn disabled">Application Development</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="1" href="#" class="btn disabled">Web</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#" class="btn disabled">HTML</a></li>
                                                    <li><a href="#" class="btn disabled">CSS</a></li>
                                                    <li><a href="#" class="btn disabled">JS</a></li>
                                                    <li><a href="#" class="btn disabled">PHP</a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <li><a href="#">...</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#" class="btn disabled">Android App</a></li>
                                            <li><a href="#" class="btn disabled">.Net</a></li>
                                        </ul>
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <!-- Starting...Sub_Menu -->
                                    <li class="dropdown-submenu">
                                        <a tabindex="1" href="<?php echo $loc; ?>learnalanguage.php">Learn a language</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="1" href="<?php echo $learnc; ?>learnc.php">C</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>
                                                    <li><a href="learnalanguage"></a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <li><a href="learnalanguage">...</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#" class="btn disabled">C++</a></li>
                                            <li><a href="#" class="btn disabled">JAVA</a></li>
                                        </ul>
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <!-- Starting...Sub_Menu -->
                                    <li class="dropdown-submenu">
                                        <a tabindex="1" href="#" class="btn disabled">DataBase</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="1" href="#" class="btn disabled">Oracle</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>
                                                    <li><a href="#"></a></li>

                                                    <!-- Implement -"Read More Type Here" -->
                                                    <li><a href="#">...</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#" class="btn disabled">MySQL</a></li>
                                            <li><a href="#" class="btn disabled">PL/SQL</a></li>
                                        </ul>
                                    </li>
                                    <!-- Sub_Menu...Ending -->

                                    <li class="divider"></li>
                                    <li><a href="#" class="btn disabled">All Subjects</a></li>
                                </ul>
                        </li>
                        <li>
                            <a href="<?php echo $loc; ?>members.php"><span class="glyphicon glyphicon-user"></span> Members</a>
                        </li>
                        <li><a href="<?php echo $loc; ?>profile1.php""><span class="glyphicon glyphicon-book"></span> Story</a></li> 
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
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-default disabled" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right" style="margin-right: 3%;">
                        <li><a href="signup.php" class="btn disabled"><span class="glyphicon glyphicon-log-in"></span> Signin</a></li>
                        <li><a href="login.php" class="btn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
        </div>
</nav>