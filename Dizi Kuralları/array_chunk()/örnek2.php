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
array_chunk() :  Dizinin belli bölümlerini alıp parçalayarak yeni bir çok boyutlu dizi oluşturmak için kullanılır.
*/

      $Isimler =  array("A1" =>"selo", "A2" => "can", "A3" => "oda", "A4" => "lul", "A5" => "wow", "A6" => "lel", "A7" => "uwu", "A8" => "owow", "A9" => "aslı", "A10" => "klavye", "A11" => "telefon");

      echo "<pre>";
      print_r($Isimler);
      echo "</pre>";

      $Sonuc = array_chunk($Isimler, 3,true);

      echo "<pre>";
      print_r($Sonuc);
      echo "</pre>";
  ?>
</body>
</html