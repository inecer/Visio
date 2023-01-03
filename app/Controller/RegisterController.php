<?php

namespace Controller;

use Model\RegisterModel;

class RegisterController extends \W\Controller\Controller
{
    /**
     * Page inscription
     */
    public function register()
    {
        $this->render('/register');
    }

    public function registerInsert()
    {
        $register = new RegisterModel();
        $name=$_POST['name'];
        $firstName=$_POST['firstName'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $verifyEmail = $register->verifyEmail($email);
        if ($verifyEmail) {
            $this->render('/register',['verify_email' => "false"]);
        } else {
            $pwdNotH=$_POST['pwd'];
            $pwd=password_hash($pwdNotH,PASSWORD_BCRYPT);
            $registerInsert = $register->register($name, $firstName, $username, $email, $pwd);
            $this->redirectToRoute('login_login');
        }
    }

}