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
    current()  : Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
    pos()      : Dizinin göstericisi konumundaki elemanı bulmak için kullanılır.
    */
    $Isimler = array(array("owo", "uwu", "lelel"), "lul", "nen");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Isim = pos($Isimler);

    echo "dizinin göstericisi konumundaki değer : " ;
    
    echo "<pre>";
    print_r($Isim);
    echo "</pre>";



  ?>
</body>
</html