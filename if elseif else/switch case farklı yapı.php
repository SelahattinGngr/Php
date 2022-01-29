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

switch():
    case koşul:
        kod blokları;
        break;
        default:
            kod blokları;
    endswitch;
*/
$Deger = "Haziran";

switch($Deger):
  case ($Deger=="Aralık") or ($Deger=="Ocak") or ($Deger=="Şubat") :
    echo $Deger . " " ."Bir KIS ayıdır.";
  break;
  case ($Deger=="Mart") or ($Deger=="Nisan") or ($Deger=="Mayıs"):
    echo $Deger . " " ."Bir ILKBAHAR ayıdır.";
  break;
  case ($Deger=="Haziran") or ($Deger=="Temmuz") or ($Deger=="Ağustos"):
    echo $Deger . " " ."Bir YAZ ayıdır.";
  break;
  case ($Deger=="Eylül") or ($Deger=="Ekim") or ($Deger=="Kasım"):
    echo $Deger . " " ."Bir SONBAHAR ayıdır.";
  break;
  default:
   echo "girilen değer" ." ({$Deger}) " . "bir ay adı değildir";



endswitch;


?>
</body>
</html