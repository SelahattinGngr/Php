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

$AyAdi = "Aralık";

switch($AyAdi){
  case ($AyAdi=="Aralık") or ($AyAdi=="Ocak") or ($AyAdi=="Şubat"):
    echo "Girilen Ay:" ." " .  "( {$AyAdi} ) kış ayıdır. ";
    break;
    case ($AyAdi=="Mart") or ($AyAdi=="Nisan") or ($AyAdi=="Mayıs"):
      echo "Girilen Ay: ( {$AyAdi} ) Ilkbahar ayıdır. ";
      break;
      case ($AyAdi=="Haziran") or ($AyAdi=="Temmuz") or ($AyAdi=="Ağustos"):
        echo "Girilen Ay: ( {$AyAdi} ) Yaz ayıdır. ";
        break;
        case ($AyAdi=="Eylül") or ($AyAdi=="Ekim") or ($AyAdi=="Kasım"):
          echo "Girilen Ay: ( {$AyAdi} ) Sonbahar ayıdır. ";
          break;
          default:
            echo "Girilen değer ({$AyAdi}) bir ay adı değildir";

}

?>
</body>
</html