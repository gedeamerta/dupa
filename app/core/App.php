<?php
// membuat akses url untuk controller, method dan main
class App
{
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct()
  {
    $url = $this->parseURL();

    // untuk Controller
    if($url == NULL) {$url = [$this->controller];}
    if (file_exists('app/controllers/' . $url[0] . '.php')) {
      //array[0] mencari array paling pertama pada url yaitu controller
      //ada tidak file yang namanya home.php di dalam folder controller
      $this->controller = $url[0];
      unset($url[0]); //agar mendapatkan parameter nya
    }
    require_once 'app/controllers/'. $this->controller . '.php'; //controller nya udah baru atau udah ke unset
    $this->controller = new $this->controller; //instance controller

    // untuk Method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // untuk Params
    if (!empty($url)) {
      $this->params = array_values($url);
    }

    // jalankan controller dan method serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);

  }

  public function parseURL()
  {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); //mengapus simbol '/'
      $url = filter_var($url, FILTER_SANITIZE_URL); //membersihkan url
      $url = explode('/', $url); //memecah url
      return $url;
    }
  }
}
