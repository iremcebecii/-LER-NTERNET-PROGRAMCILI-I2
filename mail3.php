<?php
include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/PHPMailer.php';
include  'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

$kadi=$_POST["adi"];
$ksoyadi=$_POST["soyadi"];
$kadi=$_POST["mail_adresi"];
$kadi=$_POST["bolum"];
$kadi=$_POST["diller"];
$kadi=$_POST["oneri"];

$mail=new PHPMailer();
$mail->Host='smtp.outlook.com';
$mail->Username="webtasarimivekodlamaprogrami@otlook.com";
$mail->Port=587;
$mail->SMTPSecure='tls';
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->isHTML(true);
$mail->CharSet="UTF-8";
$mail->setLanguage('tr','PHPMailer/language/');
$mail->setFrom("webtasarimivekodlamaprogrami@outlook.com";"Gelişim Üniversitesi");
$mail->addAddress("webtasarimivekodlamaprogrami@outlook.com";"Çisem Yaşar");
$mail->Subject='Deneme Mail Gönderimi';
$mail->Body="
<html>
<head></head>
<body><h3>bu mail İGMYO web tasarımı ve kodlama programı öğrencileri tarafından PHPMailer ile mail gönderimini test etmek amacıyla gönderilmiştir.</h3>
</body></html>";
$mail_gonder=$mail->send();
if($mail_gonder)
{echo "Mail gönderimi başarılı";}
else
{echo "mail gönderimi başarısız.mail hata mesajı:".
	$mail->ErrorInfo;}

?>