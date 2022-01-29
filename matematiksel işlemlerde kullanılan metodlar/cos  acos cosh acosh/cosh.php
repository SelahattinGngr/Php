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
  cos()    : Herhangi bir sayının kosinüsünü bularak, bulduğu değeri geriye döndürür.
  cosh()   : Herhangi bir sayının hiperbolik kosinüsünü bularak, bulduğu değeri geriye döndürür.
  acos()   : -1 ila 1 arasındak, herhangi bir sayının ark kosinüsünü radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
  acosh()  : Herhangi bir sayının hiperbolik ark kosinüsünü bularak, bulduğu değeri geriye döndürür.

  */

$DegerBir = 5;
$DegerIki = -3;
$DegerUc  = 4.25;

$SonucBir  = cos($DegerBir);
$SonucIki  = cos($DegerIki);
$SonucUc   = cos($DegerUc);

echo $DegerBir . " sayısının kosinüsü :  " .$SonucBir . "<br />";
echo $DegerIki . " sayısının kosinüsü :  " .$SonucIki . "<br />";
echo $DegerUc . " sayısının kosinüsü :  " .$SonucUc . "<br />";



?>
</body>
</html>