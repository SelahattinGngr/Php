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
i   :   Düzenli ifade dahilinde kontrol edilecek içeriğin büyük harf / küçük harf ayrımı olmaksızın kontrol edilmesini sağlar.
*/

$Deger  = "Merhaba benim adım Selahattin Güngör ben PHP öğrenci seviyesindeyim. Beni facebook üzerinden Selahattin Güngör şeklinde arayarak bulabilirsiniz. ";
$Desen  = "/Selo/i";
$wow    = "Selocan";
$Sonuc    = preg_replace($Desen, $wow, $Deger );


echo "Orjinal hali : ". $Deger . "<br /><br /><br />";


echo "Değiştirilmiş hali hali : ". $Sonuc . "<br />";
/*
echo "sonuc    : ";
echo "<pre>";
print_r($Sonuc);
echo "</pre>";

*/

?>
</body>
</html>