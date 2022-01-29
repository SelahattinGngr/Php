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

$Deneme = 1;

do{
        echo $Deneme . "<br />";
        if($Deneme==28){
                break;
        }
                $Deneme++;
                       
}while($Deneme<=40)

?>
</body>
</html>