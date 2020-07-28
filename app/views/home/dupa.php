<main>
  <div id="content">
    <article id="postingan" class="card">
      <section>
        <img src="<?= BASEURL; ?>/assets/img/ganesh-card.jpg" width="700px" class="featured-image" alt="">
        <h1><?= $data['dupa_single']['nama_dupa']; ?></h1>
        <h3>Harga : Rp. <?= number_format($data['dupa_single']['harga_dupa'], 0, ",", "."); ?></h3>
        <p>
          <?= $data['dupa_single']['deskripsi']; ?>
        </p>
      </section>
    </article>
  </div>

  <aside>
    <article class="profile card">
      <header>
        <h3 class="mb-2">Jenis Produk Lainnya</h3>
        <?php foreach ($data['dupa'] as $dupa) : ?>
          <div class="media">
            <ul class="list-unstyled">
              <li class="media">
                <img src="<?= BASEURL; ?>/assets/img/siwa-white.jpg" class="img-thumbnail mr-3" alt="...">
                <div class="media-body">
                  <h5 style="color: red;" class="mt-3 mb-2">New</h5>
                  <a href="<?= BASEURL; ?>/home/dupa/<?= $dupa['id']; ?>"><?= $dupa['nama_dupa'] ?></a>
                </div>
              </li>
            </ul>
          </div>
        <?php endforeach; ?>
      </header>
    </article>
  </aside>
</main>