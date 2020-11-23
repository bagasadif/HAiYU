<?php

namespace App\Controllers;

use App\Models\M_user;
use CodeIgniter\Controller;

class User extends Controller
{
    public function signin()
    {
        return view('Page/signin');
    }

    public function signup()
    {
        return view('Page/signup');
    }

    public function regis()
    {
        $val = $this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[login.username]',
                    'errors' => [
                        'is_unique' => '{field} already used!'
                    ]
                ],
                'email' => [
                    'rules' => 'required|is_unique[login.email]',
                    'errors' => [
                        'is_unique' => '{field} already used!'
                    ]
                ],
                'password' => 'required',
            ],
        );
        if (!$val) {
            // Code sebelumnya
            // $pesanValidasi = \Config\Services::validation();
            // return redirect()->to('/signup')->withInput()->with('validate', $pesanValidasi);

            session()->setFlashData('pesan', 'Sorry, the email or password is already used!');
            return redirect()->to('/signup');
        } else {
            $userdata = new M_user();
            // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $data = array(
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'level' => 1,
            );

            $data2 = array(
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
            );

            $userdata->saveUser($data);
            $userdata->saveSiswa($data2);

            session()->setFlashData('pesan', 'Congratulation you have successfully registered, Please login!');
            return redirect()->to('/signin');
        }
    }
    public function login()
    {
        helper('cookie');
        $userdata = new M_user();
        $table = 'login';
        $rm = $this->request->getPost('rm');
        $email_username = $this->request->getPost('email_username');
        $password = $this->request->getPost('password');
        $row = $userdata->get_data_login($email_username, $email_username, $table);
        if ($row == NULL) {
            session()->setFlashData('pesan', 'Sorry! your email/username and password doesn\'t match');
            return redirect()->to('/signin');
        }
        if (password_verify($password, $row->password)) {
            $data = array(
                'log' => TRUE,
                'email' => $row->email,
                'username' => $row->username,
            );
            session()->set($data);

            if ($rm == 'on') {
                setcookie('log', 'true', time() + 10000, '/', '');
                setcookie('email', $row->email, time() + 10000, '/', '');
                setcookie('username', $row->username, time() + 10000, '/', '');
            }

            session()->setFlashData('pesan', 'Login succesfully!');
            return redirect()->to('/');
        }
        session()->setFlashData('pesan', 'Sorry! your email/username and password doesn\'t match');
        return redirect()->to('/signin');
    }
    public function logout()
    {
        session()->setFlashData('pesan', 'Logout succesfully!');
        session()->destroy();
        setcookie('log', '', time() - 10000, '/', '');
        setcookie('email', '', time() - 10000, '/', '');
        setcookie('username', '', time() - 10000, '/', '');
        return redirect()->to('/dashboard');
    }
}
