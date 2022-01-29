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
 $Deneme = array(
     "Selo",
     function(){
          echo "deneme dizi içerisinde ";
     },
     "gngr",
     "zey"
);
echo "<pre>";
print_r($Deneme);
echo "</pre><br /><br />";

echo $Deneme[0];
echo "<br />";
$Deneme[1]();
echo "<br />";
echo $Deneme[2] . "<br />";
echo $Deneme[3];

?>
</body>
</html>