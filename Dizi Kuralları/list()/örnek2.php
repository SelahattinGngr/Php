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
 $Renkler = array("mavi", "sarı", "mor", "beyaz");

 echo"<pre>";
 print_r($Renkler);
 echo"</pre>";

 list($Bir, , , $Dort )  = $Renkler; // aralarından almak istersek virgül boşluk şeklinde yapmamız yeterli olur.

 echo $Bir ."<br />";
 echo $Dort ."<br />";

  ?>
</body>
</html