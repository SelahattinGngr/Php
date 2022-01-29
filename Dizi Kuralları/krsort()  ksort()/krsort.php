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
ksort()  : Dizinin anahtarlarını büyük harf küçük harf duyarlı olacka şekilde a'dan z'ye  yada küçükten büyüğe sıralamak için kullanılır.
krsort() : Dizinin anahtarlarını büyük harf küçük harf duyarlı olacka şekilde z'den a'ya   yada büyükten küçüğe  sıralamak için kullanılır.
*/
$Renkler = array("bir"=> "kırmızı", "iki"=> "sarı", "uc"=> "dort", "bes"=> "mor");

echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

$Sonuc = krsort($Renkler);
echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

?>
</body>
</html