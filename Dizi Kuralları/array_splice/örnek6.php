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
$Ekisimler = array("hursit", "memo", "cano");
echo"<pre>";
print_r($Isimler);
echo"</pre><br />";

array_splice($Isimler, 1, 3,$Ekisimler); // birden fazla isim bu şekilde eklenir.

echo"<pre>";
print_r($Isimler);
echo"</pre><br />";

  ?>
</body>
</html