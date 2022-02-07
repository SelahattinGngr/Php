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
+ : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan değerin 1 defa yada daha fazla tekrarlanmış olması gerektiğini belirtmek için kullanılır.
*/

$Icerik = "selo - onur -- gnr --- ely ---- lol ----- lel ------ uwu";
$Desen = "/-+/";
preg_match_all($Desen, $Icerik, $Sonuc);
echo "İçeriğin orjinal adı : ". $Icerik . "<br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre>";

?>
</body>
</html>