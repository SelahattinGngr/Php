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
array_intersect()          : Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
array_intersect_key()      : Birden fazla dizi içerisinde bulunan ve aynı anahtar değerlerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
array_intersect_assoc()    : Birden fazla dizi içerisinde bulunan ve aynı eleman değerlerine ve aynı anahtar değerine sahip elemanlardan yeni bir dizi oluşturmak için kullanılır.
*/

$Deger1 = array("selo", "gungor", "onur", "zey", "doğu", "yaso");
$Deger2 = array("selo", "gungor", "evrim", "can" );

echo "<pre>";
print_r($Deger1);
echo "</pre><br />";

echo "<pre>";
print_r($Deger2);
echo "</pre><br /><br />";

$Sonuc = array_intersect($Deger1, $Deger2);

echo "<pre>";
print_r($Sonuc);
echo "</pre><br />";




?>
</body>
</html