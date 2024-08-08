<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        echo view('login');
    }

    public function do_login()
    {
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        
        if (empty($email) || empty($password)) {
            echo 'Email atau password tidak diterima.';
            return;
        }

        $result = $userModel->where('email', $email)->first();

        
        echo '<pre>';
        print_r($result);
        echo '</pre>';

        if ($result) {
            
            if (isset($result['password'])) {
                if ($password == $result['password']) {
                    $this->session->set('user', $result);
                    return redirect()->to(base_url('admin/post/#'));
                } else {
                    echo 'Invalid password.';
                }
            }
           
            elseif (isset($result->password)) {
                if ($password == $result->password) {
                    $this->session->set('user', $result);
                    return redirect()->to(base_url('admin/post/#')); 
                    echo 'Invalid password.';
                }
            } else {
                echo 'Password field not found in result.';
            }
        } else {
            echo 'Invalid user.';
        }
    }
}
