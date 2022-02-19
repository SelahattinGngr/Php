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


$Icerik = "Selo Gngr.";
$Desen  = "/(?<Isim>Selo) (?<Soyisim>Gngr)/";
preg_match($Desen, $Icerik, $Sonuc);

echo "İçeriğin orjinal adı : ". $Icerik . "<br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
?>
</body>
</html>