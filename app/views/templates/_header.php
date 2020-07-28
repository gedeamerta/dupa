<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin Dupa Ersania</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css-uikit/uikit.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/css/uikit.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/style.css">

    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets/assets/css/style.css" />
    <link rel="shortcut icon" href="<?= BASEURL; ?>/assets/assets/images/favicon.png" />
</head>

<body>
    <div class="container-fluid page-body-wrapper">
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
            <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
                <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="<?= BASEURL; ?>/admin/dashboard2">🕉 Ersania Dupa Harum</a>
                <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
                    <i class="mdi mdi-menu"></i>
                </button>
                <ul class="navbar-nav navbar-nav-right ml-lg-auto">
                    <li class="nav-item nav-profile dropdown border-0">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                            <img class="nav-profile-img mr-2" alt="" src="<?= BASEURL; ?>/assets/assets/images/faces/face1.jpg" />
                            <span class="profile-name"><?= $_SESSION['username']; ?></span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="<?= BASEURL; ?>/admin/setOut">
                                <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>