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
array_merge()             :   Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır.
array_merge_recursive()   :   Birden fazla diziyi birleştirerek yeni bir dizi oluşturmak için kullanılır.(Gelişmiş)
*/

$Dizi1 = array("Deger1"=> "selo", "Deger2"=> "can", "Deger3"=> "gng");
$Dizi2 = array("Deger1"=> "zikrullah", 1=> "okan", 2=> "rize", 3=> "selo");
$YeniDizi = array_merge($Dizi1, $Dizi2);

echo "<pre>";
print_r($Dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($Dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($YeniDizi);
echo "</pre><br />";






  ?>
</body>
</html