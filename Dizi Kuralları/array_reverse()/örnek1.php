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

$Isimler = array("selo", "can", "ely", "onr");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Sonuc = array_reverse($Isimler); // anahtar dğerlerini biz oluşturmadığımız sürece korunmaz !!!.

echo "<pre>";
print_r($Sonuc);
echo "</pre>";


?>
</body>
</html