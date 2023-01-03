<?php

namespace Controller;

use Model\LoginModel;

class LoginController extends \W\Controller\Controller
{
    /**
     * Page connexion
     */
    public function login()
    {
        $this->render('/login');
    }

    public function logon()
    {
        $email=$_POST['email'];
        $pwd=$_POST['pwd'];
        $login = new LoginModel();
        $loginlogin = $login->login($email, $pwd);
        if(!$loginlogin){
            $this->render('/login',['is_connected' => "false"]);
        }else{
            $id=$loginlogin['id'];
            $name= $loginlogin['name'];
            $firstName= $loginlogin["firstName"];
            $_SESSION['email']=$email;
            $_SESSION['id'] = $id;
            $_SESSION['name']=$name;
            $_SESSION['firstName']=$firstName;
            $_SESSION['is_connected']="true";
            $_SESSION['status'] = $loginlogin['label'];
            $this->redirectToRoute('home_home');
        }
    }

    public function exit()
    {
        session_destroy();
        $this->redirectToRoute('home_home');
    }

    /**
     * Page mot de passe oublié
     */
    public function pwd()
    {
        $this->render('/loginPwd');
    }
}