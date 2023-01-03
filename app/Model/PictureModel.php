<?php

namespace Model;

use W\Model\Model;

class PictureModel extends Model
{
    public function getAllPicture()
    {
        $requete=$this->dbh->prepare("SELECT * FROM picture");
        $requete->execute();
        return $requete->fetchAll();
    }

    public function getIdColorPicture($id)
    {
        $requete=$this->dbh->prepare("SELECT label FROM coloring WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetch();
    }

    public function getPictureById($id)
    {
        $requete=$this->dbh->prepare("SELECT * FROM picture WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetch();
    }

    public function getAllDziPictureByUserId($id)
    {
        $requete=$this->dbh->prepare("SELECT * FROM picture WHERE id_user = :id_user");
        $requete->bindValue('id_user', $id);
        $requete->execute();
        return $requete->fetchAll();
    }

    public function getAllPictureByDzi($dzi)
    {
        $requete=$this->dbh->prepare("SELECT * FROM picture WHERE dzi = :dzi");
        $requete->bindValue('dzi', $dzi);
        $requete->execute();
        return $requete->fetch();
    }

    public function updatePicture($id, $title, $description, $url, $id_coloring)
    {
        $requete=$this->dbh->prepare("UPDATE picture 
                    SET title = :title, 
                        description = :description, 
                        url = :url, 
                        id_coloring = :id_coloring 
                    WHERE id = :id");

        $requete->bindValue('title', $title);
        $requete->bindValue('description', $description);
        $requete->bindValue('url', $url);
        $requete->bindValue('id_coloring', $id_coloring);
        $requete->bindValue('id', $id);
        $requete->execute();
    }

    public function addPicture($title, $description, $dzi, $url, $id_user, $id_coloring)
    {
        $requete=$this->dbh->prepare("INSERT INTO picture (title, description, dzi, url, id_user, id_coloring) 
                            VALUES (:title, :description, :dzi , :url, :id_user, :id_coloring)");
        $requete->bindValue('title', $title);
        $requete->bindValue('description', $description);
        $requete->bindValue('dzi', $dzi);
        $requete->bindValue('url', $url);
        $requete->bindValue('id_user', $id_user);
        $requete->bindValue('id_coloring', $id_coloring);
        $requete->execute();
    }

    public function addUrl($url)
    {
        $requete=$this->dbh->prepare("INSERT INTO picture (url) VALUES (:url) ");
        $requete->bindValue('url', $url);
        $requete->execute();
    }

    public function getAllColorPicture()
    {
        $requete=$this->dbh->prepare("SELECT * FROM coloring");
        $requete->execute();
        return $requete->fetchAll();
    }

    public function getColorPicture($id)
    {
        $requete=$this->dbh->prepare("SELECT label FROM coloring WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetch();
    }

    public function insertColorPicture($label)
    {
        $requete=$this->dbh->prepare("INSERT INTO coloring (label) VALUES (:label) ");
        $requete->bindValue('label', $label);
        $requete->execute();
        return $requete->fetchAll();
    }
}