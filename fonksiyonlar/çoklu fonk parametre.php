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

  function IsimYaz($Isim){
      function SoyIsimYaz($Soyisim){
        function YasYaz($Yas){
          echo $Yas;

        }
        echo $Soyisim . "<br />";
        YasYaz(20);
        

      }
      echo $Isim . " ";
      SoyIsimYaz("GNGR");
      
    }
      IsimYaz("Selo");
  ?>
</body>
</html>