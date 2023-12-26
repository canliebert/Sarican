<?php



class User {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "tugas";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        // session_start();
    }

    public function readdata()
    {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
    }

        public function createdata($name, $email, $phone, $date, $gambar)
        {
            
            $targetDir = "upload/";
            $targetFile = $targetDir . basename($gambar["name"]);

        

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if($gambar != null){
                $check = getimagesize($gambar["tmp_name"]);
                if($check !== false){
                    echo "file adalah gambar - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "file bukan gambar. ";
                    $uploadOk = 1;
                }
            }
            if($gambar["size"] > 100000){
                $check = getimagesize($gambar["tmp_name"]);
                    echo "maaf ukuran file terlalu besar";
                    $uploadOk = 0;
            }

            if(
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            ) {
                echo "maaf, hanya folder tertentu yang bisa di upload";
                $uploadOk = 0;
            }



            if(move_uploaded_file($gambar["tmp_name"], $targetFile)){
                echo "File" . basename($gambar["name"]) . "file berhasil diunggah . ";
            } else{
                echo "maaf terjadi kesalahan ";
    
            }

            $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `date`) VALUES (NULL, '$name', '$email', '$phone', '$date')";
            $result = $this->conn->query($sql);

            

            $_SESSION['message'] = "Data berhasil ditambahkan";

            return header('location: index.php');

        
        }


        public function updatedata($id, $name, $email, $phone, $date)
        {

            $sql = "UPDATE `user` SET name= '$name', email= '$email', phone= '$phone', date= '$date' WHERE id=$id";
            $result = $this->conn->query($sql);
            $_SESSION['message'] = "Data berhasil diperbaharui";
            return header('location: index.php');

        }

        public function deletedata($id)
        {
            $id = $_GET['id'];

            $sql = "DELETE FROM user WHERE id = $id";
            $result = $this->conn->query($sql);

            $_SESSION['message'] = "Data berhasil dihapus";

            // return header('locaation: index.php');


        }


    public function loginuser($username, $password)
    {
        $sql 	= "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = $this->conn->query($sql);

        $cek = mysqli_num_rows($result);

        $data = mysqli_fetch_assoc($result);
        
        if(isset($data['password'])) {
            session_start();
            $_SESSION['data']=$data;
            return header("location:index.php");
        } else {
            return header("location:login.php?pesan=gagal login data tidak ditemukan.");
        }
    }



}


?>