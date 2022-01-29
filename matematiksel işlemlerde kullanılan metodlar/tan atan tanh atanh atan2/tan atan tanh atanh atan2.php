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
  tan()   : Herhangi bir sayının tanjantını buluyor.
  tanh()  : Herhangi bir sayının hiperbolik tanjantını bulur.
  atan()  : Herhangi bir sayının ark tanjantını radyan değeri cinsinden  bulur.
  atanh() : -1 ila 1 arasında herhangi bir sayının hiperbolik ark tanjantını bularak, bulduğu değeri geriye döndürür
  atan2() : Herhangi iki sayının ark yanjantını radyan değeri cinsinden bularak, bulduğu değeri geriye döndürür.
  */

    $SayıBir =   3;
    $SayıIki =  -2;
    $SayıUc  =  1.5;

    $HesaplaBir  = tan($SayıBir);
    $HesaplaIki  = tan($SayıIki);
    $HesaplaUc   = tan($SayıUc);

    echo $SayıBir . "sayının tanjantı : " . $HesaplaBir . "<br />";
    echo $SayıIki . "sayının tanjantı : " . $HesaplaIki . "<br />";
    echo $SayıUc . "sayının tanjantı : " . $HesaplaUc;
?>
</body>
</html>