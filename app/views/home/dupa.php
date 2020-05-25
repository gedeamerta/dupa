<main>
  <div id="content">
    <article id="postingan" class="card">
      <section>
          <img src="<?= BASEURL; ?>/assets/img/ganesh-card.jpg"  width="700px" class="featured-image" alt="">
          <h1><?= $data['dupa_single']['nama_dupa']; ?></h1>
          <p>
            <?= $data['dupa_single']['deskripsi']; ?>
          </p>
      </section>
    </article>
  </div>

<?php foreach ($data['dupa'] as $dupa) : ?>
  <aside>
    <article class="profile card">
      <header>
        <div class="kategori-list">
          <h3>Jenis Dupa Lainnya</h3>
          <ul>
            <li>
              <figure>
                <img class="imgCenter" src="<?= BASEURL; ?>/assets/img/siwa-white.jpg" alt="">
                  <a href="<?= BASEURL; ?>/home/dupa/<?= $dupa['id']; ?>"><?= $dupa['nama_dupa'] ?></a>
              </figure>
            </li>
            </li>
          </ul>
        </div>
      </header>
    </article>
  </aside>
<?php endforeach; ?>
</main>
