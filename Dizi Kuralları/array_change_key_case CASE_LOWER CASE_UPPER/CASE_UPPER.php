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
array_change_key_case()  : Dizi içerisinde bulunan anahtar veya anahtarların büyük küçük harf 
dönüştürme işlmi için yapılır.
CASE_LOWER : küçük harf yapar.
CASE_UPPER : Büyük harf yapar.
*/

$Isimler = array("IsimBir" => "Selo", "IsimIki" => "can", "IsimUc" => "zey", "IsimDort" => "apo", "IsimBes" => "wow");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Sonuc =  array_change_key_case($Isimler, CASE_UPPER);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";

?>
</body>
</html