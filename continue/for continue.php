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
continue  : Döngünün belli bir kısmının atlanarak, çalışmakta olan döngünün bir 
sonraki işleme devam etmesi için kullanılır
*/

for($Deger=1;$Deger<=50;$Deger++){
        
                if(($Deger>=21) and ($Deger<=34)){
                        continue;
                }
        echo $Deger . "<br />";
}


?>
</body>
</html>