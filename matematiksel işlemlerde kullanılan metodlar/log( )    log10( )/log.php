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
  log()   : Herhangi bir sayının doğal logarimasını bularak, bulduğu değeri geriye döndürür.
  log10() : Herhangi bir sayının 10'luk tabana göre (base-10) doğal logaritmasını bulur, bulduğu değeri geriye döndürür.
  */

  $Sayi = 8;
   
  $Sonuc = log($Sayi);

  echo $Sayi . " Sayısının doğal logoritması : ". $Sonuc . "<br />";
?>
</body>
</html>