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
  explode()  : Düz bir metni belirtilecek olan ayraca göre parçalayarak yeni bir dizi oluşturmak için kullanılır.
  */

  $Deger = "sel o gngr wow wow ıwı uwu";

  $Sonuc =explode (" ", $Deger);

  echo "metnin ilk hali : " . $Deger . "<br /><br />";

  echo "<pre>";
  print_r($Sonuc);
  echo "</pre>";

  ?>
</body>
</html