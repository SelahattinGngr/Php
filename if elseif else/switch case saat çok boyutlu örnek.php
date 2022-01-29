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
$Saat = 4;

switch($Saat){
  case ($Saat>=0) and ($Saat<=6):
    switch($Saat){
       case $Saat==0:
        echo "iyi geceler saat şu anda 00.00";
        break;
        case $Saat==1:
        echo "iyi geceler saat şu anda 01.00";
        break;
        case $Saat==2:
        echo "iyi geceler saat şu anda 02.00";
        break;
        case $Saat==3:
        echo "iyi geceler saat şu anda 03.00";
        break;
        case $Saat==4:
        echo "iyi geceler saat şu anda 04.00";
        break;
        case $Saat==5:
        echo "iyi geceler saat şu anda 05.00";
        break;
        case $Saat==6:
        echo "iyi geceler saat şu anda 06.00";
        break;
        default:
          echo "Bilinmeyen bir hata kodu oluştu.";
          
    }
  break;

  case ($Saat>6) and ($Saat<=10):

  switch($Saat){
    case $Saat==7:
     echo "Günaydın saat şu anda 07.00";
     break;
     case $Saat==8:
     echo "Günaydın saat şu anda 08.00";
     break;
     case $Saat==9:
     echo "Günaydın saat şu anda 09.00";
     break;
     case $Saat==10:
     echo "Günaydın saat şu anda 10.00";
     break;
     default:
       echo "Bilinmeyen bir hata kodu oluştu.";
  }

  break;

  case ($Saat>10) and ($Saat<=17):

  switch($Saat){
    case $Saat==11:
     echo "Iyi Günler saat şu anda 11.00";
     break;
     case $Saat==12:
     echo "Iyi Günler saat şu anda 12.00";
     break;
     case $Saat==13:
     echo "Iyi Günler saat şu anda 13.00";
     break;
     case $Saat==14:
     echo "Iyi Günler saat şu anda 14.00";
     break;
     case $Saat==15:
     echo "Iyi Günler saat şu anda 15.00";
     break;
     case $Saat==16:
     echo "Iyi Günler saat şu anda 16.00";
     break;
     case $Saat==17:
     echo "Iyi Günler saat şu anda 17.00";
     break;
     default:
       echo "Bilinmeyen bir hata kodu oluştu.";
  }
  break;
  case ($Saat>17) and ($Saat<=23):
   switch($Saat){
     case $Saat==18:
     echo "Iyi Günler saat şu anda 18.00";
     break;
     case $Saat==19:
     echo "Iyi Günler saat şu anda 19.00";
     break;
     case $Saat==20:
     echo "Iyi Günler saat şu anda 20.00";
     break;
     case $Saat==21:
     echo "Iyi Günler saat şu anda 21.00";
     break;
     case $Saat==22:
     echo "Iyi Günler saat şu anda 22.00";
     break;
     case $Saat==23:
     echo "Iyi Günler saat şu anda 23.00";
     break;
     default:
       echo "Bilinmeyen bir hata kodu oluştu.";
  }

  break;
  default:
    echo "Girilen değer:". " ". "({$Saat}) bir saat değil.";
}

?>
</body>
</html