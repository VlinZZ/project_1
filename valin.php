<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Revalino Jihadil Lopa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-mQ93Kz2Zn8sR0CAx2s5A/BB8zS3I/hz9pHmhmA2GTV8MWRnx1B90i3PkiRH9Czc4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
  button { border-radius: 15px;}
  button:hover { background-color: #A0A0A0; }   
  img { border-radius: 15px;}
  body {  
    background-color: black;  
  }  

  header {  
    background: rgba(255,255,225, 0.5);  
  }  
</style>
</head>
<body>
<style>
body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur862.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur862.png), progress !important;}
</style>
<script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
<?php
// Data user dinamis
$userProfile = [
    'NAMA' => 'Revalino Jihadil Lopa',
    'GMAIL' => 'revalinojihadil@gmail.com',
    'NOMOR HP' => '+6283875164859',
    'ALAMAT' => 'Komp, Perumahan Unand Blok D1/01-23 Gadut',
    'TGL LAHIR' => '02-February-2007',
    'KEAHLIAN' => 'Software Engineer',
    'BIO PROFIL' => 'Halo Nama Saya Revalino Jihadil lopa biasanya di panggil valin, umur saya 17 Tahun Saya bersekolah di smkn2 padang, Salam kenal Sayonara <3',
    'image' => 'assets/revalino.jpg' // URL gambar profil
];
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!-- Profil Gambar -->
            <img src="<?php echo $userProfile['image']; ?>" alt="Profile Picture" class="img-fluid circle" width="260px" height="200px">
        </div>
        <div class="col-md-8">
            <h1><font color="white"><?php echo $userProfile['NAMA']; ?></font></h1>
            <p class="text-muted"><?php echo $userProfile['KEAHLIAN']; ?></p>
            
            <ul class="list-group">
                <li class="list-group-item"><strong>Email User:</strong> <?php echo $userProfile['GMAIL']; ?></li>
                <li class="list-group-item"><strong>Nomor HP:</strong> <?php echo $userProfile['NOMOR HP']; ?></li>
                <li class="list-group-item"><strong>Tempat Tinggal:</strong> <?php echo $userProfile['ALAMAT']; ?></li>
                <li class="list-group-item"><strong>Umur:</strong> <?php echo $userProfile['TGL LAHIR']; ?></li>
                <li class="list-group-item"><strong>Bio Profil:</strong> <?php echo $userProfile['BIO PROFIL']; ?></li>
            </ul>
        </div>
    </div>
</div>
<h1 style="margin-bottom : 10px"></h1>
<a href="about.php" style="margin : 128px; font-size:20px; font-family: Cambria,Times New Roman,serif;"><button style="padding: 7px 14px; width: 19%;">Back To About</button></a>
<!-- Include Bootstrap JS (Optional for interactive features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ksm1fpv+Pe6inMX+dQ0iIeMb60ayrO1r5jyyxYFJF5whClc52UPPnxI5BeQK7V/7" crossorigin="anonymous"></script>
</body>
</html>