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
array_sum()     : Dizi içerisindeki eleman veya elemanların rakamsal işlem içermesi durumunda tüm elemanların toplamını alır.
array_product() : Dizi içerisindeki eleman veya elemanların rakamsal işlem içermesi durumunda tüm elemanların çarpımını alır.
*/
$Sayılar = array(2, 5, 6, 4, 8,);

echo "<pre>";
print_r($Sayılar);
echo "</pre>";

$Sonuc  = array_sum($Sayılar);

echo "Dizide ki sayıların toplamı : ", $Sonuc ;
?>
</body>
</html