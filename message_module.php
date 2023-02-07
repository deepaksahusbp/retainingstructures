<?php
session_start();
include 'dbconnect.php';
$sql="SELECT * FROM PROFILE WHERE Username = '{$_SESSION['USERNAME']}'";
$result=$conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['FIRSTNAME']=$row['Firstname'];
    $_SESSION['LASTNAME']=$row['Lastname'];
    $to = $row['Email'];
//session_start();
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
    $mail->Subject = 'Design Results';

    //$mail->Body = '<h3>hii</h3>';
    $mail->Body = '<h1>Cantilever Retaining Wall</h1>';
    $mail->Body.='<h3>Name Of Designer : </h3>'.$_SESSION['FIRSTNAME'].' '.$_SESSION['LASTNAME'];
    $mail->Body.='<h3>Date & Time Of Design : </h3>'.$_SESSION['DATE'];
    $mail->Body.='<h2>Input Parameters</h2>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>Retained Soil (m)</th>
        <th>Surcharge</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>&gamma; (kN/m<sup>3</sup>)</th>
        <th>&empty; (in degrees)</th>
        <th>(&mu;)</th>
        <th>f<sub>ck</sub> (N/mm<sup>2</sup>)</th>
        <th>f<sub>y</sub> (N/mm<sup>2</sup>)</th>
      </tr> ';


      $mail->Body.='<tr> <td>'.$_SESSION['HRS'].'</td> <td>'.$_SESSION['SR'].'</td> <td>'.$_SESSION['SBC'].'</td> <td>'.$_SESSION['UW'].'</td> <td>'.$_SESSION['AOR'].'</td> <td>'.$_SESSION['MU'].'</td> <td>'.$_SESSION['GC'].'</td> <td>'.$_SESSION['GS'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';

    //$mail->Body. = '<h1>Cantilever Retaining Wall</h1>';
    $mail->Body.='<h2>Proportioning</h2>';
    $mail->AddEmbeddedImage('images/2.jpg', 'cp1');
    $mail->Body.='<center><img src="cid:cp1" /></center><br><br>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>Foundation Depth(m)</th>
        <th>Length Of Base (m)</th>
        <th>Toe Projection (m)</th>
        <th>Stem Width (mm)</th>
        <th>Length of Heel (m)</th>
        <th>F1 (kN/m)</th>
        <th>F2 (kN/m)</th>
        <th>P1 (kN)</th>
        <th>P2 (kN)</th>
      </tr>';
    
    // $totalPrice=0;
    // while ($row = mysqli_fetch_array($resultOrder)){
    //     $totalPrice+=$row["Price"]*$row["quantity"];
         $mail->Body.='<tr> <td>'.$_SESSION['DOF'].'</td> <td>'.$_SESSION['LOB'].'</td> <td>'.$_SESSION['TOP'].'</td> <td>'.$_SESSION['SW'].'</td> <td>'.$_SESSION['LOH'].'</td> <td>'.$_SESSION['LFF1'].'</td> <td>'.$_SESSION['LFF2'].'</td> <td>'.$_SESSION['FP1'].'</td> <td>'.$_SESSION['FP2'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';
    //         .$row["Price"]*$row["quantity"].'</td> </tr> ';
    // }
    //$mail->Body.=' </table><br><br>';
    //$mail->Body.='<b><em>Total Price = </em>'.($totalPrice + 23).'</b>';
    $mail->Body.='<h2>Load Distribution</h2>';
    $mail->AddEmbeddedImage('images/3.jpg', 'cld1');
    $mail->Body.='<center><img src="cid:cld1" /></center><br><br>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>UDL</th>
        <th>P<sub>max</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>min</sub> (kN/m<sup>2</sup>)</th>
        <th>SBC (kN/m<sup>2</sup>)</th>
        <th>P<sub>B</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>C</sub>(kN/m<sup>2</sup>)</th>
        <th>P<sub>critical</sub>(kN/m<sup>2</sup>)</th>
        <th>FOS<sub>overturning</sub></th>
        <th>FOS<sub>sliding</sub></th>
        <th>Shear Key (mm)</th>
        <th>Critical Distance (mm)</th>
      </tr>';
    
    // $totalPrice=0;
    // while ($row = mysqli_fetch_array($resultOrder)){
    //     $totalPrice+=$row["Price"]*$row["quantity"];
         $mail->Body.='<tr> <td>'.$_SESSION['UDL'].'</td> <td>'.$_SESSION['PMAX'].'</td> <td>'.$_SESSION['PMIN'].'</td> <td>'.$_SESSION['SBC'].'</td> <td>'.$_SESSION['PB'].'</td> <td>'.$_SESSION['PCRITICAL'].'</td> <td>'.$_SESSION['FOSOM'].'</td> <td>'.$_SESSION['FOSSLIDING'].'</td><td>'.$_SESSION['A'].' x '.$_SESSION['A'].'</td><td>'.$_SESSION['D'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';

    $mail->Body.='<h2>Detailing (c/c spacing)</h2>';
    $mail->AddEmbeddedImage('images/1.png', 'cccs1');
    $mail->Body.='<center><img src="cid:cccs1" /></center><br><br>';
    $mail->Body.= '<table style="border: 1px solid black;"> <tr>
        <th>S1 (mm)</th>
        <th>S2 (mm)</th>
        <th>S3 (mm)</th>
        <th>S4 (mm)</th>
        <th>S5 (mm)</th>
        <th>S6 (mm)</th>
        <th>S7 (mm)</th>
      </tr>';
    
    // $totalPrice=0;
    // while ($row = mysqli_fetch_array($resultOrder)){
    //     $totalPrice+=$row["Price"]*$row["quantity"];
         $mail->Body.='<tr> <td>'.$_SESSION['S1'].'</td> <td>'.$_SESSION['S2'].'</td> <td>'.$_SESSION['S3'].'</td> <td>'.$_SESSION['S4'].'</td> <td>'.$_SESSION['S5'].'</td> <td>'.$_SESSION['S6'].'</td> <td>'.$_SESSION['S7'].'</td> </tr> <br>';

    $mail->Body.=' </table><br><br>';


    $mail->Body.= 'Thank you for using, Have a nice day <br><br>';
    $mail->Body.= 'This is a system generated email. Please Donot Reply <br>';
    $mail->Body.=' For more details visit (wwww.retainingstructures.com)<br>';
    $mail->Body.=' For anymore questions,<br> Please Mail us to (deepaksahusbp@gmail.com)';
    $mail->AddAddress($to);

    //$mail->Send();
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