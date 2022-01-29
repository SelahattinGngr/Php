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
function Islem(){
     $Isim = "Selo";
     $Soyisim = "Gng";
     $Yas = "22";
     $Meslek = "Bosa Kurek Cekiyor";

     return array($Isim, $Soyisim, $Yas, $Meslek);

}

$wow = Islem();

echo "<pre>";
print_r($wow);
echo "</pre><br /><br />";

echo "Kullanıcı ismi : " . $wow[0] . "<br />";
echo "kullanıı soyismi : " . $wow[1] . "<br />";
echo "Kullanıcı yası : " . $wow[2] . "<br />";
echo "Kullanıcı meslegi : " . $wow[3];


?>
</body>
</html>