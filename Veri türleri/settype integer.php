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
    settype()  :  Herhangi bir değişken içeriğinin veri türünü belirlemek / değiştirmek için kullanılır.

    */

    $Deger  =   "8";
    $DegerIcerigininVeriTuru  =  gettype($Deger);

    echo "Verinin ilk hali : " . $Deger. "<br />";
    echo "Verinin Ilk Türü : " . $DegerIcerigininVeriTuru. "<br /><br />";

    settype($Deger, "integer");

    $DegerIcerigininSonVeriTuru = gettype($Deger);

    echo "Verinin ilk hali : " . $Deger. "<br />";
    echo "Verinin Ilk Türü : " . $DegerIcerigininSonVeriTuru;

    


  
  ?>
</body>
</html>