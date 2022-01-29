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

$Deger1 = array("A1" =>"selo","A2" => "can","A3" => "bekir","A4" => "cancan","A5" => "zey","A6" => "doğu","A7" => "yaso");
$Deger2 = array("B1" => "ali","B2" => "veli", "B3" =>"aslan", "B4" =>"kemal", "B5" =>"mert", "B6" => "can" );

echo "<pre>";
print_r($Deger1);
echo "</pre><br />";

echo "<pre>";
print_r($Deger2);
echo "</pre><br /><br />";

$Sonuc = array_intersect($Deger1, $Deger2); //ilk hangisi yazılmışsa onun anahtar değri kalır.

echo "<pre>";
print_r($Sonuc);
echo "</pre><br />";




?>
</body>
</html