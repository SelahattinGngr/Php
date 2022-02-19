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
$Desen  = "/Selahattin/i";
preg_match_all($Desen, $Deger, $Sonuc);


echo "Orjinal hali : ". $Deger . "<br /><br /><br />";



echo "sonuc <br />: ";
echo "<pre>";
print_r($Sonuc);
echo "</pre>";



?>
</body>
</html>