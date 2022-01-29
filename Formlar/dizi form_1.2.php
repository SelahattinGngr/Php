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
$GelenAdSoyad = $_GET["Isim"];
$GelenHobiler = $_GET["Hobiler"];

echo "Adınız Soyadınız : " . $GelenAdSoyad . "<br />";
echo "Hobileriniz :<br /> " ;


foreach($GelenHobiler as $Deger){
        echo $Deger . "<br />";
    
}




?>
</body>
</html>