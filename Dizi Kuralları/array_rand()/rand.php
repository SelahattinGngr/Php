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
array_rand() : Dizi içerisinde bulunan elemanlardan, belirtilecek eleman sayısı kadar rastgele eleman döndürmeyi sağlar.
*/
$Isimler = array("selo", "ely", "serkan", "özcan", "umut");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Sonuc = array_rand($Isimler, 2);

echo "<pre>";
print_r($Sonuc);
echo "</pre><br />";

echo $Isimler[$Sonuc[0]], "<br />"; 
echo $Isimler[$Sonuc[1]];

?>
</body>
</html