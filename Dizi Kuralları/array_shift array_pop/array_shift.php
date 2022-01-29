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

    array_shift : Dizi içerisindeki bulunan ilk elemanı silmek için kullanılır . Aynı zamanda dizi içerisindeeki 
    silinen eleman değerini geri dönüştürür
    array_pop   :  Dizi içerisindeki bulunan son elemanı silmek için kullanılır . Aynı zamanda dizi içerisindeeki 
    silinen eleman değerini geri dönüştürür
     */

    $Isimler = array("selo", "rize", "wow", "nie", "ama", );

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    array_shift($Isimler);

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";


  ?>
</body>
</html