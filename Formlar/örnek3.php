<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Php Denemeleri</title>
</head>

<body>
  <form action="Sonuc.php"method="post">
      Adınız Soyadınız : <input tpye="text" name="AdSoyad"><br />
      E-Mail Adresiniz : <input type="email" name="EmailAdresi"><br />
      Telefonunu       : <input type="text" name=Telefon><br />
      Cinsiyetiniz     : <input type="radio" name="Cinsiyet" value="Erkek">Erkek <input type="radio" name="cinsiyet" value="Kadın">Kadın<br />
      Yaşınız          : <select name="Yas">
          <option value=20>20</option>
          <option value=21>21</option>
          <option value=22>22</option>
          <option value=23>23</option>
          <option value=24>24</option>
          <option value=25>25</option>
          <option value=26>26</option>
          <option value=27>27</option>
          <option value=28>28</option>
          <option value=29>29</option>
          <option value=30>30</option>
          </select>

          <input type="submit" value="Gönder">
  </form>

</body>
</html>