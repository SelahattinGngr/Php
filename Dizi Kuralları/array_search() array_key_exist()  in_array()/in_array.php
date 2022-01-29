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
array_search()      :   Dizi içerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanı aramak ve ilgili elemanın anahtarını bulmak için kullanılır.
array_key_exists()   :   Dizi içerisinde bulunan anahtar veya anahtarlar dahilinde, belirtilecek olan anahtarın olup olmadığını kontrol etmek için kullanılır.
in_array()          :   Dizi içerisinde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanın olup olmadığını kontrol etmek için kullanılır.
*/
$Degerler = array("A1" => "evr", "A2" => "selo", "A3" => "gngr", "A4" => "aslı");

echo "<pre>";
print_r($Degerler);
echo "</pre>";

$Sonuc = in_array("cancan", $Degerler);  // değerin olup olmadığını kontrol eder vet yada hayır şeklinde cevap verir (0,1).

echo "sonuç: ", $Sonuc;
?>
</body>
</html