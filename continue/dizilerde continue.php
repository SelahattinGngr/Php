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
$Isimler = array("lel", "lol", "wow", "nah", "wuw", "inanılmaz", "naz", "aslı", "zeynep");
        foreach($Isimler as $Deger){
                
                        if(($Deger=="nah") or ($Deger=="naz")){
                                        continue;
                        }else{
                                echo $Deger . "<br />";
                        }
                }
                        
        

?>
</body>
</html>