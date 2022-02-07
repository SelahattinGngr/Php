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
\b  : Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun olabilecekmetin,
 parçalarını karakter dizilimi içerisinde  kelime başına yada sonunda aramak için kullanılır.
\B  :Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun olabilecekmetin,
 parçalarını karakter dizilimi içerisinde  kelimnin içerisinde  aramak için kullanılır.
*/



$Icerik =" Selahattin Güngör Yıldız Mirac Ely Onur Mert ";
$Desen= "/selo\B/";
$Sonuc = preg_match($Desen, $Icerik);

echo "Orjinal hali : ". $Icerik . "<br />";
echo  "Desen : " . $Desen . "<br />";
 

if($Sonuc==1){
    echo "Aranılan değer cümle içindeki kelimelerin arasında mevcut.";
}else{
  echo "Aranılan değer cümle içindeki kelimelerin arasında mevcut değildir.";
}


?>
</body>
</html>