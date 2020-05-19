<?php
class Home extends Controller
{

  public function index()
  {
    $data['judul'] = 'Index';
    $this->view("templates/header", $data);
    $this->view("home/index");
    $this->view("templates/footer");
  }

  public function about()
  {
    $data['judul'] = 'About';
    $this->view("templates/header", $data);
    $this->view("home/about");
    $this->view("templates/footer");
  }
}
