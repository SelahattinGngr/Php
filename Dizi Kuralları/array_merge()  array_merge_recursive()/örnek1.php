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

$Dizi1 = array(0 => "selo", 1=> "selahattin", 2=> "gngr");                    //numaralı anahtar verildiğinde aynı olsa da sorun olmaz
$Dizi2 = array(0=> "evr", 1=> "onr", 2=> "ylz", 3=> "mst");
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