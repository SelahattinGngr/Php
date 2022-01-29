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

    $Isimler =  array("a1" => "selo","a2" => "evrim","a3"=> "gungor");
    
    
    echo "<pre>";
    print_r($Isimler);
    echo "</pre>";

    $Sonuc = key($Isimler);
    echo "dizinin göstericisi konumundaki elemanın anahtar değeri : " . $Sonuc
  ?>
</body>
</html