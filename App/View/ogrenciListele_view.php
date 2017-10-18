<html>
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

    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        });
    </script>
    <title>Anasayfa View Dosyası</title>
</head>
<body style="background-color: #3e8f3e">
<h1>Staj Raporu Günleri </h1>
<div class="row">
    <div class="col-md-12">
        <table class="table table-condensed ">

            <thead>
            <tr>
                <th>ÖğrenciNo</th>
                <th>AdSoyad</th>
                <th>Staj1</th>
                <th>Staj2</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($ogrenciListele as $key => $values)  {?>
                <tr>
                    <td><?=$values["Ogr_No"]?></td>
                    <td><?=$values["AdSoyad"]?></td>
                    <td><?=$values["staj"]?></td>
                    <td><?=$values["staj2"]?></td>
                    <td>
                        <a href="ogrenciGuncelle?id=<?=$values["Ogr_No"]?>" style="color: #c12e2a">Düzenle</a>
                        <!-- localhost/mvc/index/sil?SiraNo= -->
                        <a href="silogrenci?id=<?=$values["Ogr_No"]?>" style="color: #c12e2a">Sil</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <a href="http://localhost/mvc/" class="btn btn-primary">Kapat</a>
    </div>
</div>


</body>
</html>