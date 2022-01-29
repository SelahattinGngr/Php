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
    serialize()    :  Herhangi bir değeri saklanabilir veri türüne dönüştürerek , dönüştürdüğü değeri geri döndürür.
    unserialize()  :   serialize() metodu kullanılarak üretilmiş olan herhangi bir saklanabilir veri türünü orjinal haline dönüştürerek, dönüştüğü değeri geriye döndürür.
    */

    $Bilgiler = array("Isim" => "Selahattin", "Soyisim" =>"Güngör", "Yas"=>22,"Sehir"=>"Rize");

    echo "<pre>";
    print_r($Bilgiler);
    echo "</pre><br />";

   $Sonuc  =  serialize($Bilgiler);


    print_r($Sonuc);
    echo "<br /><br />";
  


$SonucIki = unserialize($Sonuc);

echo "<pre>";
print_r($SonucIki);
echo "</pre><br />";

  ?>
</body>
</html>