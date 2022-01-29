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
func_num_args()  : Fonksiyona gönderilen parametre sayısını veriri.
func_get_args()  : Fonksiyona gönderilen parametre değerlerini yeni bir dizi içerisine alır.
func_get_arg()   : Fonksiyona gönderilen parametre değerlerini yeni bir dizi olarak kabul edeerek belirtilecek olan anahtar değerine ait elemanı ekrana yazdırmak için kullanılı.
*/
function Deneme(){
  $GelenDegerSayısı = func_num_args();
  echo "Fonksiyona gönderilen parametre sayısı : " .  $GelenDegerSayısı;

  
  $GelenDegerler = func_get_args();

  echo "<pre>";
  print_r($GelenDegerler);
  echo "</pre><br />";

   foreach($GelenDegerler as $wow){
    echo "<pre>";
    print_r($wow);
    echo "</pre>";
   }
   echo "<br /><br /><br />";

  $Degerler = func_get_arg(0);
  
  echo "Kullanıcı Adı : " . $Degerler;


}
Deneme("Selahattin", "Güngör", 22, "Erkek", "Rize", "Öğrenci");

?>
</body>
</html>