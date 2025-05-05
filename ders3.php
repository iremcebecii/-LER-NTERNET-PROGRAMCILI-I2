<?php
/* $pattern="/^([01][0-9][2][0-3]):[0-5][0-9]:[0-5][0-9]$/";
$saat="22:00:64";
if(preg_match($pattern,$saat))
{
	echo "doğru bir saat formatı girilmiş";
	}
	else
	{
	echo "yanlış bir saat formatı girilmiş";
	}
	?>
	
	
<html>
<head>
	<meta charset="UTF-8">
	<title>telefon kontrolü</title>
	</head>
	<body>
	<small>lütfen GSM numaralarınızı başında "0"olmadan ilgili alana yazınız.örneğin 5xxxxxxxxx</small><br><br>
	<form name ="form" action="" method="post">
	telefon numarası:<input type="text" name="TelNo">
	<button type="submit" name="Kontrolet">kontrol et</button>
	</form>
	</body>
	</html>
	<?php
	if(isset($_POST["KontrolEt"]))
	{
		$TelefonNumarası=$_POST["TelNo"];
		$telUzunluk=strlen($TelefonNumarasi);
		$pattern="/5[0,3,4,5,6][0-9]\d\d\d\d\d\d\d$/";
		$eslesme=preg_match($pattern,$TelefonNumarasi);
		if($eslesme==1 && $telUzunluk==10)
		{
			echo "girilen GSM operatörü doğrudur.";
			
		}
		else
		{
			echo"girilen GSM operatörü doğru değil.";
	}
	}
	?>
	
	
<?php
$pattern="/<title>(.*?)</title>/i";
$content=file_get_contents("http://myo.gelisim.edu.tr/");
preg_match_all($pattern,$content,$sonuc);
echo"<pre>";
print_r($sonuc);
echo"</pre>";*/
$metin="benim adım irem cebeci gelişim üniversitende öğretim görevlisi olarak çalışıyorum.";
$degistir=preg_replace('/öğret\w+/i','doktor öğretim',$metin);
echo $degistir;

?>


