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
    gettype() : Herhangi bir değişken içeriğinin veri türünü bularak, bulduğu değeri geriye döndürür.

    */

    $Deger = array("selo", "gngr", "inanılmaz", "amk");

    $Sonuc  = gettype($Deger);

    echo "<pre>";
    print_r($Deger);
    echo "</pre><br />";





    echo "Verinin türü ; " . $Sonuc;

  ?>
</body>
</html>