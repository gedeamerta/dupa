<?php
class Admin extends Controller
{

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

  public function dashboard()
  {
    if (!isset($_SESSION['login'])) {
      $data['judul'] = 'Login';
      $this->view('templates/header-admin', $data);
      $this->view('admin/index');
      $this->view('templates/footer-admin');
    }else {
      $data['dupa'] = $this->model('Admin_model')->getAllDupa();
      $data['admin_single'] = $this->model('Admin_model')->getAdminId($_SESSION['id']);
      $this->view('templates/_sidebar', $data);
      $this->view('templates/_header', $data);
      $this->view('admin/dashboard', $data);
      $this->view('templates/_footer');
    }
  }

  public function forms()
  {
    $data['admin_single'] = $this->model('Admin_model')->getAdminId($_SESSION['id']);
    $this->view('templates/_sidebar', $data);
    $this->view('templates/_header', $data);
    $this->view('admin/forms');
    $this->view('templates/_footer');
  }

  public function addAdmin()
  {
    if ($this->model('Admin_model')->add($_POST) > 0) {
      Flasher::setFlashRegister('berhasil', 'ditambahkan', 'success');
      var_dump('berhasil');
      header("Location: ". BASEURL . "/admin/forms");
    }else {
      Flasher::setFlashRegister('gagal ditambahkan', 'panjang kata sandi minimal harus 8 karakter dan harus menyertakan setidaknya satu huruf besar, dan satu angka.', 'danger');
      var_dump('gagal');
      header("Location: ". BASEURL . "/admin/forms");
    }
  }

  public function tambah()
  {
    if ($this->model('Admin_model')->tambahDupa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: '. BASEURL . '/admin/forms');
      exit;
    }else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: '. BASEURL . '/admin/forms');
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

  public function update()
  {
    echo json_encode($this->model('Admin_model')->getDupa($_POST['id']));
  }

  public function updateDataDupa()
  {
    if ($this->model('Admin_model')->updateDupa($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/admin/dashboard');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/admin/dashboard');
      exit;
    }
  }

  public function cari()
  {
    $data['judul'] = 'Daftar Dupa';
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
