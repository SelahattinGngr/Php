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
  min() : Değişken içeriklerinin veya dizi elemanlarıın rakamsal eleman içermesi durumunda en küçük rakamsal değeri bularak,bulduğu değeri geriye döndürür.
  max() : Değişken içeriklerinin veya dizi elemanlarıın rakamsal eleman içermesi durumunda en büyük rakamsal değeri bularak,bulduğu değeri geriye döndürür.
  */

$Rakamlar = array(5, 12, 54, 65, 467, 231, 87, 324, 54);

echo "<pre>";
print_r($Rakamlar);
echo "</pre><br />";

$DizininEnKucukElemanı = min($Rakamlar);

echo "Yukarıdaki dizinin en küçük eleman değeri : ". $DizininEnKucukElemanı . "<br />" . "<br />";

echo "Değişken elemanları : 5, 12, 54, 65, 1, 467, 231, 87, 324, 54". "<br />";

$RakamlarIki = min(5, 12, 54, 65, 1, 467, 231, 87, 324, 54);

echo "Değişkenin  en küçük eleman değeri : ". $RakamlarIki;
  ?>
</body>
</html>