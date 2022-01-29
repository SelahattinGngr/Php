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
  next()   :  Dizinin göstericisi konumundaki anahtarı veya elemanı bir ileri almak için kullanılır.
  prev()   :  Dizinin göstericisi konumundaki anahtarı veya elemanı bir geri almak için kullanılır.
  reset()  :  Dizinin göstericisi konumundaki anahtarı veya elemanı varsayılan (ilk) konuma geri döndürmek için kullanılır.
  */

    $Isimler = array("c4", "selo", "ely", "evr");

    echo "<pre>";
    print_r($Isimler);
    echo "</pre><br />";

    $Gösterici = current($Isimler);
    $Anahtar = key($Isimler);
    echo "dizinin göstericisi : " . $Gösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $Anahtar ."<br /><br />";


    $AGösterici = next($Isimler);
    $AAnahtar  = key($Isimler);
    echo "dizinin göstericisi : " . $AGösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $AAnahtar ."<br /><br />";

    $BGösterici = next($Isimler);
    $BAnahtar  = key($Isimler);
    echo "dizinin göstericisi : " . $BGösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $BAnahtar ."<br /><br />";

    $CGösterici = next($Isimler);
    $CAnahtar  = key($Isimler);
    echo "dizinin göstericisi : " . $CGösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $CAnahtar ."<br /><br />";

    $DGösterici = prev($Isimler);
    $DAnahtar  = key($Isimler);
    echo "dizinin göstericisi : " . $DGösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $DAnahtar ."<br /><br />";

    $EGösterici = reset($Isimler);
    $EAnahtar  = key($Isimler);
    echo "dizinin göstericisi : " . $EGösterici ."<br />";
    echo "dizinin göstericisinin anahtarı : " . $EAnahtar ."<br /><br />";


  ?>
</body>
</html