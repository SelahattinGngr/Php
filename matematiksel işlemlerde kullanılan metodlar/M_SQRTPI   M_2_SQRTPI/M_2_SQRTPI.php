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
  M_SQRTPI    : PI Sayısının karekökünü bularak, bulduğu değeri geriye döndürür. 
  M_2_SQRTPI  : 2/PI Sayısının karekökünü bularak, bulduğu değeri geriye döndürür.
  */


 // $Hesapla =  sqrt(2/pi()); Bu format yanlış aşşağıdaki formatta böyle bulmuyor [2/sqrt(pi())] bu şekilde buluyor
 // echo $Hesapla . "<br />";



 $Deger = M_2_SQRTPI;

  echo "2/PI Sayısının karekökü : " . $Deger; 



?>
</body>
</html>