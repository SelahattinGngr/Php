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
array_unique()  :Dizinin içerisinde bulunan ve tekrarlanan elemanların fazla olanlarını silerek yeni bir dizi oluşturmak için kullanılır.
*/

$Degerler   = array("selo", "can", "ely", "selo","can","lol","GOW","ely","MC");


echo "<pre>";
print_r($Degerler);
echo "</pre><br />";


$Sonuc  =   array_unique($Degerler);  //anahtar değerleri korunur.

echo "<pre>";
print_r($Sonuc);
echo "</pre>";



?>
</body>
</html