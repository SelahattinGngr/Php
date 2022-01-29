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

    $Deger = "Selahattin Güngör";

    $Sonuc  = gettype($Deger);

    echo $Deger. "<br />";
    echo "Verinin türü ; " . $Sonuc;

  ?>
</body>
</html>