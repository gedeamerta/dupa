<?php
class Admin extends Controller
{
  public function login()
  {
    if (!isset($_POST['login'])) {
      $data['judul'] = 'Login';
      $this->view('templates/header-admin', $data);
      $this->view('admin/login');
      $this->view('templates/footer-admin');
    }else {
      if ($this->model('Admin_model')->login($_POST) > 0) {
        Flasher::setErrorLogin('Excellent');
      }else {
        Flasher::setErrorLogin('Invalid Username or Password');
      }
    }
  }

  public function register()
  {
    if (!isset($_POST['register'])) {
      $data['judul'] = 'Register';
      $this->view("templates/header-admin", $data);
      $this->view("admin/register");
      $this->view("templates/footer-admin");
    }else {
      if ($this->model('Admin_model')->register($_POST) > 0) {
        var_dump('sukses');
        header("Location: ". BASEURL . "/admin/login");
      }else {
        Flasher::setErrorRegister('Failed to Register');
        var_dump('gagal');
        hedaer("Location: ". BASEURL . "/admin/register");
      }
    }
  }

  public function index()
  {
    if (!isset($_SESSION['login'])) {
      header("Location: ". BASEURL . "/admin/login");
    }else {
      $data['judul'] = 'Dashboard';
      $data['dupa'] = $this->model('Admin_model')->getAllDupa();
      $this->view("templates/header-dashboard-admin", $data);
      $this->view("admin/index", $data);
      $this->view("templates/footer-admin");
    }
  }

  public function tambah()
  {
    if ($this->model('Admin_model')->tambahDupa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: '. BASEURL . '/admin/index');
      exit;
    }else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: '. BASEURL . '/admin/index');
      exit;
    }
  }

  public function hapus($id)
  {
    if ($this->model('Admin_model')->hapusDupa($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: '. BASEURL . '/admin/index');
      exit;
    }else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
      header('Location: '. BASEURL . '/admin/index');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Siswa';
    $data['dupa'] = $this->model('Admin_model')->cariDupa();
    $this->view("templates/header-dashboard-admin", $data);
    $this->view("admin/index", $data);
    $this->view("templates/footer-admin");
  }

  public function setOut()
  {
    $this->model('Admin_model')->logout();
  }

}
