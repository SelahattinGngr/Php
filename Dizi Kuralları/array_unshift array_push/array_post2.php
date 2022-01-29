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
    array_unshift()    :  Dizinin en başına yeni eleman veya elemanlar eklem için kullanılır. aynı zamanda eklenecek eleman veya elemanların  diziye dahil edilmesi ile dizi
     içeriğinin toplam elaman sayısı değerini geriye döndürür
    array_push()       :   Dizinin en sonuna yeni eleman veya elemanlar eklem için kullanılır. aynı zamanda eklenecek eleman veya elemanların  diziye dahil edilmesi ile dizi
     içeriğinin toplam elaman sayısı değerini geriye döndürür
    */

    $Isimler   =   array("selo", "anan", "lol", array("aha", "owo"), "lel" , "uwu");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Islem  = array_push($Isimler[3], "rarar", "wowowo");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

  ?>
</body>
</html