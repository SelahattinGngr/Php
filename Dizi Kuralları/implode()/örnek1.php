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
  implode() : Diziyi birleştirerek düz bir metin içeriği oluşturmak için kullanılır.
  */

  $Deger = array("selo", "can", "hakkı", "onur", "evrim", "serkan");

  echo "<pre>";
  print_r($Deger);
  echo "</pre><br />";

  $Sonuc = implode($Deger);

  echo $Sonuc;
  
  ?>
</body>
</html