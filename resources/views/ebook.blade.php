<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ebook</title>
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/ebook.css') }}" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="beranda2">KEMBALI</a></div>
        </div>
    </nav>

    <div class="container">
        <h1></h1>

        <?php
        // Tampilkan 27 gambar ebook secara dinamis
        for ($i = 1; $i <= 27; $i++) {
            echo '
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="img/ebook' . $i . '.jpeg" width="400" />
                    </a>
                </div>
            </div>';
        }
        ?>
        
    </div>
</body>
</html>
