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
function Islem($Isim, $Soyisim, $DogumTarihi, $Yas, $Sehir, $Cinsiyet){
  $GelenIsim        = $Isim;
  $GelenSoyisim     = $Soyisim;
  $GelenDogumTarihi = $DogumTarihi;
  $GelenYas         = $Yas;
  $GelenSehir       = $Sehir;
  $GelenCinsiyet    = $Cinsiyet;

  $wow = "İsim : " . $GelenIsim . "<br />". "Soyisim : " . $GelenSoyisim . "<br />".     "Doğum Tarihi : " . $GelenDogumTarihi . "<br />". "Yaş : " . $GelenYas . "<br />".  "Şehir : " . $GelenSehir . "<br />" . "Cinsiyet : " . $GelenCinsiyet; 
 
  echo $wow;
}

Islem("Selahattin", "Güngör", "27.09.2000", 22, "Rize", "Erkek");

echo "<br /><br />";

Islem("Evrim", "Güngör", "09.01.2007", 15, "Rize", "Kadın");





?>
</body>
</html>