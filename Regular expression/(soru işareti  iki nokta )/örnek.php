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
(?:)   : Düzenli ifadlerde alt grup oluşturmak için kullanılır .
*/

$Icerik = "Selorizede yaşıyor. Ely kalbimde yaşıyor.tarık istanbulda yaşıyor. hasan artvinde yaşıyor. ";
$Desen = "/onur(?:mert|gngr)/";
preg_match_all($Desen, $Icerik, $Sonuc);
echo "İçeriğin orjinal adı : ". $Icerik . "<br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre>";

?>
</body>
</html>