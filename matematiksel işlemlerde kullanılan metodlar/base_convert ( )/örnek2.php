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
  base_convert() : Herhangi bir binary (ikilik), octal (sekizlik), decimal (onluk),hexadecimal (onaltılık) sayı sistemleri, karşılığını bularak,bulduğu değeri geriye döndürür.
  */



  $Deger = 154;

  $BinaryDonustur      = base_convert($Deger, 8, 2); //ilk önce olduğu türü belli edicez sonr adönüştürmek istediğimiz türü belirticez
  $DecimalDonustur       = base_convert($Deger, 8, 10);
  $HexadecimalDonustur = base_convert($Deger, 8, 16);


  echo $Deger . " Octal Sayısının, binary (ikilik) sayı sistemi karşılığı : " . $BinaryDonustur . "<br />";
  echo $Deger . " Octal Sayısının, decimal (onluk) sayı sistemi karşılığı : " . $DecimalDonustur . "<br />";
  echo $Deger . " Octal Sayısının, hexadecimal (onaltılık) sayı sistemi karşılığı : " . $HexadecimalDonustur;

?>
</body>
</html>