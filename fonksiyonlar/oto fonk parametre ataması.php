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
  ($Islem = function($Isim="", $SoyIsim="",$Yas=""){
        if($Isim!=""){
          echo "İsim : ". $Isim ."<br />";
        }

        if($SoyIsim!=""){
          echo "Soyisim : ". $SoyIsim ."<br />";
        }

        if($Yas!=""){
          echo "Yaş : ". $Yas;
        }
    




  })("Selo ","gng",22);


  ?>
</body>
</html>