<div class="siswa-index">
  <h1>Daftar Dupa</h1>

    <?php Flasher::flash(); ?>

  <button class="uk-button uk-button-secondary uk-margin-small-right tombolTambahData" type="button" uk-toggle="target: #formModal">Tambah Data</button>

  <form class="uk-search uk-search-default" action="<?= BASEURL; ?>/admin/cari" method="post">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" name="keyword" id="keyword" placeholder="Search...">
  </form>
  <br>
  <br>
  <a class="uk-button uk-button-primary uk-margin-small-right" href="<?= BASEURL; ?>/admin/setOut">Log Out</a>
    <!-- This is the modal -->
    <div id="formModal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body ubahData">
            <h2 id="formModalLabel" class="uk-modal-title">Masukan Data Siswa</h2>
            <form class="uk-grid-small" action="<?= BASEURL; ?>/admin/tambah" method="post" uk-grid>
                <input type="hidden" id="id" name="id">
                <div class="uk-inline uk-width-1-2@s">
                    <input class="uk-input" type="text" name="nama_dupa" value="" id="email" placeholder="Nama Dupa">
                </div>

                <div class="uk-inline uk-width-1-2@s">
                    <input class="uk-input" type="number" name="harga_dupa" value="" id="nama"  placeholder="Rp. Harga">
                </div>

                <p class="uk-text-right tombolSubmit">
                  <button style="margin-right: 10px;" class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                  <button class="uk-button uk-button-primary" type="submit">Save</button>
                </p>

          </form>
        </div>
      </div>
  <?php foreach ($data['dupa'] as $dupa) : ?>
      <ul class="uk-list uk-list-striped uk-uppercase">
        <li>
          <?= $dupa['nama_dupa']; ?><br>
          Rp. <?= $dupa['harga_dupa']; ?>
          <a href="<?= BASEURL; ?>/admin/hapus/<?= $dupa['id']; ?>" class="uk-button uk-button-danger uk-float-right uk-margin-left" onclick="return confirm('yakin ?')">Hapus</a>
          <a href="<?= BASEURL; ?>/admin/ubah/<?= $dupa['id']; ?>" uk-toggle="target: #formModal" class="uk-button uk-button-secondary uk-float-right uk-margin-left tampilModalUbah" data-id="<?= $dupa['id']; ?>">Ubah</a>
        </li>
      </ul>
  <?php endforeach; ?>
</div>
