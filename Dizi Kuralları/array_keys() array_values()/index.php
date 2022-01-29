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
array_keys()   :  Dizinin anahtarlarını alıp yeni bir dizi oluşturmak için kullanılır.
array_values() :  Dizinin elemanlarını alıp yeni bir dizi oluşturmak için kullanılır.
*/

$Isimler = array("isim1" =>"selo", "isim2" => "can","isim3" => "zey","isim4" => "apo");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Islem = array_keys($Isimler);
echo "<pre>";
print_r($Islem);
echo "</pre>";
?>
</body>
</html