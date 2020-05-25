<?php
class Admin_model
{

  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getUserBy($param, $value)
  {
    if (isset($param) && isset($value)) {
      $data_user = "SELECT * FROM admin WHERE $param = :$param ";
      $this->db->query($data_user);
      $this->db->bind($param, $value);
      return $this->db->single();
    }
  }

  public function getAllDupa()
  {
    $this->db->query('SELECT * FROM dupa');
    return $this->db->resultSet();
  }

  public function getDupa($id)
  {
    $this->db->query('SELECT * FROM dupa WHERE id =:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function register($data)
  {
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password= htmlspecialchars($data['password']);
    $password_conf = htmlspecialchars($data['password_conf']);

    if ($data_user = $this->getUserBy("username", $username)) {
      var_dump('username ada');
      header("Location: ". BASEURL . "/admin/register");
    }else {
      if (isset($password) && $password !== "" || isset($password_conf) && $password_conf !== "" ) {
        if ($password === $password_conf) {
          $query = "INSERT INTO admin(username, email, password) VALUES(:username, :email, :password)";

          $this->db->query($query);
          $this->db->bind("username", $username);
          $this->db->bind("email", $email);
          $this->db->bind("password", password_hash($password, PASSWORD_DEFAULT));
          $this->db->execute();
          return $this->db->rowCount();
        }else {
          header("Location: ". BASEURL . "/admin/register");
        }
      }else {
        echo "password masih belom dimasukin";
        header("Location: ". BASEURL . "/admin/register");
      }
    }
  }

  public function login($data)
  {
    $username = $data['username'];
    $password = $data['password']; //password yg di input user

    if (isset($username) && $username !== "") {
      //mengquery terlebih dahulu
      if ($data_user = $this->getUserBy('username', $username)){
        $password_user = $data_user['password'];  //password di database

        if (password_verify($password, $password_user)) {
            $_SESSION['username'] = $username;
            $_SESSION['login'] = 'login';
            echo "berhasil";
            header('Location:'. BASEURL .'/admin/dashboard');
          }else {
            var_dump("gagal");
            header('Location:'. BASEURL .'/admin/index');
          }
        }
      }
    }

  public function tambahDupa($data)
  {
    $query = 'INSERT INTO dupa (nama_dupa, harga_dupa) VALUES (:nama_dupa, :harga_dupa)';

    $this->db->query($query);
    $this->db->bind('nama_dupa', $data['nama_dupa']);
    $this->db->bind('harga_dupa', $data['harga_dupa']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDupa($id)
  {
    $query = "DELETE FROM dupa WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cariDupa()
  {
    $keyword = $_POST['keyword'];
    $query = 'SELECT * FROM dupa WHERE nama_dupa LIKE :keyword';
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");
    return $this->db->resultSet();
  }

  public function logout()
  {
    $_SESSION = [];
    session_unset();
    session_destroy();
    header("Location: ". BASEURL . "/admin/index");
    exit;
  }
}
