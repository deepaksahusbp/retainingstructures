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
        <div class="container-fluid" style="display: block; padding: 0; ">    
<!--            <div style="height: 650px;" class="row content">-->
                <div class="row">
                <div class="col-sm-12">
                    <?php 
                        include 'navbar.php';
                    ?>
                </div>
                </div>
            <div style="height:auto;" class="row content">       
                <div class="col-sm-3 sidenav sidenav-fixed">
                    <br>
                    <?php 
                        include 'profile.php';
                    ?>
                </div>
                <div class="col-sm-6" style="padding:0;"> 
                    
                        <!---   <div class="container-fluid">
                        <div class="row content">
                            <div class="col-sm-12 " style="padding: 0;">
                                <!-- <div class="container-fluid" style="background: url(images/helpinghand1.jpg) no-repeat center center fixed; 
                                  -webkit-background-size: cover;-moz-background-size: cover;
                                  -o-background-size: cover;
                                  background-size: cover; width:100%; height: 100%;">
                                </div> -->
                                <!-- <img id="body_bg_img" src="images/helpinghand1.jpg"> -->
                                <!-- <div>
                                    <img src="images/helpinghand1.jpg" class="img-fluid" alt="Responsive image">
                                </div>-->
<!--
                        <div class="visible-lg myBack-lg">
                        </div>
                        <div class="visible-md myBack-md">
                        </div>
                        <div class="visible-sm myBack-sm">
                        </div>
                        <div class="visible-xs myBack-xs">
                        </div>
-->
                        <!-- Helping Hand Starts-->
                    
                        <img src="images/_MG_2398.jpg" width="100%" height="auto">
                    
                        <!-- Helping Hand Ends-->
                    
                        <!-- Profile Pictures Starts -->
                        <br><br>
                        <div class="row" style="text-align:center;">
                                <img src="images/Siddharth%20Singhal1.jpg" style="margin:0 5% 0 0;" class="img-circle" width="15%" height="auto">
                                <img src="images/burle%20sharma1.png" class="img-circle" width="30%" height="auto">
                                <img src="images/Deepak%20Sahu1.png" style="margin:0 0 0 5%;" class="img-circle" width="15%" height="auto">
                        </div>
                        
                        <!-- Profile Pictures Ends -->
                    
                       <!-- Profile Starts-->
                        
                       <div style="padding:1% 4% 1% 4%;">
                       <ul class="nav nav-tabs">
                           <li class="active"><a data-toggle="tab" href="#home"><b style="font-size:150%;"><i>Our Story</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu1"><b style="font-size:150%;"><i>Philosophy</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu2"><b style="font-size:150%;"><i>Mission</i></b></a></li>
                           <li><a data-toggle="tab" href="#menu3"><b style="font-size:150%;"><i>Vission</i></b></a></li>
                         </ul>

                         <div class="tab-content">
                             
                             <div id="home" class="tab-pane fade in active">
                             <h3><b style="color:orange;">Our Story</b></h3>
                                <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-book" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">
                               According to "Butterfly Theory", each action in this world is connected to another. People meet but there is always a reason behind it. We too met but we never had this notion that our acquaintance will emerge out to be such a beautiful connection.
                                 <br><br>
                               We came under Mr. Sharma's influence in the year 2013 as students to learn basic programming languages like C & C++. But after huge success in our AISSCE Computer Science Examination and our keen interest to learn & explore, we perpetuated to learn more languages. We gained valueable knowledge of Core JAVA, Advanced JAVA,PL/SQL & then we paced forth towards the designing of the website. We started again with HTML,CSS,JavaScript,PHP and after successful creation of basic webpages, Mr. Sharma came up with the idea of digitalised learning of languages in a very simplified manner. His main motive was to provide a helping hand to all those students who want to strenghthen their concepts & grip over a language. We got highly influenced by such a helpful initiative of Mr. Sharma and we gave our consent to work under his guidance to complete this project and to have a little contribution in serving the society.
                                 <br><br>
                               Over the years, we developed a strong bond with Mr. Sharma. He acted as mentor,teacher and above all, treated us his own family. He always motivated us with his words. Apart from the books, he gave many useful knowledge regarding the world. His philosophy and thoughts always served as light and showed us the right path. Logik-Magik is also a symbol of our bond and connection with him. 
                                 
                             </p>
                           </div>
                             
                           <div id="menu1" class="tab-pane fade">
                             <h3><b style="color:orange;">Our Philosophy</b></h3>
                                <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-globe" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">We act as free lancer and our philosophy is to help every student with the basic concepts and syntax and ideas of various languages. Our aim is to help the society and thus we are providing this facility free of cost.</p>
                           </div>
                           <div id="menu2" class="tab-pane fade">
                             <h3><b style="color:orange;">Our Goals...</b></h3>
                               <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-education" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">Our aim is to provide our students with 24 x 7 online aid which can provide an opportunity of learning, at any time preferable by the student. Our team members are always with them. Any registered student can call the members available and can have their doubts cleared or can mail their doubts at the e-mail address provided in the contact details</p>
                           </div>
                           <div id="menu3" class="tab-pane fade">
                             <h3><b style="color:orange;">Future Prospects</b></h3>
                               <div id="icon" style="text-align:center;"><a><span class="glyphicon glyphicon-road" style="font-size:585%;"></span></a></div>
                               <br>
                             <p style="text-align:justify; font-family:'Shadows Into Light Two',cursive; color:#5E412F; font-size:150%;">We are dreaming this site to become a productive site for the students. We are not only helping our students to learn the language but also providing a platform for the registered students to discuss any queries or issues online in our discussion forum.</p>
                             </div>
                         </div>
                         </div>
                         <br><br>

                        
                       <!-- Profile Ends-->
                           
                        <?php 
                            include 'bottom1.php';
                        ?> 
                    
                        <?php 
                            include 'quote.php';
                        ?>
                    
                </div>
                <div class="col-sm-3 sidenav">
                </div>
            </div>
        
        
        <div class="row">
        <div class="col-sm-12" style="padding:0;">
            <footer style="opacity: 0.7;" class="container-fluid text-center">
                <?php 
                    include 'footer.php';
                ?>
            </footer>
            <footer style="opacity: 0.9;border-top: 1px solid black;" class="container-fluid text-center">
                &copy; Logik - Magik 2017 | All Rights Reserved | Privacy Policy | About Us
<!--                 &copy; Logik - Magik 2017 <span style="font-size:500%">.</span> All Rights Reserved | Privacy Policy | About Us-->
            </footer>
        </div>
        </div>
    </div>
    </body>
</html>
