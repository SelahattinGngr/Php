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
return : Fonksiyondan değer döndürmek için kullanılır.
 */

 function Islem(){
      $Isim = "Selahattin";
      $Soyisim = "Güngör";
      return( $Isim .  $Soyisim);
 }
 $wow  = Islem();
 echo $wow;
?>
</body>
</html>