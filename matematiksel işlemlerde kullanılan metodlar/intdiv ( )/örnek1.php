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
  intdiv() : Herhangi bir sayının belirtilecek olan sayı değerine tam olarak kaç defa bölünebildiğini bularak, bulduğu değeri geriye döndürür.
  */
  $Sayi = 124;
  $SayiBir = 5;
  
  $Sonuc = intdiv($Sayi, $SayiBir);

  echo $Sayi . " sayısı  " . $SayiBir . " sayısına " . $Sonuc . " kez tam bölünür.";

?>
</body>
</html>