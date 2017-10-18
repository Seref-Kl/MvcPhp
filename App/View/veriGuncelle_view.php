<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body style="background-color: chocolate">
<div class="container">
    <h1>Veri Güncelleme</h1>
    <form action="http://localhost/mvc/index/guncelle?id=<?=$bilgiler[0]["SiraNo"]?>" method="POST" >
        <label>ÖğrenciNo</label><br>
        <input type="text" name="Ogr_No" value="<?=$bilgiler[0]["Ogr_No"]?>"><br>
        <label>Ad Soyad</label><br>
        <input type="text" name="AdSoyad" value="<?=$bilgiler[0]["AdSoyad"]?>"><br>
        <label>Başlama Tarihi</label><br>
        <input type="text" name="Bas_Tar" value="<?=$bilgiler[0]["Bas_Tar"]?>"><br>
        <label>Bitiş Tarihi</label><br>
        <input type="text" name="Bit_Tar" value="<?=$bilgiler[0]["Bit_Tar"]?>"><br>
        <label>Yapılan Kurum</label><br>
        <input type="text" name="YapilanKurum" value="<?=$bilgiler[0]["YapilanKurum"]?>"><br>
        <label>Gün</label><br>
        <input type="text" name="Gun" value="<?=$bilgiler[0]["Gun"]?>"><br>
        <label>Kabul Gün</label><br>
        <input type="text" name="KabulGun" value="<?=$bilgiler[0]["KabulGun"]?>"><br>
        <label>Staj Konusu</label><br>
        <input type="text" name="StajKonusu" value="<?=$bilgiler[0]["StajKonusu"]?>"><br>
        <label>Durum</label><br>
        <input type="text" name="Durum" value="<?=$bilgiler[0]["Durum"]?>"><br><br>
        <button type="submit" class="btn btn-info">Kaydet</button>
    </form>
</div>

</body>
</html>