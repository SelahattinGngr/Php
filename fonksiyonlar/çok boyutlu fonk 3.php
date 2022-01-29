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
      return "İşleminiz başarıyla tamamlanmıştır.";
  }

    function Onaylanmadı(){
      return "İşlem onaylanmadı hata oluştu<br />";
    }

    function Uyarı(){
      return "beklenmeyen bir hata oluştu.<br />";
    }
}
$Sonuc = "Dikkat";

if($Sonuc=="Tamam"){
  Mesajlar();
   $Mesaj =Onaylandı();
    echo $Mesaj;
}elseif($Sonuc=="Dikkat"){
    Mesajlar();
    $Mesaj =Onaylanmadı();
    echo $Mesaj;
}else{
  Mesajlar();
  $Mesaj =  Uyarı();
    echo $Mesaj;
}






  ?>
</body>
</html>