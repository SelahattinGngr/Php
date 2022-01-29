<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Php Denemeleri</title>
</head>

<body>
<?php
$GelenAdSoyad = $_GET["AdSoyad"];
$GelenEmail = $_GET["EmailAdresi"];
$GelenTelefon = $_GET["Telefon"];
$GelenCinsiyet = $_GET["Cinsiyet"];
$GelenYas = $_GET["Yas"];

echo "Adınız Soyadınız : " . $GelenAdSoyad . "<br />";
echo "E-Mail adresiniz : " . $GelenEmail . "<br />";
echo "Telefon Numaranız : " . $GelenTelefon . "<br />";
echo "Cinsiyetiniz : " . $GelenCinsiyet . "<br />";
echo "Yaşınız : " . $GelenYas;





?>
</body>
</html>