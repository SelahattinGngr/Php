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
  rand()         : Rastgele bir sayı üreterek ürettiği değeri geriye döndürür.
  getrandmax()   : rand() metodu kullanılarak üretilebilecek en büyük sayıynın değerini bularak, bulduğu değeri geriye döndürür.
  */

  $SayıUretBir = rand();
  $SayıUretIki = rand();
  $SayıUretUc = rand();
  $SayıUretDort = rand();
  $SayıUretBes = rand();


  echo "PHP tarafından üretilen sayı değeri : " . $SayıUretBir . "<br />";
  echo "PHP tarafından üretilen sayı değeri : " . $SayıUretIki . "<br />";
  echo "PHP tarafından üretilen sayı değeri : " . $SayıUretUc . "<br />";
  echo "PHP tarafından üretilen sayı değeri : " . $SayıUretDort . "<br />";
  echo "PHP tarafından üretilen sayı değeri : " . $SayıUretBes;



  ?>
</body>
</html>