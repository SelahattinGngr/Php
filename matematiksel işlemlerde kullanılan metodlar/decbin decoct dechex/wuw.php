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
  decbin () : Herhangi bir decimal (onluk) sayının, binary (ikilik) sayı sistemi karşılığını bularak bulduğu değeri geriye döndürür.
  decoct () : Herhangi bir decimal (onluk) sayının, octal (sekizlik) sayı sistemi karşılığını bularak bulduğu değeri geriye döndürür.
  dechex () : Herhangi bir decimal (onluk) sayının, hexadecimal (onaltılık) sayı sistemi karşılığını bularak bulduğu değeri geriye döndürür.
  */

  $Deger = 1453;

  $BinaryDonustur      = decbin($Deger); 
  $OctalDonustur       = decoct($Deger);
  $HexadecimalDonustur = dechex($Deger);


  echo $Deger . " decimal değerinin binary (ikilik) karşılığı : " . $BinaryDonustur . "<br />"; // burda başında sıfır olsa bile php otomatik olarak yazmaz.
  echo $Deger . " decimal değerinin octal (sekizlik) karşılığı : " . $OctalDonustur . "<br />";
  echo $Deger . " decimal değerinin hexadecimal (onaltılık) karşılığı : " . $HexadecimalDonustur;

?>
</body>
</html>