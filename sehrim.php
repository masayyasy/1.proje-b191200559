<?php

$kaynak = 'https://indonesia-public-static-api.vercel.app/api/volcanoes';
$content = file_get_contents($kaynak);
$veri = json_decode($content, true);

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
        <a class="navbar-brand" href="#">Muhammad<span>Salman</span>.</a>
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

    <!-- carousel -->
      <div class="container-fluid pt-1 pb-5" id="Hobilerim" style="background-image: url(resim/bg1.jpeg); background-size: contain;">
        <div class="container text-center">
        <div id="carouselExampleCaptions" class="carousel slide mt-5">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="resim/rao1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>PUNPANJALİ DANSI</h5>
                <p>Bali'deki misafirlere "hoş geldiniz" ifadesi olarak bir karşılama dansı türüdür, ancak resimde gösterilen yalnızca eşlik eden dansçıdır (ana dansçı değil).​</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="resim/rao3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>"WAYANG" İNSANI</h5>
                <p>"Wayang" insanı bir karakter olarak kullanarak oynanan Halk Hikayeleri. Genellikle bu gösteri büyük etkinliklerde yapılır ve geniş bir alandadır ve bir çok kişi izliyor.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="resim/rao5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>DALANG</h5>
                <p>Wayang dünyasındaki, wayang oynamakta özel uzmanlığa sahip biri olarak yorumlanabilir ve izlemesi ilginç bir hikaye haline gelir.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
      </div>

      <!-- mboh -->
      <div class="container-fluid Beceriler pt-5 pb-5" style="background-image: url(resim/bg1.jpeg); background-size: contain;">      
      <div class="container text-center">
        <h2 class="display-3" id="dans" style="color: black; font-weight: 800;">E N D O N E Z Y A</h2>
        <p style="color: black;">
        Endonezya, Asya kıtasında, Güneydoğu Asya'da (ASEAN) yer alan bir cumhuriyet ülkesidir. 1.904.569 km² yüzölçümü ile dünyanın
         en büyük 14. ülkesi ve en büyük takımada ülkesi ve toplam 17.504 adasıyla dünyanın 6. en ada ülkesidir. 2022'de 1340 etnik 
         grup ve 742 dile bölünmüş nüfus 277.749.853'e ulaşıyor. Endonezya, Malezya, Papua Yeni Gine, Doğu Timor, Singapur, Filipinler, 
         Avustralya, Tayland, Vietnam, Palau ve Hindistan'ın Andaman ve Nikobar Adaları birleşik bölgesi ile sınır komşusudur.
        </p>
        <div class="row pt-3">
          <div class="col-md-3">
            <a href="https://www.chefspencil.com/top-30-most-popular-foods-in-indonesia/">
              <img src="resim/nasg.jpg" 
              class="card-img-top"
              width="200"
              height="200"
              /></a>       
            <h3 class="mt-3" style="color: black;">Yemekleri</h3>
            <p style="color: black;">tatlıdan tuzluya, acıdan baharatlıya kadar çeşitli Endonezya yemekleri, ancak Endonezya halkı baharatlı yiyecekleri tercih ediyor</p>
          </div>
          <div class="col-md-3">
            <a href="https://www.indonesia.travel/id/id/home">
              <img src="resim/cand.jpg" 
              class="card-img-top"
              width="200"
              height="200"
              /></a>       
            <h3 class="mt-3" style="color: black;">Kültür</h3>
            <p style="color: black;">Endonezya'da çok çeşitli danslar, müzik aletleri, geleneksel evler, geleneksel savaş silahları, geleneksel giysiler gibi çeşitli kültür türleri</p>
          </div>
            <div class="col-md-3">
              <a href="https://kemenparekraf.go.id/en">
                <img src="resim/bali.jpg" 
              class="card-img-top"
              width="200"
              height="200"
              /></a>              
              <h3 class="mt-3" style="color: black;">Türizm</h3>
              <p style="color: black;">Endonezya bir takımada ülkesi olduğu için çok güzel plajları var, bazıları dağların yanında, bazıları açık denizlerde. "danau TOBA" çok geniş Gölü, güzel dağlar gibi birçok tatil yeri de vardır.</p>
            </div>
            <div class="col-md-3">
              <a href="https://indonesia.go.id/kategori/keanekaragaman-hayati">
                <img src="resim/kom.jpg" 
              class="card-img-top"
              width="200"
              height="200"
              /></a>              
              <h3 class="mt-3" style="color: black;">Biyolojik Çeşitlilik</h3>
              <p style="color: black;">Endonezya, nadir ve güzel hayvanlar (kuşlar, yunuslar, orangutanlar, kangurular) gibi diğer ülkelerde olmayan birçok biyolojik çeşitliliğe sahiptir ve burada bile dinozorlarda vardır.</p>
            </div>            
        </div>
        <p style="color: black;">
        Endonezya'ya gidelim! yukarıda açıklanan birçok şeyle Endonezya'ya gelin, burada çeşitli dinler var ama burada nüfusun çoğunluğu İslam'da çeşitlidir, ancak Endonezya dünyanın tektonik ve <a href="#gunung">volkanik</a> levhalarındadır, bu nedenle Endonezya ülkesi sık sık felaketler alır. bu nedenle veriler aşağıda Endonezya'daki dağlarla ilgili en son bilgiler sunulmuştur.
        </p>
      </div>
    </div>
    <!-- api -->
    <div class="container-fluid Beceriler pt-5 pb-5" style="background-image: url(resim/bg1.jpeg); background-size: contain;">
    <div class="container text-center">        
        <h2 class="display-3" id="gunung" style="color: black; font-weight: bold;">Dağlar</h2>
        <p>gunung</p>
        <div class="row pt-4 gx-4 gy-4">
          <?php foreach ($veri as $row){         
          ?> 
          <div class="col-md-3">
            <div class="card">              
              <div class="card-body">
                <h5 class="card-title" href="Card title"><?php echo $row ['nama'] ?></h5>
                  <p class="card-text" style="text-font : 1;">Şekil             :<?php echo $row ['bentuk'] ?></p>
                  <p class="card-text">Metre yukseklik   :<?php echo $row ['tinggi_meter'] ?></p>
                  <p class="card-text">Tahmin son patlama:<?php echo $row ['estimasi_letusan_terakhir'] ?></p>
                  <p class="card-text">Coğrafi Konum     :<?php echo $row ['geolokasi'] ?></p>
              </div>
            </div>
          </div>
          <?php } ?>          
        </div>      
    </div>
    </div>


    <!-- geldi kapat -->
    <footer>
      <div class="footercontainer">
        <div class="logo">
          <a href="bismillah.php" id="anasayfa"><i data-feather="home"></i></a>
          <a href="Hakkinda.html" id="Hakkinda"><i data-feather="user"></i></a>
          <a href="sehrim.php" id="sehrim"><i data-feather="flag"></i></a>
          <a href="iletisim.html" id="iletisim"><i data-feather="send"></i></a>
          <a href="logout.php" id="logout"><i data-feather="log-out"></i></a>
        </div>
        <div class="footerNav">
          <ul>
            <li><a href="bismillah.php">Ana Sayfa</a></li>
            <li><a href="Hakkinda.html">Hakkında</a></li>
            <li><a href="sehrim.php">Şehrim</a></li>
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