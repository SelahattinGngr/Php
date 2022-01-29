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
  number_format() : Herhangi bir sayıyı belirtilecek olan ayraçlar doğrultusunda biçimlendirerek biçimlendirdiği değeri geriye döndürür.
  */  
  $Sayi = 8135468.4546;

  echo "Sayının orjinal hali : " . $Sayi . "<br />";

  $Formatla = number_format($Sayi,2,",",".");

  echo "Sayının formatlanmış hali : " . $Formatla;

  ?>
</body>
</html>