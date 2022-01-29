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
do while : Döngü işlemi başlatır .

Yapısı :

while(Koşul){
    Kod blokları
}

do{
    Kod blokları
}while(Koşul);
*/

$Deger = 50;


do{
    echo "değişken numarası : " . $Deger . "<br />";
    $Deger--;

}while($Deger >= 0);





?>
</body>
</html