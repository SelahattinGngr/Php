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
array_pad()  : Dizinin eleman veya elemanlar sayısını baz alarak belirtilecek olan değerler doğrultusunda
baştan veya sondan doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır
*/

$Degerler = array("volkan", "hakan", "selo");

echo "<pre>";
print_r($Degerler);
echo "</pre><br />";

$Sonuc = array_pad($Degerler, -10, "wow"); // bu şekilde de baştan eklemeye başlar.

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
?>
</body>
</html