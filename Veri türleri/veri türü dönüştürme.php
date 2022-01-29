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
    Degerler                      : (boolean) & (boool) / (integer) & (int) / (float) & (double) / (real) / (string) / (array) / (object) / (unset)
    (boolean) & (boool)           : Mantıksal veri türüne Dönüştürür.
    (integer) & (int)             : Tam sayı veri türüne dönüştürme.
    (float) & (double) & (real)   : Ondalıklı sayı veri türüne dönüştürme.
    (string)                      : Alfanumerik (a-z A-Z 0-9) veri türüne dönüştürme
    (array)                       : Dizi veri türüne Dönüştürme.
    (object)                      : Nesne veri türüne dönüştürme.
    (unset)                       : Null (Boş / Değeri olmayan) veri türüne dönüştürme 
    */


    $Deger = "8";
    $Sonuc = gettype($Deger);

    echo $Deger . "<br />";
    echo "veri türü : " . $Sonuc . "<br />" . "<br />"; 

    $DegerIki = (int)"8";
    $SonucIki = gettype($DegerIki);

    echo $DegerIki . "<br />";
    echo "veri türü : " . $SonucIki; 
    


  
  ?>
</body>
</html>