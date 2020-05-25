<?php
class Home extends Controller
{

  public function index()
  {
    $data['judul'] = 'Index';
    $data['dupa'] = $this->model('Admin_model')->getAllDupa();
    $this->view("templates/header", $data);
    $this->view("home/index", $data);
    $this->view("templates/footer");
  }

  public function about()
  {
    $data['judul'] = 'About';
    $this->view("templates/header", $data);
    $this->view("home/about");
    $this->view("templates/footer");
  }

  public function pembuatan()
  {
    $data['judul'] = 'Pembuatan';
    $this->view("templates/header", $data);
    $this->view("home/pembuatan");
    $this->view("templates/footer");
  }

  public function dupa($id)
  {
    $data['judul'] = 'Dupa';
    $data['dupa_single'] = $this->model('Admin_model')->getDupa($id);
    $data['dupa'] = $this->model('Admin_model')->getAllDupa();
    $this->view("templates/header", $data);
    $this->view("home/dupa", $data);
    $this->view("templates/footer");
  }
}
