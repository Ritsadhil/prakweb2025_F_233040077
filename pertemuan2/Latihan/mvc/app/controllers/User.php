<?php
class User extends Controller
{
    public function index()
    {
        $data["judul"] = "Data User";
        $data["users"] = $this->model("User_model")->getAllUsers();
        $this->view("list", $data);
    }

    public function detail($id)
    {
        $data["judul"] = "Detail User";
        $data["user"] = $this->model("User_model")->getUserById($id);
        $this->view("detail", $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model("User_model")->addUser($_POST);
            header("Location: /public/User");
            exit;
        } else {
            $data["judul"] = "Tambah User";
            $this->view("users/add", $data);
        }
    }

    public function edit($id)
    {
        $userModel = $this->model("User_model");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel->updateUser($_POST);
            header("Location: /public/User");
            exit;
        } else {
            $data["judul"] = "Edit User";
            $data["user"] = $userModel->getUserById($id);
            $this->view("users/edit", $data);
        }
    }

    public function delete($id)
    {
        $this->model("User_model")->deleteUser($id);
        header("Location: /public/User");
        exit;
    }
}
