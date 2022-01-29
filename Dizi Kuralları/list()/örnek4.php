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
  list() : Dizi içerisindeki eleman veya elemanları değişkenlere atamak için kullanılır
  */
 $Renkler = array("mavi", "sarı", array("dolap", "masa", "oda", "halı"), "mor", "beyaz");

 echo"<pre>";
 print_r($Renkler);
 echo"</pre>";

 list($Bir, $Iki, list($Uc, $Dort, $Bes, $Altı) , $Yedi, $Sekiz )  = $Renkler;

 echo $Bir ."<br />";
 echo $Iki ."<br />";
 echo $Uc ."<br />";
 echo $Dort ."<br />";
 echo $Bes ."<br />";
 echo $Altı ."<br />";
 echo $Yedi ."<br />";
 echo $Sekiz ;

  ?>
</body>
</html