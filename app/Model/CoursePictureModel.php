<?php

namespace Model;

use W\Model\Model;

class CoursePictureModel extends Model
{
    public function getAllCoursePicture(): array
    {

        $requete=$this->dbh->prepare("SELECT id_picture FROM schoolyard_picture ");
        $requete->execute();
        $var=$requete->fetchAll();
        $g =[];
        for($i=0;$i<count($var);$i++){
            $g=array_merge($g,[$var[$i]["id_picture"]]);
        }
        return $g;
    }

    public function getAllCoursePictureById($id_schoolyard): array
    {

        $requete=$this->dbh->prepare("SELECT id_picture FROM schoolyard_picture WHERE id_schoolyard = :id_schoolyard ");
        $requete->bindValue('id_schoolyard', $id_schoolyard);
        $requete->execute();
        $var=$requete->fetchAll();
        $g =[];
        for($i=0;$i<count($var);$i++){
            $g=array_merge($g,[$var[$i]["id_picture"]]);
        }
        return $g;
    }

    public function deleteCoursePicture($id_schoolyard)
    {
        $requete = $this->dbh->prepare('DELETE FROM schoolyard_picture WHERE id_schoolyard = :id_schoolyard');
        $requete->bindValue('id_schoolyard', $id_schoolyard);
        return $requete->execute();
    }

    public function insertCoursePicture($id_schoolyard, $img)
    {
        $requete = $this->dbh->prepare('INSERT INTO schoolyard_picture (id_schoolyard, id_picture) VALUES (:id_schoolyard, :id_picture)');
        $requete->bindValue('id_schoolyard', $id_schoolyard);
        $requete->bindValue('id_picture', $img);
        $requete->execute();
    }
}