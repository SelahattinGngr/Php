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
 ceil()  : Herhangi bir onlalıklı sayıyı yukarıya yuvarlarak , yuvarlanma sonucu oluşan değeri geriye döndürür.
 floor() : Herhangi bir onlalıklı sayıyı aşşağıya yuvarlarak , yuvarlanma sonucu oluşan değeri geriye döndürür.
 round() :  Herhangi bir onlalıklı sayıyı kendisine en yakın olan tam sayıya yuvarlama sonucu oluşan değeri geriye döndürür.
 */


  $Deger = 841465378;

  $DegerYuvarla = round($Deger,-2); // sonradan verilen sayı virgülden sonrasını ayarlamak için kullanılır.
  
  

  echo "Değerin orjinal hali : " . $Deger . "<br />";
  echo "Degerin round ile yuvarlanmış hali : " . $DegerYuvarla;
 
  
  ?>
</body>
</html>