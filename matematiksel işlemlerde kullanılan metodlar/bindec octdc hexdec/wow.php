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
  bindec() : Herhangi binary (ikilik) sayının, decimal (onluk) sayi sistemi karşılığını bularak, bulduğu değeeri geriye döndürür.
  octdec() : Herhangi ocatal (sekizlik) sayının, decimal (onluk) sayi sistemi karşılığını bularak, bulduğu değeeri geriye döndürür.
  hexdec() : Herhangi hexadecimal (onaltılık) sayının, decimal (onluk) sayi sistemi karşılığını bularak, bulduğu değeeri geriye döndürür.
  */


  $DegerBir = "011110011011"; // bu şekilde başında 0 olan binary sayıların ya sıfırı yazmıcaksın yada bu şekilde  tırnak içine alıcaksın.
  $DegerIki = 3633;
  $DegerUc = "79B"; // Bu şekilde hexadecimal rakamları tırnak içinde yazmalısın yoksa algılayamaz.
  
  $DonusturBir = bindec($DegerBir);
  $DonusturIki = octdec($DegerIki);
  $DonusturUc = hexdec($DegerUc);

  echo $DegerBir . " Binary (ikilik) sayının, decimal (onluk) sayı sistemi karşılığpı : " . $DonusturBir . "<br />";
  echo $DegerIki . " Ocatal (sekizlik) sayının, decimal (onluk) sayı sistemi karşılığpı : " . $DonusturIki . "<br />";
  echo $DegerUc . " hexadecimal (onaltılık) sayının, decimal (onluk) sayı sistemi karşılığpı : " . $DonusturUc;
?>
</body>
</html>