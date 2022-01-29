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
  hypot() : Belirtilecek olan uzunluk değerlerine sahip bir dik üçgenin hipotenüsünü  hesaplayarak, bulduğu değeri geriye döndürür.
  */

  $XKenarUzunlugu = 4;
  $YKenarUzunlugu = 5;

  $Hesapla = hypot($XKenarUzunlugu,$YKenarUzunlugu);
  
  echo "x kenarı " . $XKenarUzunlugu . " olan y kenarı " . $YKenarUzunlugu . " olan dik üçgenin hüpotenusü : " . $Hesapla;
?>
</body>
</html>