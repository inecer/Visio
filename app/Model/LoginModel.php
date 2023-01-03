<?php

namespace Model;

use W\Model\Model;

class LoginModel extends Model
{
    public function login($email, $pwd)
    {

        $requete=$this->dbh->prepare("SELECT user.*, status.label FROM user LEFT JOIN status ON user.id_status = status.id WHERE email = :email");
        $requete->bindValue('email', $email);
        $requete->execute();
        $result=$requete->fetch();
        if (!$result) {
            return  false;
        }
        $pwdh=$result['pwd'];
        if ((password_verify($pwd,$pwdh))){
            return $result;
        }else{
            return false;
        }
    }
}