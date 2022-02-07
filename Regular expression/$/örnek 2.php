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
$   :  Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminin sonu ile düzenli ifade arasında bir eşleşme aramak için kullanılır.
*/

$Icerik = "Ders konusu : PHP'dir";
$Desen  = "/PHP$/";
$Sonuc  = preg_match($Desen, $Icerik);

echo "Orjinal içerik : " . $Icerik . "<br />";
echo "desen : " . $Desen . "<br /><br />";

echo "<pre>";
print_r($Sonuc);
echo "</pre><br /><br />";


if($Sonuc==1){
    echo "Aradığınız desen metnin sonunda mevcut.";
}else{
 echo "Aradığınız desen metnin sonunda mevcut değil.";
}

?>
</body>
</html>