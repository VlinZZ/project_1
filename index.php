<?php
// index.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Bersama_1</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/logo.png">
    
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Berita CSS -->
    <link rel="stylesheet" href="css/berita.css">
    
    <!-- About CSS -->
    <link rel="stylesheet" href="css/about.css">
</head>


<body>
    <!-- Navigasi Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Logo" width="70" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active m-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#about-section">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-2" href="#berita-section">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-block m-2 bg-black fw-medium text-light btn-add-news" href="pages/login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/kelompok.jpg" class="img-fluid" alt="Kelompok" width="500">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Hai, Selamat Datang di Website</h2>
                <p class="text-muted">"Hasil Kerja Kami Bertiga"</p>
                <p>Di sini Anda dapat menemukan informasi tentang anggota kami dan beberapa berita yang telah kami buat. Anda juga dapat menambah berita di dalam website ini.</p>
            </div>
        </div>
    </div>

    <hr class="container mt-5 mb-2">

    <!-- Include About dan Berita -->
    <?php include("about.php"); ?>
    <hr class="container mt-5 mb-2">
    <?php include("berita.php"); ?>

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DmZhu9Kq5zY1N4NjZkQ+gxGjkM95" crossorigin="anonymous"></script>
</body>

</html>
