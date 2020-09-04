<?php
class Admin_model
{

  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAdminBy($param, $value)
  {
    if (isset($param) && isset($value)) {
      $data_user = "SELECT * FROM admin WHERE $param = :$param ";
      $this->db->query($data_user);
      $this->db->bind($param, $value);
      return $this->db->single();
    }
  }

  public function getDupaBy($param, $value)
  {
    if (isset($param) && isset($value)) {
      $data_user = "SELECT * FROM dupa WHERE $param = :$param ";
      $this->db->query($data_user);
      $this->db->bind($param, $value);
      return $this->db->single();
    }
  }

  //mengambil data dupa di database dengan batasan 5 data
  public function getAllDupaLimit()
  {
    $this->db->query('SELECT * FROM dupa ORDER BY id DESC LIMIT 5');
    return $this->db->resultSet();
  }

  //mengambil semua dupa di database untuk ditampilkan
  public function getAllDupa()
  {
    $this->db->query('SELECT * FROM dupa');
    return $this->db->resultSet();
  }

  // it has been get id from url(idk what iam doin this hope tomorrow i got some inspiration)
  public function getAdminId($id)
  {
    $this->db->query("SELECT * FROM admin WHERE id=:id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

//mengambil satu data dupa di database untuk ditampilkan
  public function getDupa($id)
  {
    $this->db->query('SELECT * FROM dupa WHERE id =:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

//menambahkan actor admin
  public function add($data)
  {
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $gambar = $_FILES["image"];
    $password= htmlspecialchars($data['password']);
    $password_conf = htmlspecialchars($data['password_conf']);

    //validate password
    $uppercase =  preg_match('@[A-Z]@', $password);
    $lowercase =  preg_match('@[a-z]@', $password);
    $number =  preg_match('@[0-9]@', $password);

    $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
    $targetFile = $targetDir . basename($gambar["name"]);
    $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $uploadOk   = 1;

    $check = getimagesize($gambar["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
      echo "Sorry, only JPG, JPEG, and PNG images are allowed.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($gambar["tmp_name"], $targetFile)) {
        echo "The file " . basename($gambar["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }



    //first check it out if there is an email on database, and if empty email go to register progress
    if ($data_user = $this->getAdminBy("email", $email)) {
      var_dump('email sudah ada');
      header("Location: ". BASEURL . "/admin/dashboard");
    }else {
      if (isset($password) && $password !== "" || isset($password_conf) && $password_conf !== "" ) {
        if ($password === $password_conf) 
        {
          if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) 
          {
                echo '<script>
                        alert("Password should be at least 8 characters in length and should include at least one upper case letter, one number.")
                    </script>';
          }else {
            $query = "INSERT INTO admin(username, email, image, password) VALUES(:username, :email, :image, :password)";

            $this->db->query($query);
            $this->db->bind("username", $username);
            $this->db->bind("email", $email);
            $this->db->bind("image", $gambar['name']);
            $this->db->bind("password", password_hash($password, PASSWORD_DEFAULT));
            $this->db->execute();
            return $this->db->rowCount();
          }
        }else {
          header("Location: ". BASEURL . "/admin/dashboard");
        }
      }else {
        echo "password masih belom dimasukin";
        header("Location: ". BASEURL . "/admin/dashboard");
      }
    }
  }

  public function login($data)
  {
    $username = $data['username'];
    $password = $data['password']; //password yg di input user
      
      if ($data_user = $this->getAdminBy('username', $username)){
        $password_user = $data_user['password'];  //password di database

        if (password_verify($password, $password_user) || $password === $password_user) {
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['login'] = 'login';
            echo "berhasil";
            return true;
          }else {
            var_dump("gagal");
            return false;
          }
        }
    }

  public function tambahDupa($data)
  {
    $targetDir =  __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR;
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $extension  = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $uploadOk   = 1;

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }

    if ($extension != "jpg" && $extension != "png" && $extension != "jpeg") {
      echo "Sorry, only JPG, JPEG, and PNG images are allowed.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

    if ($data_dupa = $this->getDupaBy('nama_dupa', $data['nama_dupa'])) {
      var_dump("Dupa Sudah Ditambahkan");
    }else {
      $query = 'INSERT INTO dupa (nama_dupa, image, harga_dupa, deskripsi) VALUES (:nama_dupa, :image,  :harga_dupa, :deskripsi)';

      $this->db->query($query);
      $this->db->bind('nama_dupa', $data['nama_dupa']);
      $this->db->bind('image', $_FILES['image']["name"]);
      $this->db->bind('harga_dupa', $data['harga_dupa']);
      $this->db->bind('deskripsi', $data['deskripsi']);
      $this->db->execute();

      // finding the image is moved or not
      var_dump($data);
      return $this->db->rowCount();
    }
    
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
    header("Location: ". BASEURL . "/admin/login");
    exit;
  }
}
