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
$Bir = "Selahattin Gungor";

function aa($Bir){
$Bir = "Merhaba ". $Bir;
  echo  $Bir ."<br />";
}
aa($Bir);
echo $Bir . "<br />"; 


echo  "<br /><br /><br /><br /><br />";

$Iki = "sgngr";

function bb(&$Iki){
$Iki = "Merhaba  ". $Iki ."<br />";;
  echo  $Iki ;
  
}

bb($Iki) . "<br />";
echo $Iki; 

  ?>
</body>
</html