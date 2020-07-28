        <!-- main panel -->
        <div class="main-panel">
          <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
            <?php foreach ($data['dupa'] as $dupa) : ?>
              <div>
                <div class="uk-card uk-card-default uk-card-body">
                  <h3 class="uk-card-title"><?= $dupa['nama_dupa']; ?><br></h3>
                  <h4>Rp. <?= number_format($dupa['harga_dupa'], 0, ",", "."); ?></h4>
                  <p><?= $dupa['deskripsi']; ?></p>

                  <a href="<?= BASEURL; ?>/admin/hapus/<?= $dupa['id']; ?>" class="uk-button uk-button-danger uk-float-right uk-margin-left" onclick="return confirm('yakin ?')">Hapus</a>
                  <!-- <a href="<?= BASEURL; ?>/admin/ubah/<?= $dupa['id']; ?>" uk-toggle="target: #formModal" class="uk-button uk-button-secondary uk-float-right uk-margin-left tampilModalUbah" data-id="<?= $dupa['id']; ?>">Ubah</a> -->
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>