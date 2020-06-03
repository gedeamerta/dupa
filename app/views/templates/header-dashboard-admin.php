<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css" /> -->

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,300;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css-uikit/uikit.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/uikit.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/style.css">

    <title><?= $data['judul']; ?></title>
</head>

<body>
  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand text-light" href="<?= BASEURL; ?>/home/index">🕉 Ersania Dupa Harum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="" uk-toggle="target: #formAdmin">Add New Admin</a>
                  <div class="dropdown-divider"></div>
                  <a class="nav-link" href="<?= BASEURL; ?>/admin/setOut">Log Out</a>
                </div>
              </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="<?= BASEURL; ?>/home/index">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="<?= BASEURL; ?>/admin/dashboard">Dupa List</a>
                </li>
            </ul>
        </div>

      </nav>

      <?php Flasher::registerFlash(); ?>
  <!-- Akhir Navbar -->

  <!-- start modal add admin -->
  <div id="formAdmin" uk-modal>
      <div class="uk-modal-dialog uk-modal-body ubahData">
          <h2 id="formModalLabel" class="uk-modal-title">Masukan Data Admin</h2>

          <form class="uk-grid-small" action="<?= BASEURL; ?>/admin/addAdmin" method="post" uk-grid>
              <input type="hidden" id="id" name="id">
              <div class="uk-inline uk-width-1-2@s">
                  <input class="uk-input" type="text" name="username" value="" id="username" placeholder="Username">
              </div>

              <div class="uk-inline uk-width-1-2@s">
                  <input class="uk-input" type="email" name="email" value="" id="email"  placeholder="Email">
              </div>

              <div class="uk-inline uk-width-1-2@s">
                  <input class="uk-input" type="password" name="password" value="" id="password"  placeholder="Password">

              </div>

              <div class="uk-inline uk-width-1-2@s">
                  <input class="uk-input" type="password" name="password_conf" value="" id="password_conf"  placeholder="Re-type Paswsword">
              </div>

              <p class="uk-text-right tombolSubmit">
                <button style="margin-right: 10px;" class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="submit" onclick="CheckLength('password')">Save</button>
              </p>

        </form>
      </div>
    </div>
  <!-- end modal add admin -->
