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
<body style="background-color: #985f0d">
<div class="container">
    <h1>Öğrenci Güncelleme</h1>
    <form action="http://localhost/mvc/index/guncelleogrenci?id=<?=$bilgi[0]["Ogr_No"]?>" method="POST" >
        <label>ÖğrenciNo</label><br>
        <input type="text" name="Ogr_No" value="<?=$bilgi[0]["Ogr_No"]?>"><br>
        <label>Ad Soyad</label><br>
        <input type="text" name="AdSoyad" value="<?=$bilgi[0]["AdSoyad"]?>"><br>
        <label>Staj1</label><br>
        <input type="text" name="staj" value="<?=$bilgi[0]["staj"]?>"><br>
        <label>Staj2</label><br>
        <input type="text" name="staj2" value="<?=$bilgi[0]["staj2"]?>"><br>
        <button type="submit" class="btn btn-info">Kaydet</button>
    </form>
</div>

</body>
</html>