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

$Dizi = array("araclar", "renk", "isimler");
$Dizi2 = array(array("A1"=>"ucak","A2"=>"gemi","A3"=> "araba"),"B1"=> "kırmızı",array("C1"=>"sarı","C2"=>"kırmızı","C3"=>"mor"));
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