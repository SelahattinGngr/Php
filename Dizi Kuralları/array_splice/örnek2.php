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
array_spliice() : Dizinin belli bölümlerini alıp, belli bölümlerini silip, 
eğer belirtilirse yeni elemanlarda ekleyerek yeni bir dizi oluşturmak için kullanılır.
*/

$Isimler = array("selo", "can", "ely", "apo","cs","lol");

echo"<pre>";
print_r($Isimler);
echo"</pre><br />";

$Sonuc = array_splice($Isimler, 4); // değişkene atanırsa normal yazılanın aksine ilk 4 haricinde kalan birimleri alır

echo"<pre>";
print_r($Sonuc);
echo"</pre><br />";

  ?>
</body>
</html