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
                  <li class="nav-item">
                    <a class="nav-link text-light" href="<?= BASEURL; ?>/admin/dashboard">Dupa List<span class="sr-only">(current)</span></a>
                  </li>
              </ul>
          </div>
      </nav>
  <!-- Akhir Navbar -->
