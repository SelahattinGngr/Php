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
$Desen  = "/Selo(?:gnr )/";
$Sonuc  = preg_match_all($Desen, $Icerik);





echo "İçeriğin orjinal adı : ". $Icerik . "<br />";

if($Sonuc==1){
  echo "Aranan değer dizi içerisinde var.";
}else{
  echo "Aranan değer dizi içerisinde yok.";
}
?>
</body>
</html>