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
switch    =  Koşul başlat.
case      =  Koşul kontrol et.
break     =  Koşul kontrolünü sonlandır.
default   =  Koşul olumsuzlukları sonucu.

yapısı : 

switch(Koşul veya koşullar){
  case kontrol ifadesi :
    kod bloğu ;
  break;
  default:
    kod blokları;
}
*/

$Saat = 8;

switch($Saat){
  case ($Saat>=0) and ($Saat<=06):
        echo " İyi geceler.";
    break;
    case ($Saat>06) and ($Saat<=10):
         echo " Günaydın.";
      break;
      case ($Saat>10) and ($Saat<=17):
           echo " İyi günler.";
        break;
        case ($Saat>17) and ($Saat<=23):
             echo " İyi akşamlar.";
          break;
          default:
              echo "girilen değer :" . " " . "({$Saat} (bir saat birimmi değildir ";


}


?>
</body>
</html