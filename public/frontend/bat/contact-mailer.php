<?php 

$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';

 $emailcontent='<table style="width: 572px; height: 199px;" border="0" cellspacing="3" cellpadding="3">
<tbody>
<tr>
<td>Dear Admin,<strong><br /></strong></td>
</tr>
<tr>
<td>Good day to You!!!</td>
</tr>
<tr>
<td>
<p>A new Enquiry has been submitted from <b><u>{name}</u></b> through the website. Please check the information below:-</p>
</td>
</tr>
<tr>
<td><strong> Summary </strong></td>
</tr>
<tr>
<td>
<table style="width: 100%;" border="0" cellspacing="3" cellpadding="2">
<tbody>
<tr>
<td width="19%">Name</td>
<td width="2%">:</td>
<td width="79%">{name}</td>
</tr>
<tr>
<td>Subject</td>
<td>:</td>
<td>{subject}</td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td>{email}</td>
</tr>
<tr>
<td>Phone</td>
<td>:</td>
<td>{phone}</td>
</tr>
<tr>
<td>Message</td>
<td>:</td>
<td>{message}</td>
</tr>
</tbody>
</table>
<p>With Regards,<br /><br /><strong>{name}</strong></p>
</td>
</tr>
</tbody>
</table>';
$finds   = array('{name}','{email}','{phone}','{subject}','{message}');
$replace = array($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['message']);
$msg     = str_replace($finds,$replace,$emailcontent);  

$mail = new PHPMailer;

$mail->isSMTP();        // Set mailer to use SMTP
$mail->Host = 'stmp.gmail.com';   // Specify main and backup server
$mail->SMTPAuth = true;           // Enable SMTP authentication
$mail->Username = 'username@gmail.com';  // SMTP username
$mail->Password = 'demopwd';   // SMTP password
$mail->SMTPSecure = 'ssl';  // Enable encryption, 'ssl' also accepted
$mail->Port = 465;  //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('someone@domain.com', 'Name');  // Set who the message is to be sent from / Sender Address 
$mail->addAddress('someone@domain.com', 'Name');  // Mail Receiver Address / Recipient Email
$mail->addReplyTo('username@gmail.com', 'Name'); // Mail Replay Address
$mail->CharSet = 'UTF-8';
//Set who the message is to be sent to
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($msg);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';  // Mail Plane Body Text
//Set the subject line
$mail->Subject = 'New Contact Enquiry Message'; // Mail Title Subject
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }

} 