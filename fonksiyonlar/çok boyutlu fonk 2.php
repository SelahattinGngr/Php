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


function Mesajlar(){
  function Onaylandı(){
      echo "İşleminiz başarıyla tamamlanmıştır.";
  }

    function Onaylanmadı(){
      echo "İşlem onaylanmadı hata oluştu<br />";
    }

    function Uyarı(){
      echo "Beklenmeyen bir hata oluştu.<br />";
    }
}
$Sonuc = "Hata";

if($Sonuc=="Tamam"){
  Mesajlar();
  Onaylandı();
}elseif($Sonuc=="Dikkat"){
    Mesajlar();
    Onaylanmadı();
}else{
  Mesajlar();
  Uyarı();
}






  ?>
</body>
</html>