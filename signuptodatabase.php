<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <style type="text/css">
        .xyz{
            margin-left: auto;
            margin-right: auto;
        }
        .sidekar{
            margin-left: 150px;
            margin-right: 75px;
            
        }
        .rang{
            float: right;
            margin-left: 0px;
            color: red;
            text-align: left;
            font-size: 12px;
        }
    </style>
    <script type="text/javascript">
        gvalue=0;
        gvalue1=false;
        function termsconditions() {
            var myWindow = window.open("", "MsgWindow", "width=500,height=600");
            myWindow.document.write("<p>This Sample Web application is provided for information and reference purpose only.<br><br> The provided values are just indicative. The actual values for construction works may vary.<br><br> For correct input parameters, please refer to a civil engineer in the field of geotech.</p>");
        }
        function prompt1(ID) {
            var temp=ID;
            //var txt;
            var person = prompt("Please enter your name without Special character:", "Harry");
            if (person == null || person == "") {
                //txt = "User cancelled the prompt.";                
                prompt1(temp);
            } 
            else {
                //txt = "Hello " + person + "! How are you today?";
                alfa1(person,temp);
                if(ID==1){
                    var c=document.getElementById('id1');
                }
                if(ID==2){
                    var c=document.getElementById('id2');
                }
                c.value=person;
                //document.write("alright");
            }
            //document.getElementById("demo").innerHTML = txt;
        }

        function alfa(ID) {
            var temp=ID;
            if(ID==1){
                var y=document.getElementById('id1').value;
                 alfa1(y,temp);
            }
            if(ID==2){
                var z=document.getElementById('id2').value;
                 alfa1(z,temp);
            }
            //alert("value of y="+y);
            //document.write(y.length);
            //alert("value of ID="+ID);
        }
        function alfa1(y,ID1){
            alfa2(y,"Name",ID1);
            var temp1=ID1;
            x=y.split("");
            //alert("value of x="+x);
            //document.write(x.length);
            //alert("length of string x="+x.length);
            var temp=0;
            for (var i = 0; i < x.length; i++) {
                if ((x[i]>='A' && x[i]<='Z')||(x[i]>='a' && x[i]<='z')){
                    //alert("hello");
                    if ((i==0)&&(x[i]==' ')) {
                        ++temp;
                        alert("You are not allowed to put first character as space.");
                    }
                } 
                else {
                    ++temp;
                    if(x[i]!=' '){
                        alert("You are not allowed to use"+x[i]+"in name");
                    }
                    else{
                        alert("You are not allowed to use space in name");
                    }
                }
            }
            if (temp>0) {
                temp=0;
                prompt1(temp1);
            }
        }
        function alfa2(y,m,ID){
            x=y.split("");
            if(y.length==0){
                alert("You are not allowed to leave "+m+" as blank.");
                if (m=="Name") {
                    prompt1(ID);
                }
            }
        }
        /*function numcheck() {
            var num=document.getElementById('id2');
            var num1=num.value;
            var y=num1.toString();
            alfa2(y,"Roll No.");
        }*/
        /*function checkgender() {
            //var gen1=document.getElementById('id3');
            //alert("Value Of Gender="+gen.value);
            if (gen==0) {
                alert("You cannot leave gender blank\n Please Choose One");
            }
        }*/
        /*function message() {
            alert("Form is ready to reset");
        }*/
        /*function tempfn() {
            gen=0;
            gen++;
        }*/
        function alfamailuse(ID) {
            //alert("entered in alfamailuse");
            var temp=ID;
            if(ID==3){
                //alert("value id n temp in alfamailuse="+ID+" "+temp);
                var y=document.getElementById('id3').value;
                 alfa1mailuse(y,temp,"mail");
            }
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
            if(ID==6){
                //alert("value id n temp in alfamailuse="+ID+" "+temp);
                var z=document.getElementById('id6').value;
                 alfa1mailuse(z,temp,"confirm password");
            }
            //alert("value of y="+y);
            //document.write(y.length);
            //alert("value of ID="+ID);
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
        function cpasscheck(){
            var str1=document.getElementById('id5').value;
            var str2=document.getElementById('id6').value;
            if(str1!=str2){
                alert("Password and confirm password must be same");
                redcpass();
            }
        }
        function passcheck(temp1,x){
            var countup=0,countlow=0,countnum=0,countd=0,countsp=0,counterr=0;
            for (var i = 0; i < x.length; i++) {
                
                if((x[i]>='A' && x[i]<='Z')){
                    countup++;
                }
                else if(x[i]>='a' && x[i]<='z'){
                    countlow++;
                }
                else if(x[i]>='0' && x[i]<='9'){
                    countnum++;
                }
                else if((x[i]=='!')||(x[i]=='@')||(x[i]=='#')||(x[i]=='$')||(x[i]=='-')||(x[i]=='_')||(x[i]=='.')||(x[i]=='[')||(x[i]==']')||(x[i]=='?')||(x[i]==',')||(x[i]=='+')||(x[i]=='\'')){
                    countsp++;
                    if(x[i]=='.'){
                        countd++;
                    }
                }
                else{
                    alert("You are not allowed to use "+x[i]+" in password");
                    gvalue1=true;
                    redpass();
                    //counterr++;
                    return;
                }
            }
            //alert("Error="+counterr);
            if(countup==0){
                alert("You have to use atleast one upper case letter in password");
                gvalue1=true;
                redpass();
            }
            if(countlow==0){
                alert("You have to use atleast one lower case letter in password");
                redpass();
                gvalue1=true;
            }
            if(countnum==0){
                alert("You have to use atleast one number in password");
                redpass();
                gvalue1=true;
            }
            if(countnum>=4){
                alert("You cannot use more than 4 numbers in password");
                redpass();
                gvalue1=true;
            }
            if(countsp==0){
                alert("You have to use atleast one special character in password");
                redpass();
                gvalue1=true;
            }
            if(countd>1){
                alert("You cannot use more than one dot in password");
                redpass();
                gvalue1=true;
            }
        }
        function mailcheck(temp1,x){
            var temp=0,count=0,countat=0,countdot=0,set=0,set1=0;
            //alert("entered mailcheck value of temp="+x);
            for (var i = 0; i < x.length; i++) {
                //alert("entered mailcheck for loop value of temp="+x);
                if ((i==0)&&(x[i]==' ')) {
                        //alert("entered mailcheck if block value of temp="+x);
                        ++temp;
                        alert("You are not allowed to put first character as space.");
                        redemail();
                }
                if ((x[i]>='A' && x[i]<='Z')||(x[i]>='a' && x[i]<='z')||(x[i]>='0' && x[i]<='9')||(x[i]=='@')||(x[i]=='.')){
                    if(x[i]=='.'){
                        count++;
                    }
                    if(x[i]=='@'){
                        countat++;
                        var j=i;
                    }
                    if(countat==0 && (count>=2)){
                       set++;
                    }
                    if(countat==0 && count>=1){
                        if(x[i]=='.'){
                            set1=0;
                            set1++;    
                        }
                        else{
                            set1++;
                        }
                    }
                    if(countat==1){
                        if(x[i]=='.'){
                            countdot++;
                        }
                    }
                    //alert("hello");
                    
                } 
                else {
                    ++temp;
                    if(x[i]!=' '){
                        alert("You are not allowed to use"+x[i]+"in E-Mail");
                        redemail();
                    }
                    else{
                        alert("You are not allowed to use space in E-Mail");
                        redemail();
                    }
                }
            }
            if(set1==1){
                //alert("Value of set1="+set1);
                alert("There is no character between . and @");
                redemail();
            }
            if(set>0){
                cond=1;
                alert("You have entered more than 1 dot before @ value of set="+set);
                redemail();
            }
            if(count>2 && cond==0){
                alert("You have used . more than two times");
                redemail();
            }
            if(countat>1){
                alert("You have used more than one @ in email");
                redemail();
            }
            if(countdot==0 && gvalue==0){
                alert("You have left dot after @");
                redemail();
            }
            if(x[j+1]=='.' && countat!=0){
                alert("You are not allowed to use dot suddenly after @");
                redemail();
            }
        }
        function redemail(){
            document.getElementById("demo").innerHTML="*enter valid email address";
        }
        function reduse(){
            document.getElementById("demo1").innerHTML="*choose a valid username";
        }
        function redpass(){
            document.getElementById("demo2").innerHTML="*choose a valid password";
        }
        function redcpass(){
            document.getElementById("demo3").innerHTML="* invalid password retry";
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
                if(ID==6){
                    redcpass();
                }
                return false;
            }
            if(x.length>60 && ID==4){
                alert("You cannot use more than 60 characters");
                reduse();
            }
            if(x.length<13 && ID==3){
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
            }
            return true;
        }
        function usecheck(temp1,x){
            //function alfa1(y){
            //alfa2(y,"Name");
            //alert("entered usecheck temp and x="+temp1+" "+x);
            //x=y.split("");
            var temp=0,c=0;
            for (var i = 0; i < x.length; i++) {
                //alert("entered in for loop");
                if(x[i]>='A' && x[i]<='Z'){
                    alert("You cannot choose username with capital letters");
                    reduse();
                    break;
                }
                if ((x[i]>='a' && x[i]<='z')||(x[i]>='0' && x[i]<='9')||(x[i]=='-')||(x[i]=='_')||(x[i]=='.')){
                    //alert("hello");
                    //alert("checking basis..");
                    if(x[i]=='.'){
                        //alert("counting..");
                        c++;
                    }
                    if((x[i]=='.') && (i==0)){
                        alert("You cannot use dot as first character of username");
                        reduse();
                    }
                } 
                else {
                    ++temp;
                    alert("You are not allowed to use"+x[i]+"in fullname");
                    reduse();
                }
            }
            if(c>1){
                alert("You cannot use more than one dot in username");
                reduse();
            }
            /*if (temp>0) {
                temp=0;
                prompt1();
            }*/
        }
        function saaf(f){
            if(f==3){
                document.getElementById("demo").innerHTML="";
            }
            if(f==4){
                document.getElementById("demo1").innerHTML="";
            }
            if(f==5){
                document.getElementById("demo2").innerHTML="";
            }
            if(f==6){
                document.getElementById("demo3").innerHTML="";
            }
        }
        function backlen(x,y){
            if(y==5){
                var val=document.getElementById("id5").value;
            }
            if(y==6){
                var val=document.getElementById("id6").value;
            }
            //var val=document.getElementById("id5").value;
            if(val.length<8){
                x.style.background = "red";
                if(y==6 && gvalue1==false){
                    saaf(5);
                }
                if(y==5){
                    document.getElementById("demo2").innerHTML="too weak password..";
                }
            }
            if(val.length>=8 && val.length<15){
                x.style.background="aquamarine";  
                if(y==5){
                    document.getElementById("demo2").innerHTML="strong - password.";
                }
            }
            if(val.length>=15){
                //alert("more than 15");
                x.style.background="lightgreen";
                if(y==5){
                    document.getElementById("demo2").innerHTML="very strong password";
                }
            }
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
            <br>
            <a href="#menu-toggle" class="btn btn-secondary btn-default btn-lg" id="menu-toggle"><span class="glyphicon glyphicon-align-center" style=""></span></a>
            <div style="" id="page-content-wrapper" >
                <div class="container-fluid" style="padding: 0; margin: 0;">
                   <div class="row" style="padding: 0; margin: 0;">
                      <div class="col-lg-9 col-sm-12"> 
                        
                        <form action="midcheck.php" method="get">
                        <fieldset class="xyz">
        <!-- <legend>Sign Up</legend> -->
        <center><img src="images/images.png" width="200px" height="200px"></center>
        <br>
        <div>
        FirstName:
        <br>
        <input type="text" name="fname" id="id1" value="" autofocus onblur="alfa(1)"/><br>
        LastName:
        <br>
        <input type="text" name="lname" id="id2" value="" onchange="alfa(2)"/><br>
        Gender<br>
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Others<br>
        E-Mail:<br>
        <input type="email" name="email" id="id3" onblur="alfamailuse(3)" onkeydown="saaf(3)" /><div id="demo" class="rang"></div><br>
        Choose a UserName:<br>
        <input type="text" name="uname" id="id4" onchange="alfamailuse(4)" onkeydown="saaf(4)" /><div id="demo1" class="rang"></div><br>
        Choose a Password:<br>
        <input type="password" name="Password" id="id5" onchange="alfamailuse(5)" onfocus="saaf(5)" onkeydown="backlen(this,5)" /><div id="demo2" class="rang"></div><br>
        Confirm Password:<br>
        <input type="password" name="CPassword" id="id6" onchange="alfamailuse(6)" onfocus="saaf(6)" onkeydown="backlen(this,6)" /><div id="demo3" class="rang"></div><br>
        <input type="checkbox"><a href="#" onclick="termsconditions()"><u>I agree to all terms and conditions</u></a><br>
        <input type="Submit" name="Sub" value="Sign Up" onclick="alert('Confirm?')"/>
        </div>
        
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
