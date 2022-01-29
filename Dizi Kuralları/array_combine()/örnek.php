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
array_combine()  : İki farklı diziyi illişkisel olarak birleştirerek yeni bir dizi oluşturmak için kullanılır. 
*/

$Dizi = array("A1", "A2", "A3");
$Dizi2 = array("mavi", "kırmızı", "sarı");
$Sonuc = array_combine($Dizi, $Dizi2);

echo "<pre>";
print_r($Dizi);
echo "</pre><br />";

echo "<pre>";
print_r($Dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre><br />";


  ?>
</body>
</html