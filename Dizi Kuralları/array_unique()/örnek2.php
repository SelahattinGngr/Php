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

$Degerler   = array("selo", 8, "selo", 10, "gnr", 8, "asl", 80, "uwu", 8,  "owo", 10, "lul", "uwu");


echo "<pre>";
print_r($Degerler);
echo "</pre><br />";


$Sonuc  =   array_unique($Degerler); 

echo "<pre>";
print_r($Sonuc);
echo "</pre>";



?>
</body>
</html