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
/*
compact() : Dizi içerisinde bulunan elemanı /elemanları anahtar gibi görerek daha önceden aynı isimle tanımlanmış olan
 değişkenlerden ilgili anahtarlar deger üretmek için kullanılır 
*/
$isim         =   "Selahattin";
$soyisim      =   "Gungor";
$dogumtarihi  =   "2000";



$Bilgiler = array("isim", "soyisim", "dogumtarihi");
echo "<pre>";
print_r($Bilgiler);
echo "</pre><br />";

$Sonuc = compact($Bilgiler);
echo "<pre>";
print_r($Sonuc);
echo "</pre>";

?>
</body>
</html