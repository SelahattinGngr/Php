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
  $Baslangıc = 1;
  echo "Standart while döngüsü <br /> ";
  while($Baslangıc<=25){

      echo $Baslangıc . "<br />";
      $Baslangıc++;
  };
echo "<br />Recursive fonksiyon döngüsü<br /><br />";


  function Deneme($Deger){
      if($Deger<=25){
        echo $Deger . "<br />";
        Deneme($Deger+1);

      }
  }
  Deneme(1);


  ?>
</body>
</html>