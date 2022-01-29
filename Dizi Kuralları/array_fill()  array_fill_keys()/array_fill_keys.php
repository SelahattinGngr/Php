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
array_fill()       :  Belirtilecek olan deger veya degerler doğrultusunda doldurma işlemi yaparak yeni bir dizi oluşturmak için kullanılır.
array_fill_keys()  :  Dizi içerisinde bulunan eleman veya elemanları anahtar gibi görerek, belirtilecek olan deger veya degerler doğrultusunda doldurma işlemi yaparak
 yeni bir dizi oluşturmak için kullanılır.
*/
$Renkler  = array("kırmızı", "mor", "sarı", "yeşil");
$Degerler  = array_fill_keys($Renkler, "kılıç"); // ilk dizedeki elemanları atadığımız elemanın anahtarı olarka atayabiliriz

echo "<pre>";
print_r($Degerler);
echo "</pre>";

?>
</body>
</html