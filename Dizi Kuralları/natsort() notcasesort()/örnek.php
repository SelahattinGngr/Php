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
natsort()      : Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sırlamak için kullanılır.
natcasesort()  : Dizinin elemanlarını  doğal sıralama şeklinde a'dan z'ye yada küçükten büyüğe sırlamak için kullanılır.
*/
$Resimler = array("resim1", "resim45", "resim12", "resim19", "resim487", "resim2654", "resim22", "resim2564");

echo "<pre>";
print_r($Resimler);
echo "</pre>";

$Sonuc = natsort($Resimler);

echo "<pre>";
print_r($Resimler);
echo "</pre>";
?>
</body>
</html