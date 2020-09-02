<?php
include_once("m_userList.php");
class c_userList
{
    public $model;
    public function __construct()
    {
        $this->model = new m_userList();
    }

    public function invoke()
    {
        $hasil = $this->model->getAllUsers();
        include 'v_userList.php';
    }

    public function editData($nomor, $username, $password, $name, $position, $salary)
    {
        $this->model->editData($nomor, $username, $password, $name, $position, $salary);
        header('Location:index.php');
    }

    public function delete($nomor)
    {
        $this->model->deleteData($nomor);
        header('Location:index.php');
    }
    public function insert()
    {
        $this->model->addUser($_POST);
        header('Location:index.php');
    }

    public function viewEdit($nomor)
    {
        $hasil = $this->model->getUser($nomor);
        include "v_editUser.php";
    }
}
