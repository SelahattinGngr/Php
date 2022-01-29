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
    var_dumb()   :Herahangi bir değişkene ait tüm yapıya ve bilgilere ulaşmak içinkullanılı.
    */ 

    $Deger = array("Selahattin Güngör", 2050, null, true, 15.5812);

    echo "<pre>";
    var_dump($Deger);
    echo "</pre>";
    
  ?>
</body>
</html>