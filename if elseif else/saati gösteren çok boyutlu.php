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
$Saat = 07;

if(($Saat>=0) and ($Saat<=6)){
  if($Saat==0){
    echo "İyi geceler saat şuanda 00.00 .";
  }elseif($Saat==1){
    echo "İyi geceler saat şuanda 01.00 .";
  }elseif($Saat==2){
    echo "İyi geceler saat şuanda 02.00 .";
  }elseif($Saat==3){
    echo "İyi geceler saat şuanda 03.00 .";
  }elseif($Saat==4){
    echo "İyi geceler saat şuanda 04.00 .";
  }elseif($Saat==5){
    echo "İyi geceler saat şuanda 05.00 .";
  }elseif($Saat==6){
    echo "İyi geceler saat şuanda 06.00 .";
  }else{
    echo "Bilinmeyen bir hata oluştu";
}
}elseif(($Saat>6) and ($Saat<=10)){
  if($Saat==7){
    echo "Günaydın saat şuanda 07.00 .";
  }elseif($Saat==8){
    echo "Günaydın saat şuanda 08.00 .";
  }elseif($Saat==9){
    echo "Günaydın saat şuanda 09.00 .";
  }elseif($Saat==10){
    echo "Günaydın saat şuanda 10.00 .";
  }else{
    echo "Bilinmeyen bir hata oluştu";
}
}elseif(($Saat>10) and ($Saat<=16)){
    if($Saat==11){
      echo "iyi günler saat şuanda 11.00 .";
    }elseif($Saat==12){
      echo "iyi günler saat şuanda 12.00 .";
    }elseif($Saat==13){
      echo "iyi günler saat şuanda 13.00 .";
    }elseif($Saat==14){
      echo "iyi günler saat şuanda 14.00 .";
    }elseif($Saat==15){
      echo "iyi günler saat şuanda 15.00 .";
    }elseif($Saat==16){
      echo "iyi günler saat şuanda 16.00 .";
    }else{
      echo "Bilinmeyen bir hata oluştu";
}
}elseif(($Saat>16) and ($Saat<=23)){
      if($Saat==17){
        echo "iyi akşamlar saat şuanda 17.00 .";
      }elseif($Saat==18){
        echo "iyi akşamlar saat şuanda 18.00 .";
      }elseif($Saat==19){
        echo "iyi akşamlar saat şuanda 19.00 .";
      }elseif($Saat==20){
        echo "iyi akşamlar saat şuanda 20.00 .";
      }elseif($Saat==21){
        echo "iyi akşamlar saat şuanda 21.00 .";
      }elseif($Saat==22){
        echo "iyi akşamlar saat şuanda 22.00 .";
      }elseif($Saat==22){
        echo "iyi akşamlar saat şuanda 23.00 .";
      }else{
        echo "Bilinmeyen bir hata oluştu";
      }
}else{
  echo "bu ne amk";
}
        

?>
</body>
</html