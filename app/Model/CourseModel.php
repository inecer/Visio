<?php

namespace Model;

use W\Model\Model;

class CourseModel extends Model
{
    public function getAllCourse()
    {
        $requete=$this->dbh->prepare("SELECT * FROM schoolyard");
        $requete->execute();
        return $requete->fetchAll();
    }

    public function getCourseById($id)
    {
        $requete=$this->dbh->prepare("SELECT * FROM schoolyard WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
        return $requete->fetch();
    }

    public function updateCourse($id, $title, $description)
    {
        $requete=$this->dbh->prepare("UPDATE schoolyard SET title = :title, description = :description WHERE id = :id");
        $requete->bindValue('title', $title);
        $requete->bindValue('description', $description);
        $requete->bindValue('id', $id);
        $requete->execute();
    }

    public function addCourse($title, $description)
    {
        $requete=$this->dbh->prepare("INSERT INTO schoolyard (title, description) VALUES (:title, :description) ");
        $requete->bindValue('title', $title);
        $requete->bindValue('description', $description);
        $result = $requete->execute();
        if ($result) {
            return $this->dbh->lastInsertId();
        }
        return false;
    }

    public function deleteCourse($id)
    {
        $requete=$this->dbh->prepare("DELETE FROM schoolyard WHERE id = :id");
        $requete->bindValue('id', $id);
        $requete->execute();
    }
}