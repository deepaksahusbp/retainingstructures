<?php
session_start();
//$_SESSION['TOTEMP']="deepaksahusbp@gmail.com";
include 'dbconnect.php';
$sql="SELECT * FROM PROFILE WHERE Username = '{$_SESSION['USERNAME']}'";
$result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['FIRSTNAME']=$row['Firstname'];
    $_SESSION['LASTNAME']=$row['Lastname'];
    $to = $row['Email'];
    // $totemp;
    // echo "<script>
    //         var answer=prompt('Sending Mail to (You can provide other email address also) : ','$to');
    //         alert(answer);
    //       $totemp = document.write(answer);
    //       alert($totemp);
    //       </script>";
    //       //$totemp = "<script type='text/javascript'>alert(answer); document.write(answer); </script>";
    // if ($totemp == null || $totemp == "") {
    //     echo "<script>
    //         alert('Invalid Input.\n Sending Mail to : $to');
    //           </script>";
    // }
    // else{
    //     $to = "<script type='text/javascript'> document.write(answer); </script>";
    // }
//Message:
    require_once('PHPMailer-master/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->isHTML();
    $mail->Username = 'retainingstructures@gmail.com';
    $mail->Password = 'Retainingstructures1@';
    $mail->SetFrom('retainingstructures@gmail.com');
    $mail->Subject = 'Design Results - Gravity Retaining Wall';

    //$mail->Body = '<h3>hii</h3>';
    $mail->Body = '<h1>Gravity Retaining Wall</h1>';
    $mail->Body.='<h3>Name Of Designer : </h3>'.$_SESSION['FIRSTNAME'].' '.$_SESSION['LASTNAME'];
    $mail->Body.='<h3>Date & Time Of Design : </h3>'.$_SESSION['DATE'];
    $mail->Body.='<h2>Input Parameters</h2>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>Retained Soil (m)</th>
        <th>Top Width (m)</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>&gamma; (kN/m<sup>3</sup>)</th>
        <th>&empty; (in degrees)</th>
        <th>(&mu;)</th>
        <th>Density of Wall (N/mm<sup>2</sup>)</th>
      </tr> ';


      $mail->Body.='<tr> <td>'.$_SESSION['HRS'].'</td> <td>'.$_SESSION['SR'].'</td> <td>'.$_SESSION['SBC'].'</td> <td>'.$_SESSION['UW'].'</td> <td>'.$_SESSION['AOR'].'</td> <td>'.$_SESSION['Q'].'</td> <td>'.$_SESSION['GC'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';

    //$mail->Body. = '<h1>Cantilever Retaining Wall</h1>';
    $mail->Body.='<h2>Designed Gravity wall</h2>';
    $mail->AddEmbeddedImage('images/MOD2.png', 'gravity');
    $mail->Body.='<center><img src="cid:gravity" /></center>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>Foundation Depth(m)</th>
        <th>Length Of Base (m)</th>
        <th>FOS<sub>sliding<sub></th>
        <th>P<sub>max</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>min</sub> (kN/m<sup>2</sup>)</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>Lateral Force LF (kN/m)</th>
        <th>Force P<sub>a</sub> (kN)</th>
      </tr>';
    
    // $totalPrice=0;
    // while ($row = mysqli_fetch_array($resultOrder)){
    //     $totalPrice+=$row["Price"]*$row["quantity"];
         $mail->Body.='<tr> <td>'.$_SESSION['DOF'].'</td> <td>'.$_SESSION['LOB'].'</td> <td>'.$_SESSION['FOSSLIDING'].'</td> <td>'.$_SESSION['PMAX'].'</td> <td>'.$_SESSION['PMIN'].'</td> <td>'.$_SESSION['SBC'].'</td> <td>'.$_SESSION['LFF2'].'</td> <td>'.$_SESSION['FP2'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';
    

    $mail->Body.= 'Thank you for using, Have a nice day <br><br>';
    $mail->Body.= 'This is a system generated email. Please Donot Reply <br>';
    $mail->Body.=' For more details visit (wwww.retainingstructures.com)<br>';
    $mail->Body.=' For anymore questions,<br> Please Mail us to (deepaksahusbp@gmail.com)';
    $mail->AddAddress($to);

    if(!$mail->Send()){
        echo "Mail Not Sent. Retry";
        echo "<script type='text/javascript'> alert('Ooooppppsssss!!!!!!! Mail Not Sent. Please Retry') </script>";
        echo "<script>self.location='learnalanguage.php';</script>";
    }
    else{
        echo "Mail Sent";
        echo "<script type='text/javascript'> alert('Mail Sent Successfully. Please Check Inbox.') </script>";
        echo "<script>self.location='learnalanguage.php';</script>";
    }
?>