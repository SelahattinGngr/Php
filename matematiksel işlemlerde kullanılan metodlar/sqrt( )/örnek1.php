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
   sqrt() : Herhangi bir sayının karekökünü bularak, bulduğu değeri geriye  döndürür
   */

   $Sayi = 9;
   $Karekok = sqrt($Sayi);

   echo  $Sayi . " sayısının karekökü :  " . $Karekok; // eğer negatif bir sayı girersen NAN yani tanımsız sonucunu verir


?>
</body>
</html>