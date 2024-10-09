<!DOCTYPE html>
<html lang="id">
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
<script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerja Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-mQ93Kz2Zn8sR0CAx2s5A/BB8zS3I/hz9pHmhmA2GTV8MWRnx1B90i3PkiRH9Czc4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>  
  
  body {  
    background-color: black;  
  }  
  header {  
    background: rgba(255,255,225, 0.5);  
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
.login{        
  margin-left: 725px;
  color:White;
}
    .open-button {
        margin-left: 20px;
        background-color: #5b9bd5;
        color: white;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        border: none;
        border-radius: 0px;
        cursor: pointer;
    }
    .open-button:hover {
        background-color: blue;
    }
    
    /* Right Side Navbar */
    .navbar-side {
        width: 200px;
        background-color: #004c66;
        position: fixed;
        top: 54px;
        bottom :80px;
        right: -200px; /* Initially hidden off-screen */
        height: 200vh;
        padding-top: 20px;
        transition: right 0.3s ease; /* Smooth sliding effect */
        z-index: 1000; /* Ensures it appears above other elements */
    }
    
    .navbar-side.open {
        padding: 12px 14px;
        font-size: 17px;
        right: 0px;
        top: 54px; /* Slide in from the right */
        nav-down: 20px;
        bottom :70px;
    }
    
    .navbar-side ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    .navbar-side li {
        margin-bottom: 10px;
    }
    
    .navbar-side a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        display: block;
        padding: 10px 20px;
    }
    
    .navbar-side a:hover {
        background-color: #003366;
    }
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="index.php"><i class="fa fa-home"> HOME</i></a>
  <a href="berita.php">Berita</a>
  <a href="contack.php">contack</a>
  <a href="about.php">About</a>
  <a href="login.html" class="login"><i class="fa fa-user-circle-o"> Login</i></i></a>
  <a href="register.html"><i class="fa fa-user-plus"> Register</i></i></a>
  <button class="open-button" onclick="toggleNavbar()"><i class="fa fa-bars"></i></button>
  
    </div>
    <div id="navbar-side" class="navbar-side">
        <ul>
            <li><a href="about.php" class="type">BACK</a></li>
            <li><a href="#">PROFIL</a></li>
            <li><a href="#">FAKULTAS</a></li>
        </ul>

    <script>
    function toggleNavbar() {
        const navbar = document.getElementById('navbar-side');
        navbar.classList.toggle('open');
    }
    </script>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script id="rendered-js">
$(function () {
  $('.scroll-down').click(function () {
    $('html, body').animate({ scrollTop: $('section.ok').offset().top }, 'slow');
    return false;
  });
});
//# sourceURL=pen.js
    </script>
<div id="initom" class="menu" bis_skin_checked="1" style="">
  <a class="tombol" onclick="tes()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"></path> </svg>
  </a>
  </div>
<style>
body, a:hover {cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur862.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur862.png), progress !important;}
img { border-radius: 25px;}
body {
  background-color: #000;
}

*,
:after,
:before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

section {
  height: 100vh;
  width: 100%;
  display: table;
  
}
section.ok{
  background-color: #555;
}

p{
  color: black;
  font-family: arial;
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}

.scroll-down {
  opacity: 1;
  -webkit-transition: all .5s ease-in 3s;
  transition: all .5s ease-in 3s;
}

.scroll-down {
  position: absolute;
  bottom: 30px;
  left: 50%;
  margin-left: -16px;
  display: block;
  width: 32px;
  height: 32px;
  border: 2px solid #FFF;
  background-size: 14px auto;
  border-radius: 50%;
  z-index: 2;
  -webkit-animation: bounce 2s infinite 2s;
  animation: bounce 2s infinite 2s;
  -webkit-transition: all .2s ease-in;
  transition: all .2s ease-in;
  transform: scale(1)
}

.scroll-down:before {
    position: absolute;
    top: calc(50% - 8px);
    left: calc(50% - 6px);
    transform: rotate(-45deg);
    display: block;
    width: 12px;
    height: 12px;
    content: "";
    border: 2px solid white;
    border-width: 0px 0 2px 2px;
}

@keyframes bounce {
  0%,
  100%,
  20%,
  50%,
  80% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  60% {
    -webkit-transform: translateY(-5px);
    -ms-transform: translateY(-5px);
    transform: translateY(-5px);
  }
}
</style>
<script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
<section>
<h1 class="nprinsleyy nprinsley-text-glitchan" style="padding: 210px; font-size:75px; font-family: Cambria,Times New Roman,serif;" align="center"><font color="white">Welcome To About Us </font></h1>
<a href="#" class="scroll-down" address="true"></a>
</section>
<section class="ok">
<div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/revalino.jpg" width="310px" height="280px" border-radius="35px"></img>
                        <hr>
                        <h5 class="card-title">Revalino Jihadil Lopa</h5>
                        <p class="text-black">Informasi tentang Saya</p>
                        <h1 style="margin-bottom : 15px"></h1>
                        <a href="valin.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/farel.jpg" width="310px" height="280px" border-radius="35px"></img>
                        <hr>
                        <h5 class="card-title">Farel Yuhandriza Putra</h5>
                        <p class="card-text">Informasi tentang Saya</p>
                        <h1 style="margin-bottom : 15px"></h1>
                        <a href="rell.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <img src="assets/taufiq.jpg" width="310px" height="280px" border-radius="35px"></img>
                        <hr>
                        <h5 class="card-title">Taufiq Hidayat</h5>
                        <p class="card-text">Informasi tentang Saya</p>
                        <h1 style="margin-bottom : 15px"></h1>
                        <a href="taufiq.php" class="btn btn-primary">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Include Bootstrap JS (Optional for interactive features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ksm1fpv+Pe6inMX+dQ0iIeMb60ayrO1r5jyyxYFJF5whClc52UPPnxI5BeQK7V/7" crossorigin="anonymous"></script>
</body>
</html>
