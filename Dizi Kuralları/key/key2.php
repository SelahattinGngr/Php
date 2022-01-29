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
    key()       :  Dizinin göstericisi konumundaki elemanın anahtarını bulmak için kullanılır.
     */

    $Isimler =  array("selo", array("a2" => "lul", "lel", "lol"), "neh", "meh");
    
    
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Sonuc = key($Isimler[1]);
    echo "dizinin göstericisi konumundaki elemanın anahtar değeri : " . $Sonuc
  ?>
</body>
</html