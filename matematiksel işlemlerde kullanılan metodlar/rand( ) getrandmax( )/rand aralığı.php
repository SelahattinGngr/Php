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

  $SayıUretBir = rand(11,25165);



  echo "PHP tarafından metodu tarafında 11 ile 25165 aralığında üretilen sayı  : " . $SayıUretBir . "<br />";



  ?>
</body>
</html>