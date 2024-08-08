<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('register');
    }

    public function do_register()
    {
        $userModel = new UserModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $data = ['name'=> $name, 'email'=> $email, 'password'=> $password];

        $r = $userModel->insert($data);

        if ($r) {
            return redirect()->to('/register')->with('message', 'user succes');
        } else {
            return redirect()->to('/register')->with('message', 'user gagal');
        }
    }
}
