    <!-- slider -->
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 600; animation: push; autoplay: true;">

        <ul class="uk-slideshow-items">
            <li>
                <img src="<?= BASEURL; ?>/assets/img/siwa-patung.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                  <h2 class="uk-margin-remove">🕉 Ersania Dupa Harum</h2>
                  <p class="uk-margin-remove">Geser untuk melihat</p>
                </div>
            </li>
            <li>
                <img src="<?= BASEURL; ?>/assets/img/siwa-white.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                  <h2 class="uk-margin-remove">🕉 Ersania Dupa Harum</h2>
                  <p class="uk-margin-remove">Geser untuk melihat</p>
                </div>
            </li>
            <li>
                <img src="<?= BASEURL; ?>/assets/img/ganesh-patung.jpg" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                  <h2 class="uk-margin-remove">🕉 Ersania Dupa Harum</h2>
                  <p class="uk-margin-remove">Geser untuk melihat</p>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
    <!-- AKIHIR slider -->

    <!-- card -->
    <h1 class="text-center text-uppercase font-weight-bold"> 🙏🏻 Varian dan Wangi Dupa 🙏🏻</h1>
    <br><br>

  <?php foreach ($data['dupa'] as $dupa) : ?>
  <div class="col mb-4">
    <div class="card-deck">
      <div class="card" uk-scrollspy="cls:uk-animation-slide-left; repeat: true" style="width:100%;">
        <img src="<?= BASEURL; ?>/assets/img/ganesh-patung.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-title"><?= $dupa['nama_dupa']; ?></h2>
            <p class="card-text"><?= $dupa['deskripsi']; ?></p>
            <a href="<?= BASEURL; ?>/home/dupa/<?= $dupa['id']; ?>" class="btn btn-secondary">Cek Lebih Lanjut</a>
          </div>
        </div>
      </div>
  </div>
  <?php endforeach; ?>
      <br><br>
    <!-- end card -->

    <!--start-card-side  -->
    <h1 class="text-center text-uppercase font-weight-bold">Toko Kami 🖐🏻</h1>
    <br><br><br>
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-scrollspy="cls:uk-animation-slide-left; delay: 300; repeat: true" uk-grid>
      <div class="uk-card-media-left uk-cover-container">
          <img src="<?= BASEURL; ?>/assets/img/siwa-white.jpg" alt="" uk-cover>
          <canvas width="600" height="400"></canvas>
      </div>
      <div>
          <div class="uk-card-body">
              <h2 class="uk-card-title">Ersania Dupa Harum</h2>
              <h4>Menjual Dupa Tawar mulai dari kualitas biasa hingga Dupa herbal, mulai dari warna natural hingga berwarna. Kualitas dupa halus, tidak kasar atau gampang pecah, mulai dari abu panas hingga Abu dingin. Selain itu tentu saja kita menjual Dupa kemasan dengan berbagai macam kemasan hingga renteng dengan aroma dan kualitas terjamin.</h4>
          </div>
      </div>
  </div>

  <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-scrollspy="cls:uk-animation-slide-right; delay: 300; repeat: true" uk-grid>
      <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
          <img src="<?= BASEURL; ?>/assets/img/ganesh-card.jpg" alt="" uk-cover>
          <canvas width="600" height="400"></canvas>
      </div>
      <div>
          <div class="uk-card-body">
              <h2 class="uk-card-title">Cara Membuat Dupa</h2>
              <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
          </div>
      </div>
  </div>
    <!-- end-card-side -->
