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

$Renkler = array("kırmızı", "mor", "sarı", array("selo", "evrim", "hasan", "erkan"), "lacivert", "lila", "siyah");


echo "<pre>";
print_r($Renkler);
echo "</pre><br />";


foreach($Renkler as $Icerik){

        if(is_array($Icerik)){
        echo "Burada bir dizi var.<br />";
 }else{
        echo $Icerik . "<br />";
 }
}

?>
</body>
</html