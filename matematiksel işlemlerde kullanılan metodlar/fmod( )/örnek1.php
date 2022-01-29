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
   fmod() : Herhangi bir sayının belirtilecek olan değere göre modulüsünü yani kalanını bularak bulduğu değeri geriye döndürür.
   */

   $DegerBir = 10;
   $DegerIki = 3;

   //$Modulus = $DegerBir % $DegerIki;   bu şekilde yazılımın farklı bir türü.
   $Modulus = fmod($DegerBir,$DegerIki);

   echo $DegerBir . " % " . $DegerIki . " = " . $Modulus;
?>
</body>
</html>