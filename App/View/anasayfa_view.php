<html xmlns="http://www.w3.org/1999/html">
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
    <body style="background-color: #5cb85c">
    <div class="container">
        <h1 style="color: #000000">Anasayfaya Hoşgeldiniz </h1>
        <p style="color: #000000">Öğrenci staj raporları ile ilgili verilere burdan ulaşabilirsiniz. </p>
        <a href="http://localhost/mvc/index/isimListele"><input type="submit" class="btn btn-danger" name="button2" id="button2" value="Staj Raporları Görüntüle" /></a>
        <a href="http://localhost/mvc/index/veriKaydet"><input type="submit" class="btn btn-danger" name="button1" id="button1" value="Öğrenci Staj Raporu Ekle" /></a>
        <br />
        <br>
        <form action="http://localhost/mvc/index/search" method="post">
            <input type="text" name="search" size="40" maxlength="25"/>
            <input type="submit" name="submit" class="btn btn-danger" value="Öğrenci Staj Rapor Ara" id="AButon"/>
        </form>
        <br>
        <br>
        <p style="color: #000000">Öğrenci staj günleri ile ilgili verilere burdan ulaşabilirsiniz. </p>
        <a href="http://localhost/mvc/index/ogrenciListele"><input type="submit" class="btn btn-danger" name="button2" id="button2" value="Staj Günleri Görüntüle" /></a>
        <a href="http://localhost/mvc/index/ogrenciKaydet"><input type="submit" class="btn btn-danger" name="button1" id="button1" value="Öğrenci Staj Günleri Ekle" /></a>
        <br />
        <br>
        <form action="http://localhost/mvc/index/searchogrenci" method="post">
            <input type="text" name="searchogrenci" size="40" maxlength="25"/>
            <input type="submit" name="submit" class="btn btn-danger" value="Öğrenci Staj Günleri Ara" id="AButon"/>
        </form>


    </body>
</html>