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
array_multisort()   :  Bir veya birden fazla dizinin elemanlarını gelişmiş olarak çok yönlü sıralamak için kullanılır.
SORT_ASC            :  A'dan Z'ye / Küçükten büyüğe
SORT DESC           :  Z'den A'ya / Büyükten küçüğe
SORT_REGULAR        :  Standart sıralama (varsayılan)
SORT_NUMERIC        :  Rakamsal sıralama 
SORT_STRING         :  Alfanumerik sıralama (string) 
SORT_NATURAL        :  Alfanumerik sıralama  (string) (Doğal)
*/


$Isimler = array("Selahattin", "hasan", "mirac", "selo", "diablo", "shadez"); // anahtar değerlerini biz atarsak bozulmaz ama php kendi atarsa bozulur....

echo "<pre>";
print_r($Isimler);
echo "</pre><br />";

array_multisort($Isimler);

echo "<pre>";
print_r($Isimler);
echo "</pre>";


?>
</body>
</html