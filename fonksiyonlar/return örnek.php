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
return : Fonksiyondan değer döndürmek için kullanılır.
 */

 function Islem(){
      $IsimSoyisim = "Selahattin Güngör ";

      return $IsimSoyisim;
 }
 $wow  = Islem();
 
     if($wow == "Selahattin Güngör "){
          echo $wow . " başarılı biri olacak.";
     }else{
          echo "kişi tanınmıyor!!";
     }
?>
</body>
</html>