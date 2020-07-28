<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Form elements</h3>
    </div>

    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Formulir Dupa</h4>
            <p class="card-description">Formulir untuk menambah Dupa </p>
            <?php Flasher::flash(); ?>
            <form class="forms-sample" action="<?= BASEURL; ?>/admin/tambah" method="post">
              <div class="form-group">
                <input type="hidden" id="id" name="id">

                <label for="exampleInputUsername1">Nama Dupa</label>
                <input type="text" class="form-control" id="exampleInputUsername1" type="text" name="nama_dupa" value="" placeholder="Nama Dupa" required />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword2">Gambar Dupa</label>
                  <input type="file" class="form-control" name="image" placeholder="Gambar" />
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga Dupa</label>
                <input type="number" class="form-control" id="exampleInputEmail1" type="number" name="harga_dupa" value="" placeholder="Rp. Harga" required />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi Produk</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="deskripsi" value="" placeholder="Deskripsi Produk" required />
              </div>
              <button type="submit" class="btn btn-primary mr-2"> Submit </button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Admin Form -->
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Formulir Admin</h4>
            <p class="card-description">Formulir tambah Admin </p>
            <?php Flasher::registerFlash(); ?>
            <form class="forms-sample" action="<?= BASEURL; ?>/admin/addAdmin" method="post">
              <div class="form-group row">
                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputUsername2" name="username" value="" placeholder="Username" />
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email" />
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Gambar Profile</label>
                <div class="col-sm-9">
                  <input type="file" class="form-control" name="image" placeholder="Gambar" />
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" />
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="exampleInputConfirmPassword2" name="password_conf" placeholder="Password" />
                </div>
              </div>
              <button type="submit" class="btn btn-primary mr-2" onclick="CheckLength('password')">Submit </button>
              <button class=" btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="" target="_blank">Ersania Dupa Harum</a>. All rights reserved. </span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Gede Amerta & Raditia Satriawan<i class="mdi mdi-question text-danger"></i></span>
        </div>
      </footer>
    </div>
    <!-- main-panel ends -->