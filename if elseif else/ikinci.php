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
if      =  Eğer.
elseif  =  Değilse Eğer. 
else    =  Değilse.


if(Koşul veya koşullar){
  Kod blokları
}elseif(Koşul veya Koşullar){
  Kod blokları
}else{
  Kod blokları
}
*/

$Saat = "elma";

if(($Saat==0) or ($Saat==1) or ($Saat==2) or ($Saat==3) or ($Saat==4) or ($Saat==5) or ($Saat==6)){
  echo "iyi geceler";
}elseif(($Saat==7) or ($Saat==8) or ($Saat==9)){
  echo "Günaydın";
}elseif(($Saat==10) or ($Saat==11) or ($Saat==12) or ($Saat==13) or ($Saat==14) or ($Saat==15) or ($Saat==16)){
  echo "İyi günler";
}elseif(($Saat==17) or ($Saat==18) or ($Saat==19) or ($Saat==20) or ($Saat==21) or ($Saat==22)){
    echo "İyi akşamlar";
}else{
  echo "girilen değer bir saat değil amk";
}

?>
</body>
</html