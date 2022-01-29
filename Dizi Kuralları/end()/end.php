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
    end()  : Dizi göstericisinin son konumundaki elemanı bulmak için kullanılır.

    */

  $ISimler = array("ely", "selo", "lul");

  echo "<pre>";
  print_r($ISimler);
  echo "</pre><br />";

  $Isim = end($ISimler);
 
  echo "dizinin göstericisi konumundaki son eleman : " . $Isim;


  ?>
</body>
</html