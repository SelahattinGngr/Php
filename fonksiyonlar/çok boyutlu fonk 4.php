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
    function Bir($IsimBir="Selahattin",$SoyIsimBir="Gungor",$YasBir=20){
        function Iki($IsimIki="evrim",$SoyIsimIki="Gungor",$YasIki=20){
            function Uc($IsimUc="Onur mert",$SoyIsimUc="Gungor",$YasUc=16){
                echo $IsimUc . " " .$SoyIsimUc . " " . $YasUc;

            }

            Uc($IsimIki,$SoyIsimIki,$YasIki);
        }


        Iki($IsimBir,$SoyIsimBir,$YasBir);

    }
    Bir("Cancan","lol");



  ?>
</body>
</html>