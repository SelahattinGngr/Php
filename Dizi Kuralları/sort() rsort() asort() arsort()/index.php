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
sort()    : Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde a'dan z'ye küçükten büyüğe sıralamak için kullanılır.
rsort()   : Dizinin elemanlarını büyük harf küçük harf duyarlı olacak şekilde z'den a'ya  büyükten küçüğe sıralamak için kullanılır.
asort()   : Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtlarını bozmayacak şekilde a'dan z'ye yada küçükten büyüğe sıralamak için kullanılır.
arsort()  : Dizinin elemanlarını büyük harf küçük harf duyarlı olacak ve anahtlarını bozmayacak şekilde z'den a'ya yada  büyükten küçüğe sıralamak için kullanılır.
*/
$Degerler = array("selo", "onur", "gungor", "aras", "KARGO", "AÇ", "kapıyı" );

echo "<pre>";
print_r($Degerler);
echo "</pre>";

 $Sonuc = sort($Degerler);
 echo "<pre>";
print_r($Degerler);
echo "</pre>";
?>
</body>
</html