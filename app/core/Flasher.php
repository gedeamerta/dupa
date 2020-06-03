<?php
class Flasher
{
 public static function setFlash($pesan, $aksi, $tipe)
 {
   $_SESSION['flash'] = [
     'pesan' => $pesan,
     'aksi' => $aksi,
     'tipe' => $tipe
   ];
 }

 public static function setFlashRegister($pesan, $aksi, $tipe)
 {
   $_SESSION['flash-register'] = [
     'pesan' => $pesan,
     'aksi' => $aksi,
     'tipe' => $tipe
   ];
 }

 public static function setErrorLogin($pesan)
 {
   $_SESSION['error'] = [
     'pesan' => $pesan,
   ];
 }

  public static function errorLogin()
  {
    if (isset($_SESSION['error'])) {
      echo '<style>
          p{
            text-align: center;
            color: red;
          }
      </style>
      <p>'. $_SESSION['error']['pesan'] .'</p>';
      unset($_SESSION['error']);
    }
  }

  public static function registerFlash()
  {
    if (isset($_SESSION['flash-register'])) {
      echo '<div class="uk-alert-'. $_SESSION['flash-register']['tipe'] .'" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Data Admin, <strong> ' . $_SESSION['flash-register']['pesan'] . '</strong> ' . $_SESSION['flash-register']['aksi'] .' </p>
      </div>';
      unset($_SESSION['flash-register']);
    }
  }

  public static function flash()
  {
    if (isset($_SESSION['flash'])) {
      echo '<div class="uk-alert-'. $_SESSION['flash']['tipe'] .'" uk-alert>
      <a class="uk-alert-close" uk-close></a>
      <p>Data Dupa, <strong> ' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] .' </p>
      </div>';
      unset($_SESSION['flash']);
    }
  }
}
