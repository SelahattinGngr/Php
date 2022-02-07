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
^    : Düzenli ifade dahilinde kontrol edilecek olan içriğin karakter diziliminin başlangıcı ile düzenli ifade arasında eşleşme aramak için kullanılır.
*/

$Icerik = "PHP7 A'dan Z'ye PHP7 Görsel Eğitim Seti";
$Desen  = "/^PHP7/";
$Sonuc =  preg_match($Desen, $Icerik);

if($Sonuc==1){
    echo "Aranılan değer içeriğin başında yer almaktadır";
}else{
  echo "Aranılan değer içeriğin başında yer almamaktadır";
}

?>
</body>
</html>