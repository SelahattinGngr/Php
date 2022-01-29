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
min()  : Dizi içerisinde bulunan eleman veya elemanların rakamsal dgerler içermesi durumunda en küçük rakamsal deger içeren elemanı bulmak için kullanılır.
max()  : Dizi içerisinde bulunan eleman veya elemanların rakamsal dgerler içermesi durumunda en büyük rakamsal deger içeren elemanı bulmak için kullanılır.
*/
$Sayılar =  array(8, 98, 4, 45, 21, 1, 6, 7, 21, 65);
echo "<pre>";
print_r($Sayılar);
echo "</pre>";

$Sonuc = min($Sayılar);

echo "Sayılar dizisinin en küçük elemanı : ", $Sonuc , "'dir", "<br />"; // konu  dışı eksili (-) değerleri de algılayabilir.

$Sonuc2 = max($Sayılar);

echo "Sayılar dizisinin en büyük elemanı : ", $Sonuc2 , "'dir";


?>
</body>
</html