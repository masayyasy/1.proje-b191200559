<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- fonts -->

    <!-- feather -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- feather -->
    
    <!-- my css-->
    
    <link rel="stylesheet" href="styleproje.css"/>

    <!-- my css-->
  </head>
  <body>

    <!-- kapak -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="bismillah.php">Muhammad<span>Salman</span>.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="bismillah.php">Ana Sayfa</a>
            <a class="nav-link" href="Hakkinda.html">Hakkında</a>
            <a class="nav-link" href="sehrim.php">Şehrim</a>
            <a class="nav-link" href="iletisim.html">İletişim</a>
            <a class="nav-link" href="logout.php">log out</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- kapak kapat -->

    <!-- pop up hoşgeldin -->
    <!-- pop up kapat -->

    <!-- geldi -->

    <section class="hero" id="home">
      <main class="content">
        <h2>Muhammad Salman <span>Abdullah Ayyasy</span></h2>
        <p>Websitesi'ye Hoş Geldiniz</p>
      </main>
      </section>

    <!-- geldi kapat -->
    <footer>
      <div class="footercontainer">
        <div class="logo">
          <a href="bismillah.php" id="anasayfa"><i data-feather="home"></i></a>
          <a href="Hakkinda.html" id="Hakkinda"><i data-feather="user"></i></a>
          <a href="sehrim.html" id="sehrim"><i data-feather="flag"></i></a>
          <a href="iletisim.html" id="iletisim"><i data-feather="send"></i></a>
          <a href="logout.php" id="logout"><i data-feather="log-out"></i></a>
        </div>
        <div class="footerNav">
          <ul>
            <li><a href="bismillah.php">Ana Sayfa</a></li>
            <li><a href="Hakkinda.html">Hakkında</a></li>
            <li><a href="sehrim.html">Şehrim</a></li>
            <li><a href="iletisim.html">İletişim</a></li>
            <li><a href="logout.php">Log ut</a></li>
          </ul>
        </div>
        <div class="footerbottom">
          <p>Copyright © [2023]<span> [Muhammad Salman Abdullah Ayyasy - Sakarya University] </span> . All Rights Reserved</p>
        </div>
      </div>
    </footer>

    <script>
      feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>