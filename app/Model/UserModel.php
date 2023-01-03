<?php

namespace Model;

use W\Model\UsersModel;

class UserModel extends UsersModel
{
    public function getAllUser()
    {
        $requete=$this->dbh->prepare("SELECT user.*, status.label FROM user LEFT JOIN status ON user.id_status = status.id");
        $requete->execute();
        return $requete->fetchAll();
    }
    public function getUserById($id)
    {
        $requete=$this->dbh->prepare("SELECT * FROM user WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetch();
    }

    public function getAllUserByRole($id)
    {
        $requete=$this->dbh->prepare("SELECT user.*, status.label FROM user LEFT JOIN status ON user.id_status = status.id WHERE status.id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function updateUser($id, $name, $firstName, $email, $id_status)
    {
        $requete=$this->dbh->prepare("UPDATE user SET name = :name, firstName = :firstName, email = :email, id_status = :id_status WHERE id = :id");
        $requete->bindValue('name', $name);
        $requete->bindValue('firstName', $firstName);
        $requete->bindValue('email', $email);
        $requete->bindValue('id', $id);
        $requete->bindValue('id_status', $id_status);
        $requete->execute();
    }

    public function deleteUser($id)
    {
        $requete=$this->dbh->prepare("DELETE FROM user WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
    }

    public function banUser($id)
    {
        $requete=$this->dbh->prepare("UPDATE user SET blocked = 1 WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
    }

    public function unbanUser($id)
    {
        $requete=$this->dbh->prepare("UPDATE user SET blocked = 0 WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
    }
}