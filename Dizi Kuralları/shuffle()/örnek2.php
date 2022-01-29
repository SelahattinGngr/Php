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
shuffle() : dizi içerisinde bulunan elemanların sıralarını karıştırılması için kullanılır.
*/
$Renkler = array("R1" => "kırmızı", "R2" => "sarı", "R3" => "yeşil", "R4" => "mor");

echo "<pre>";
print_r($Renkler);
echo "</pre><br />";

shuffle($Renkler,); // anahtar yinede göz ardı edilir.

echo "<pre>";
print_r($Renkler);
echo "</pre>";

?>
</body>
</html