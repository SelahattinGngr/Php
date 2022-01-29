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
  rad2deg() : Radyan değeri cinsinden herhangi bir sayının, derece değeri cinsinden karşılığını bularak, nulduğu değeri geriye döndürür.
  deg2rad() : Derece değeri cinsinden herhangi bir sayının, radyan değeri cinsinden karşılığını bularak, nulduğu değeri geriye döndürür.
  */

  $Deger = 180;

  $Sonuc = rad2deg($Deger);

  $GeriCevir = deg2rad($Sonuc);

  echo "Orjinal değeri : " . $Deger ."<br />";
  echo "Derece değeri : " . $Sonuc ."<br />";
  echo "Radyan değeri : " . $GeriCevir ;
 
?>
</body>
</html>