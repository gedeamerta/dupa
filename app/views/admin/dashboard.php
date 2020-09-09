<!-- main panel -->
<div class="main-panel">
  <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <?php foreach ($data['dupa'] as $dupa) : ?>
      <div>
        <?php Flasher::flash(); ?>
        <div class="uk-card uk-card-default uk-card-body">
          <h3 class="uk-card-title"><?= $dupa['nama_dupa']; ?><br></h3>
          <img src="<?= BASEURL . "/assets/img/" . $dupa["image"]; ?>" class="card-img-top" alt="...">
          <h4 class="uk-margin">Rp. <?= number_format($dupa['harga_dupa'], 0, ",", "."); ?></h4>
          <p><?= $dupa['deskripsi']; ?></p>

          <a href="<?= BASEURL; ?>/admin/hapus/<?= $dupa['id']; ?>" class="uk-button uk-button-danger uk-float-right uk-margin-left" onclick="return confirm('yakin ?')">Hapus</a>

          <a href="<?= BASEURL; ?>/admin/update/<?= $dupa['id']; ?>" data-toggle="modal" data-target="#form" class="uk-button uk-button-secondary uk-float-right uk-margin-left updateDupa" data-id="<?= $dupa['id']; ?>">Ubah</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


  <!-- Start Modal -->
  <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= BASEURL; ?>/admin/updateDataDupa" class="forms-sample" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <input type="hidden" id="id" name="id">

              <label for="nama_dupa">Nama Dupa</label>
              <input type="text" class="form-control" type="text" name="nama_dupa" value="" placeholder="Nama Dupa" id="nama_dupa" required />
            </div>
            <div class="form-group">
              <label for="image_dupa">Gambar Dupa</label>
              <input type="file" class="form-control" name="image" placeholder="Gambar" accept="image/jpeg , image/png" id="image_dupa" />
            </div>
            <div class="form-group">
              <label for="harga_dupa">Harga Dupa</label>
              <input type="number" class="form-control" type="number" name="harga_dupa" value="" placeholder="Rp. Harga" id="harga_dupa" required />
            </div>
            <div class="form-group">
              <label for="deskripsi_dupa">Deskripsi Produk</label>
              <textarea type="text" class="form-control" name="deskripsi" value="" placeholder="Deskripsi Produk" id="deskripsi_dupa" required></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal -->

  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
    </div>
  </footer>
</div>
<!-- main-panel ends -->