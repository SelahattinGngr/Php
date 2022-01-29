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
   pow() : Herhangi bir sayının belirtilecek değer kadar üssünü bularak bulduğu değeri geriye döndürür.
   */

   $Sayi = -5;
   $SayiIki = -3;

   $Sonuc = pow($Sayi,$SayiIki); // farklı bir matematiği var şu an bilmiyorsun araştır bunu.

   echo $Sayi . " üssü " . $SayiIki . " = " . $Sonuc;
?>
</body>
</html>