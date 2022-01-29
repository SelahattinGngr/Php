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
array_reverse(): Dizi içerisinde bulunan eleman veya elemanların tersten sıralanmasını sağlayarak yeni bir dizi oluştutmak için kullanılır.
*/

$Isimler = array("A1" => "selos", "A2" => "hasos","A3" => "miros","A4" => "serdaaaar");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Sonuc = array_reverse($Isimler);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";


?>
</body>
</html