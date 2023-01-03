<?php

namespace Model;

use W\Model\Model;

class RegisterModel extends Model
{
    public function register($name, $firstName, $username, $email, $pwd)
    {
        $requete=$this->dbh->prepare("
            INSERT INTO user (name, firstName, username, email, pwd)
            VALUES ( :name, :firstName, :username, :email, :pwd)");
        $requete->bindValue('name', $name);
        $requete->bindValue('firstName', $firstName);
        $requete->bindValue('username', $username);
        $requete->bindValue('email', $email);
        $requete->bindValue('pwd', $pwd);
        $requete->execute();
    }

    public function verifyEmail ($email)
    {
        $requete=$this->dbh->prepare('SELECT email FROM user');
        $requete->execute();
        $requete->fetchAll();
    }
}