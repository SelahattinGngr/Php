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
()    : Düzenli ifadelerde grup tanımlamak için kullanılır. 
(x|y) : Düzenli ifade dahilinde kontrol edilebilecek olan içeriğin karakter diziliminde bulunan değerin x yada y karakterlrinden heerhangi birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
*/

$Icerik = "Selorizede yaşıyor. Ely kalbimde yaşıyor.tarık istanbulda yaşıyor. hasan artvinde yaşıyor. ";
$Desen = "/(onur| mert)gnr/";
preg_match_all($Desen, $Icerik, $Sonuc);
echo "İçeriğin orjinal adı : ". $Icerik . "<br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre>";

?>
</body>
</html>