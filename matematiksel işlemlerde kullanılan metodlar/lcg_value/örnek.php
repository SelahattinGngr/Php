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
  lcg_value()  : 0 ila 1 arasında rastgele bir ondalılı sayı üreterek, değeri geriye döndürür
  */

  $SayiUretBir = lcg_value();
  $SayiUretIki = lcg_value();
  $SayiUretUc = lcg_value();
  $SayiUretDort = lcg_value();
  $SayiUretBes = lcg_value();


  echo "PHP Tarafından rastgele üretilen ondalıklı sayı değeri : " . $SayiUretBir . "<br />";
  echo "PHP Tarafından rastgele üretilen ondalıklı sayı değeri : " . $SayiUretIki . "<br />";
  echo "PHP Tarafından rastgele üretilen ondalıklı sayı değeri : " . $SayiUretUc . "<br />";
  echo "PHP Tarafından rastgele üretilen ondalıklı sayı değeri : " . $SayiUretDort . "<br />";
  echo "PHP Tarafından rastgele üretilen ondalıklı sayı değeri : " . $SayiUretBes;

  ?>
</body>
</html>