<?php

namespace Model;

use W\Model\Model;

class RoleModel extends Model
{
    public function role($id_status)
    {
        $requete=$this->dbh->prepare("SELECT * FROM user WHERE id_status = :id_status");
        $requete->bindValue('id_status', $id_status);
        $requete->execute();

        return $requete->fetch();
    }

    public function getRoles()
    {
        $requete=$this->dbh->prepare("SELECT * FROM status");
        $requete->execute();

        return $requete->fetchAll();
    }

}