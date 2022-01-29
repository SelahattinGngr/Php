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


function Bir(){
    function Iki(){
      function Uc(){

        echo "Uc isimli fonksiyon çalışıyor";
      }

      echo "Iki isimli fonksiyon çalışıyor<br />";
    }
    echo "Bir isimli fonksiyon çalışıyor<br />";

}
  Bir();  //hiyerarşik bir düzende çalışmak zorundalar bir numaralı fonksiyon çalışmazsa hiçbiri çalışmaz
  Iki();
  Uc();
  ?>
</body>
</html>