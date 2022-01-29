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
$Baslangıc = array("sarı", "mor", "kırmızı", "mavi");

echo "<pre>";
print_r($Baslangıc);
echo "</pre><br /><br />";


foreach($Baslangıc as $Deger){
       echo $Deger . "<br />";
       
       if($Deger == "kırmızı"){
              break;
       }
}


?>
</body>
</html