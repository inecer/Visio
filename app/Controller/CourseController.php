<?php

namespace Controller;

use Model\CourseModel;
use Model\CoursePictureModel;
use Model\PictureModel;

class CourseController extends \W\Controller\Controller
{
    /**
     * Page de la liste des cours
     */
    public function courseList()
    {
        $courses = new CourseModel();
        $allCourse = $courses->getAllCourse();
        $this->render('/courseList',
            ['courses' =>$allCourse]);
    }

    /**
     * Page du cour
     */
    public function courseById($id)
    {
        $id_schoolyard = $id;
        $course = new CourseModel();
        $pictures = new PictureModel();
        $course_picture = new CoursePictureModel();
        $courseById = $course->getCourseById($id);
        $picturesInfo = $pictures->getAllPicture();
        $course_pictureInfo = $course_picture->getAllCoursePictureById($id_schoolyard);
        $this->render('/course',
            ['courses' => $courseById,
                'course_picture' => $course_pictureInfo,
                'pictures' => $picturesInfo,
                'id' => $id]);
    }

        public function courseImg($dzi)
    {
        $coloring = new PictureModel();
        $pictures = new PictureModel();
        $pictureDzi = $pictures->getAllPictureByDzi($dzi);
        $colorInfo = $coloring->getColorPicture($pictureDzi['id_coloring']);
        dump($dzi);
        $this->render('/courseImg',
            ['img' => $dzi,
                'coloring' => $colorInfo,
            ]);
    }
}