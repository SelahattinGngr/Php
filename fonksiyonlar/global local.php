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
$Isim = "Selahattin Gungor";

function Yaz(){
     global $Isim; // global alandaki değişkeni local alana almamızı sağlıyor
     echo $Isim;
}
 yaz();

?>
</body>
</html>