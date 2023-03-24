<?php

include("connection.php");
require_once 'mailerClass/PHPMailerAutoload.php';


$mail = new PHPMailer;

//Tell PHPMailer to use SMTP 
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = '';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "";
$mail->Password = ""; 
$mail->setFrom('', 'ovahan');

//Set who the message is to be sent to
$mail->addAddress('khanmdmojahid6@gmail.com');

//Set the subject line
$mail->Subject = "contact us!";

$mail->Body = "

<form style='width: 90%; margin: auto; padding: 10px;'>
<img src=''><br><br>
<span style='font-family: sans-serif;font-size: 15px;color: #939393;'>&nbsp;&nbsp; </span><br>
<b><span style='font-family: sans-serif;font-size: 15px;color: black;'>&nbsp;&nbsp;Oral & Dental Surgeon</span><br></b>
<b><span style='font-family: sans-serif;font-size: 15px;color: black;'>&nbsp;&nbsp;Trained In Automated Endodontics </span><br>
<span style='font-family: sans-serif;font-size: 15px;color: black;'>&nbsp;&nbsp;Trained In Full Mouth Rehabilitation</span><br></b><br><br>

<b>&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 15px;color: #939393;'>m (A Center for Advance Dentistry).
</span></b>
<table style='margin-top: 30px; margin-left: 10px;font-family: sans-serif;'>
<tr>
<td>Patient Name: </td>
<td>$name</td>
</tr>
<tr>
<td>Mobile : </td>
<td>$phone</td>
</tr>



<tr>
<td>email : </td>
<td>$email</td>
</tr>
<tr>
<td>message : </td>
<td>$message</td>
</tr>
</table><br>
&nbsp;&nbsp;<span style='font-family: sans-serif;font-size: 15px;color: #939393;'>Regards,<br><b>&nbsp;&nbsp;Team ovahan</b></span><br>
</form>

";

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
$mail->isHTML(true);
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//***********end


//send the message, check for errors
if (!$mail->send())
    {
        echo "Something Went Wrong";
    }
    else
    {
        echo ("<SCRIPT LANGUAGE='JavaScript'>

        </SCRIPT>");;
    }

?>
