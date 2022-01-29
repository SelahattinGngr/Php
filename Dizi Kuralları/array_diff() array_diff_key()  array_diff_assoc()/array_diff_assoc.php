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
array_diff()        : Birden fazla dizi içerisinde bulunan ve farklı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
array_diff_key()    : Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
array_diff_assoc()  : Birden fazla dizi içerisinde bulunan ve farklı anahtar isimlerine ve farklı eleman değerlerine 
sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
*/

$Renkler = array("mor", "kırmızı","a1"=> "sarı", "yeşil", "siyah");
$Renkler2 = array("mor", "lila", "mavi", "kırmızı");

echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

echo "<pre>";
print_r($Renkler2);
echo "</pre><br />";

$Sonuc = array_diff_assoc($Renkler, $Renkler2);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";


?>
</body>
</html