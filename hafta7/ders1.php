<?php
//base64 ile şifreleme
$sifre="GelisimUniversitesi34";
$sifrelendi=base64_encode($sifre);
$sifre_cozuldu=base64_decode($sifrelendi);
echo"girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri: ".$sifrelendi."<br>".
"şifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";

//Gzcocompress ile şifreleme
echo "<h4><i>string ifade boyutu küçültme</i></h4>";
$yazi="What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
 when an unknown printer took a galley of type and scrambled it to make a type 
 specimen book. It has survived not only five centuries, but also the leap into 
 electronic typesetting, remaining essentially unchanged. It was popularised in 
 the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
 and more recently with desktop publishing software like Aldus PageMaker including 
 versions of Lorem Ipsum.";
 $kucultme=gzcompress($yazi);
 echo "orjinal boyut: ".strlen($yazi)."<br>".
 "sıkıştırılmış boyut : ".strlen($kucultme)."<br>";
 
 echo "<h4><i>şifreleme</i></h4>";
 $sifre="GelisimUniversitesi34";
 $sifrelendi=gzcompress($sifre);
 $sifre_cozuldu=gzcompress($sifrelendi);
 echo "girilen şifre: ".$sifre."<br>".
 "şifrelenmiş veri: ".$sifrelendi."<br>".
 "şifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";
 

//urlencode kullanımı 
$sifre="gelişim üniversitesi meslek yüksekokulu";
$sifrelendi=urlencode($sifrelendi);
$sifre_cozuldu=urldecode($sifrelendi);
echo "girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri: ".$sifrelendi."<br>".
"sifrenin çözümlenmiş hali: ".$sifre_cozuldu."<br>";

//MDS kullanımı
echo "<h4>MDS kullanımı <h4>";
$sifre="GelisimUniversitesi34";
$ekle="Avcılar".$sifre;
$sifrelendi=md5($sifre);
$sifrelendi2=md5($ekle);
echo "girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri:".$sifrelendi."<br>";
"ifade eklenilmiş şifre:".$sifrelendi2."<br>";

//SHA1 kullanımı 
echo "<h4>sha1 kullanımı </h4>"."<br>";
$sifre="GelisimUniversitesi34";
$sifrelendi=sha1($sifre);
echo "girilen şifre:".$sifre."<br>";
"şifrelenmiş veri:".$sifrelendi."<br>";
$guvenlisifre=sha1(md5($sifre));
echo "güvenli şifre oluşturmanın yolu :".$guvenlisifre."<br>";



//CRC32 Kullanımı
echo "<h4>CRC32 kullanımı <h4>"."<br>";
$sifre="GelisimUniversitesi34";
$sifrelendi=crc32($sifre);
echo "girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri:".$sifrelendi."<br>";



//HASH Kullanımı
echo "<h4>Hash kullanımı <h4>"."<br>";
$sifre="GelisimUniversitesi34";
$sifrelendi=hash('sha256',$sifre);
echo "girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri:".$sifrelendi."<br>";



//CRYPT ile şifreleme
echo "<h4>Crypt ile şifreleme</h4>"."<br>";
error_reporting();

//basit kullanım 
$sifre="GelisimUniversitesi34";
//$sifrelendi=crypt($sifre);
echo" basit kullanım ile şifreleme:".$sifrelendi."<br>";

//CRYPT_STD_DES KULLANIMI
	if(CRYPT_STD_DES)
{
	$sifrelendi=crypt($sifre,"Ge");
	echo "standart DES şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_EXT_DES)
{
	$sifrelendi=crypt($sifre,"Gelisim");
	echo "Gelişmiş DES şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_MD5)
{
	$sifrelendi=crypt($sifre,'$GelisimUnive$');
	echo "MD5 şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_BLOWFISH)
{
	$sifrelendi=crypt($sifre,'$2a$GelisimUniversite$');
	echo "Blowfısh şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_SHA256)
{
	$sifrelendi=crypt($sifre,'$5$GelisimUniversite$');
	echo "SHA256 şifrelemesi:".$sifrelendi."<br>";
}
if(CRYPT_SHA512)
{
	$sifrelendi=crypt($sifre,'$6$GelisimUniversite$');
	echo "SHA512 şifrelemesi:".$sifrelendi."<br>";
}


//PASSWORD_hash kullanımı (önemli bununla şifrele)
echo "<h4>Password_hash kullanımı <h4>"."<br>";
$sifre="GelisimUniversitesi34";
$sifrelendi=password_hash($sifre,PASSWORD_DEFAULT);
echo "girilen şifre: ".$sifre."<br>".
"şifrelenmiş veri:".$sifrelendi."<br>";
?>