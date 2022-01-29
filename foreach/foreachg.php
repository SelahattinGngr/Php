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
foreach  : Diziler için döngü işlemi başlatır.

Yapısı:
foreach(Dizi değişkeni as Anahtar atanacak değişken => Eleman atanacak değişken){ 
        Kod blokları; 
}
*/

$Takimlar = array("GS" => "Sarı - Kırmızı", "BJK" => "Siyah - Beyaz", "FB" => "Lacivert - Sarı");

foreach($Takimlar as $wow){
        echo $wow . "<br />";   // bu şekilde yazarsak sadece elemanları alır 
}

?>
</body>
</html