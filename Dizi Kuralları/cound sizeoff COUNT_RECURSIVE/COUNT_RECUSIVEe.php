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
     count()          : Dizi içerisindeki eleman sayısını bulmak için kullanılır.
     sizeof()         : Dizi içerisindeki eleman sayısını bulmak için kullanılır.
     COUNT_RECURSIVE   : Çok boyutlu dizelerde, tüm boyutlar içerisindeki elemannlarda sayma işlemine dahil edilir.
      */

     $Isimler = array("selo", "can" , array("wow", "lul" , "uwu" , "owo"), "gnr", array("aha" , "lel"), "rarar");

     echo  "<pre>";
     print_r($Isimler);
     echo  "</pre><br />";

    $Dizinin_Eleman_Sayısı = sizeof($Isimler, COUNT_RECURSIVE);

    echo "Dizinizdeki eleman sayısı : " . $Dizinin_Eleman_Sayısı;





  ?>
</body>
</html