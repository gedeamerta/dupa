<?php
class Admin extends Controller
{

  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function index()
  {
    if (!isset($_POST['login'])) {
      $data['judul'] = 'Login';
      $this->view('templates/header-admin', $data);
      $this->view('admin/index');
      $this->view('templates/footer-admin');
    }else {
      if ($this->model('Admin_model')->login($_POST) > 0) {
        header('Location:'. BASEURL .'/admin/dashboard');
      }else {
        var_dump('gagal');
        Flasher::setErrorLogin('Invalid Username or Password');
        header('Location:'. BASEURL .'/admin/index');
      }
    }
  }

  // public function register()
  // {
  //   if (!isset($_SESSION['login'])) {
  //     header("Location: ". BASEURL . "/admin/index");
  //   }else {
  //     if (!isset($_POST['register'])) {
  //       $data['judul'] = 'Register';
  //       $this->view("templates/header-admin", $data);
  //       $this->view("admin/register");
  //       $this->view("templates/footer-admin");
  //     }else {
  //       if ($this->model('Admin_model')->register($_POST) > 0) {
  //         var_dump('sukses');
  //         header("Location: ". BASEURL . "/admin/index");
  //       }else {
  //         Flasher::setErrorRegister('Failed to Register');
  //         var_dump('gagal');
  //         hedaer("Location: ". BASEURL . "/admin/register");
  //       }
  //     }
  //   }
  // }

  public function dashboard()
  {
    if (!isset($_SESSION['login'])) {
      header("Location: ". BASEURL . "/admin/index");
    }else {
      $data['judul'] = 'Dashboard';
      $data['dupa'] = $this->model('Admin_model')->getAllDupa();
      $this->view("templates/header-dashboard-admin", $data);
      $this->view("admin/dashboard", $data);
      $this->view("templates/footer-admin");
      exit;
    }
  }

  public function addAdmin()
  {
    if ($this->model('Admin_model')->add($_POST) > 0) {
      Flasher::setFlashRegister('berhasil', 'ditambahkan', 'success');
      var_dump('berhasil');
      header("Location: ". BASEURL . "/admin/dashboard");
    }else {
      Flasher::setFlashRegister('gagal ditambahkan', 'panjang kata sandi minimal harus 8 karakter dan harus menyertakan setidaknya satu huruf besar, dan satu angka.', 'danger');
      var_dump('gagal');
      header("Location: ". BASEURL . "/admin/dashboard");
    }
  }

  public function tambah()
  {
    if ($this->model('Admin_model')->tambahDupa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: '. BASEURL . '/admin/dashboard');
      exit;
    }else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: '. BASEURL . '/admin/dashboard');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Admin_model')->hapusDupa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: '. BASEURL . '/admin/dashboard');
      exit;
    }else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: '. BASEURL . '/admin/dashboard');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Siswa';
    $data['dupa'] = $this->model('Admin_model')->cariDupa();
    $this->view("templates/header-dashboard-admin", $data);
    $this->view("admin/dashboard", $data);
    $this->view("templates/footer-admin");
  }

  public function setOut()
  {
    $this->model('Admin_model')->logout();
  }

}
