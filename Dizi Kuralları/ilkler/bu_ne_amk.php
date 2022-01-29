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


    $Deger = array(
                   "ilkisim" => "selo",
                    "Isim" =>  "gngr",
                    "renkler" =>array(
                          "mor",
                          "renk" => "kırmızı",
                          "yesil",
                          array(
                               "esyalar" => array(
                                    "koltuk",
                                    "masa",

                               ),
                               "battaniye",
                               "sandalye",
                              ),

                         "favorirenk" => "turkuaz",
                         "sarı",
                              ),
                         "yazılımdil" => array(
                                "ikincidil" => "PHP",
                                "JS",
                               "HTML",
                               "ASP",
                                  "grafikler" => array(
                                       "en_kolayı" => "Photshop",
                                      "paint",
                                  ),
                                  "xml",
                                ),
                    "furbol topu",
                   "favotispor" => "basketbol",
      
      
      
 );

    echo "<pre>";
    print_r($Deger);
    echo "<pre><br /><br />";

    echo $Deger["ilkisim"] . "<br />" ;
    echo $Deger["Isim"] . "<br />" ;
    echo $Deger["renkler"][0] . "<br />" ;
    echo $Deger["renkler"]["renk"] . "<br />" ;
    echo $Deger["renkler"][1] . "<br />" ;
    echo $Deger["renkler"][2]["esyalar"][0] . "<br />" ;
    echo $Deger["renkler"][2]["esyalar"][1] . "<br />" ;
    echo $Deger["renkler"][2][0] . "<br />" ;
    echo $Deger["renkler"][2][1] . "<br />" ;
    echo $Deger["renkler"]["favorirenk"] . "<br />" ;
    echo $Deger["renkler"][3] . "<br />" ;
    echo $Deger["yazılımdil"]["ikincidil"] . "<br />" ;
    echo $Deger["yazılımdil"][0] . "<br />" ;
    echo $Deger["yazılımdil"][1] . "<br />" ;
    echo $Deger["yazılımdil"][2] . "<br />" ;
    echo $Deger["yazılımdil"]["grafikler"]["en_kolayı"]. "<br />" ;
    echo $Deger["yazılımdil"]["grafikler"][0] . "<br />" ;
    echo $Deger["yazılımdil"][3] . "<br />" ;
    echo $Deger[0] . "<br />" ;
    echo $Deger["favotispor"] . "<br />" ;
 
  ?>
</body>
</html