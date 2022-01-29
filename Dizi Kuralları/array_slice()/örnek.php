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
  array_slice()  : Dizinin belli bölümlerini alarak yeni bir dizi oluşturmak için kullanılır.
*/
$Isimler = array("selo", "can", "ely", "apo","cs","lol");

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

$Sonuc = array_slice($Isimler,2,2, true);//sondaki true anahtar değerinin korunmasını sağlıyor

echo "<pre>";
print_r($Sonuc);
echo "</pre>";

  ?>
</body>
</html