<?php
class m_userList
{
    public $hasil = array();
    public $users = array();
    private $mysqli;

    public function __construct()
    {
        require "koneksiMVC.php";
        $this->mysqli = $mysqli;
    }
    public function addUser($data)
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("INSERT INTO user VALUES ('null', '$data[username]', '$data[password]','$data[fname]', '$data[position]', '$data[salary]')");
    }
    public function getAllUsers()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM user");
        while ($row = $rs->fetch_assoc()) {
            $this->hasil[] = $row;
        }
        return $this->hasil;
    }

    public function getUsers() {
        $rs = $this->mysqli->query("SELECT * FROM user");
        while ($row = $rs->fetch_assoc()) {
            $this->users[] = $row;
        }
        return $this->users;
    }

    public function getUser($nomor)
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM user WHERE id = $nomor");
        $this->hasil = $rs->fetch_array();
        return $this->hasil;
    }

    public function deleteData($nomor) {
        require "koneksiMVC.php";
        $rs = $mysqli->query("DELETE FROM user WHERE id = $nomor");
    }

    public function editData($nomor, $username, $password, $name, $position, $salary) {
        require "koneksiMVC.php";
        $rs = $mysqli->query("UPDATE user SET username = '$username',password= '$password', name='$name', position='$position', salary='$salary' WHERE id = $nomor");
    }
}
