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
Fonksiyon : Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden hazırlanan küçük program parçacıklarına verilen isimdir.
Kurallar  : 
1. Fonksiyon isimleri her zaman anlamlı olarak kullanılmalıdır
2. Fonksiyon isimleri içerisinde alfanumerik değerler (a-z A-Z 0-9) ve _ (alt çizgi) kullanılabilir.
3. Fonksiyon isimleri mutlaka bir harf veya _ (alt çizgi) ile başlamalıdır.
4. Fonksiyon isimleri hicbir zaman bir rakam ile başlayamaz.
5. Fonksiyon isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler ve özel karakterler kullanılamaz.
6. Fonksiyon isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
7. Fonksiyon isimleri hiçbir zaman birden fazla kez kullanılamaz.
8. Fonksiyon isimleri kğçğk harf / büyük harf duyarlı değildir.
9. Fonksiyonlar kapsama / etki alanı kurallarına tabidir.

yapısı : 

function Isim(Parametre veya Parametreler){
        Kod blokları 
}

*/
        function YaziYaz(){
            $Deger = 0;
            while($Deger<=50){
                echo $Deger . "<br />"; 
                    $Deger++;
            }
        } 

    echo "Fonksiyon 1. kez çağırıldı.<br />";
         YaziYaz();
    echo "Fonksiyon 2. kez çağırıldı.<br />";
         YaziYaz();
    echo "Fonksiyon 3. kez çağırıldı.<br />";
         YaziYaz();
    echo "Fonksiyon 4. kez çağırıldı.<br />";
         YaziYaz();



?>
</body>
</html>