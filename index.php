<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>navbar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets\logo.png" alt="" width="70" height="50">
            </a>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active m-2" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-2" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link m-2" href="#">Berita</a>
                        </li>
                        <li>
                            <a class="btn btn-primary btn-block m-2 bg-black fw-mediumn text-light" href="login.html">Login</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/kelompok.jpg" class="img-fluid" width="500">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Hai Selamat Datang Di Website</h2><br>
                <p class="text-muted">"Hasil Kerja Kami Bertiga"</p>
                <p>Disini Anda Dapat Menemukan Informasi Tentang Anggota Kami dan
                    Beberapa Berita YAng Telah Kami Buat Sedemikian Rupa, Dan Kedepa
                    Nya Anda Juga Dapat Menambah Berita Di Dalam Website Ini.</p>
            </div>
        </div>
    </div>

    <hr class=" container mt-5 mb-2">
    <?php
    include("about.php")
    ?>
    <hr class=" container mt-5 mb-2">
    <?php
    include("berita.php")
    ?>
</body>

</html>