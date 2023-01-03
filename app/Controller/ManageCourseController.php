<?php

namespace Controller;

use Model\CourseModel;
use Model\CoursePictureModel;
use Model\PictureModel;

class ManageCourseController extends \W\Controller\Controller
{
    /**
     * Page gestion cour
     */
    public function mngCourse()
    {
        $courses = new CourseModel();
        $this->render('/manage/manageCourse/manageCourse',
            ['courses' => $courses->getAllCourse()]);
    }

    /**
     * Page gestion cour ajouter
     */
    public function mngCourseAdd()
    {
        $pictures = new PictureModel();
        $course = new CourseModel();
        $coursePictures = new CoursePictureModel();
        $picturesInfo = $pictures->getAllPicture();
        $coursesInfo = $course->getAllCourse();
        $coursePicturesInfo = $coursePictures->getAllCoursePicture();
        $this->render('/manage/manageCourse/manageCourseAdd',
            ['pictures' => $picturesInfo,
                'courses' => $coursesInfo,
                'course_picture' => $coursePicturesInfo]
        );
    }

    public function mngCourseInsert()
    {
        $title=$_POST['title'];
        $description=$_POST['description'];
        $img=$_POST['img'];
        $courses = new CourseModel();
        $coursesPictures = new CoursePictureModel();
        $id_schoolyard = $courses->addCourse($title, $description);
        foreach ($img AS $key=>$image) {
            //dump($image, $id_schoolyard);
            //dump($image . ' ' . $id_schoolyard);exit;
            $coursesPictures->insertCoursePicture($id_schoolyard, $image);
        }
        //dump($coursesPictures);exit;
        //$this->redirectToRoute($route, ['message' => $message,'id', $id]);
        $this->redirectToRoute('manageCourse_mngCourse');
    }

    /**
     * Page gestion cour supprimer
     */
    public function mngCourseDelete($id)
    {
        $courses = new CourseModel();
        $coursesPicture = new CoursePictureModel();
        if(!$courses->deleteCourse($id)) {
            echo "Erreur de suppresion !";
        }
        $coursesPicture->deleteCoursePicture($id);

        $this->redirectToRoute('manageCourse_mngCourse');
    }

    /**
     * Page gestion cour modifier
     */
    public function mngCourseEditById($id)
    {
        $course = new CourseModel();
        $pictures = new PictureModel();
        $coursePictures = new CoursePictureModel();
        $picturesInfo = $pictures->getAllPicture();
        $courseInfo = $course->getCourseById($id);
        $coursePicturesInfo = $coursePictures->getAllCoursePictureById($id);
        $this->render('/manage/manageCourse/manageCourseEdit',
            ['course' => $courseInfo,
                'id' => $id,
                'pictures' => $picturesInfo,
                'course_picture' => $coursePicturesInfo]);
    }

    public function mngCourseUpdate($id)
    {
        //var_dump($_POST);exit;
        $img = $_POST['img'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id_schoolyard = $id;
        $coursesPictures = new CoursePictureModel();
        $course = new CourseModel();
        $course->updateCourse($id, $title, $description);
        if ($coursesPictures->deleteCoursePicture($id_schoolyard)) {
            foreach ($img AS $key=>$image) {
                $coursesPictures->insertCoursePicture($id_schoolyard, $image);
            }
        }
        $this->redirectToRoute('manageCourse_mngCourse');
        /*
        $this->redirectToRoute('manageCourse_mngCourseEditById',
        [ 'id' => $id])
        */
    }
}