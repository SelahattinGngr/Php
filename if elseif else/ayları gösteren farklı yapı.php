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
yapısı : 

if(Koşul veya koşullar):
  kod blokları 


  elseif(Koşul veya koşullar):
      kod blokaları

  else:
    kod blokları 

endif;
*/

$Ay = "Şubat";

if(($Ay=="Şubat") or ($Ay=="Ocak") or ($Ay=="Aralık")):
    echo $Ay. " Ayı bir kış ayı'dır.";

    elseif(($Ay=="Mart") or ($Ay=="Nisan") or ($Ay=="Mayıs")):
      echo $Ay . " Ayı bir ilkbahar ayı'dır.";

    elseif(($Ay=="Haziran") or ($Ay=="Temmuz") or ($Ay=="Ağustos")):
      echo $Ay . " Ayı bir yaz ayı'dır.";
      
      elseif(($Ay=="Eylül") or ($Ay=="Ekim") or ($Ay=="Kasım")):
        echo $Ay . " Ayı bir yaz sonbahar ayı'dır.";

      else:
        echo "girilen değer ({$Ay}) bir ay değildir";
      endif;
    

?>
</body>
</html