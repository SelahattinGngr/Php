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
break   :  Döngünün çalışmasını sonlandırmak için kullanılır.
*/

$Baslangıc = 1;

while($Baslangıc<=50){
    echo $Baslangıc . "<br />";

    if($Baslangıc==48){
       break;
}

    $Baslangıc++;

}

?>
</body>
</html>