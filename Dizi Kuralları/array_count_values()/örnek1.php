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
array_count_values()  : Dizi içerisindeki elemanların kaçar kez tekrarlandığının bilgisini verir.
*/
$Renkler = array("kırmızı", "mor", "sarı", "yeşil", "kırmızı", "sarı", "pembe", "mor", "mor", "sarı");

echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

$Sonuc = array_count_values($Renkler);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
?>
</body>
</html