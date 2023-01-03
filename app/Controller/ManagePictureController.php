<?php

namespace Controller;

use Model\CourseModel;
use Model\PictureModel;
use Model\UserModel;

class ManagePictureController extends \W\Controller\Controller
{
    /**
     * Page gestion image
     */
    public function mngPicture()
    {
        $pictures = new PictureModel();
        $coloring = new PictureModel();
        $this->render('/manage/managePicture/managePicture',
            ['pictures' => $pictures->getAllPicture(),
                'coloring' => $coloring->getAllColorPicture()]);
    }

    public function mngPictureOwner()
    {
        $pictures = new PictureModel();
        $string = file_get_contents("https://crsonline.biomedicale.parisdescartes.fr/visio/public/front.php");

        if(FALSE === $string) {
            echo "Could not read the file.";
        }

        $json = json_decode($string, true);

        $imgFromDb = $pictures->getAllDziPictureByUserId($_SESSION['id']);

        foreach ($json AS $key => $img) {

            if ($img['meta']['owner'] == $_SESSION['name'] . '.' . $_SESSION['firstName']) {

                $imgFromServer[] = [
                    'dzi' => $img['dzi'],
                    'url' =>' https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/'. $img['dzi'] .'/file_files/8/0_0.jpeg'
                ];

            }

        }

        $imgNonTraitees = $imgFromServer;

        foreach($imgFromServer AS $dzi) {

            $pos = array_search($dzi, $imgFromDb);
            // Remove from array
            unset($imgFromServer[$pos]);

        }


        $this->render('/manage/managePicture/managePictureOwner',
            ['imageNonTraitees' => $imgNonTraitees,
              'imageTraitees'  => $imgFromDb,
            ]);

    }

    public function mngPictureServerAdd($dzi)
    {
        $string = file_get_contents("https://crsonline.biomedicale.parisdescartes.fr/visio/public/front.php");

        if(FALSE === $string) {
            echo "Could not read the file.";
        }
        $json = json_decode($string, true);

        $pictures = new PictureModel();
        $coloring = new PictureModel();
        $colorInfo = $coloring->getAllColorPicture();
        $imgFromDb = $pictures->getAllPictureByDzi($dzi);
        $pictureInfo = $pictures->getAllPicture();

        foreach ($json AS $key => $img) {

            if ($img['dzi'] == $dzi) {

                $imgFromServer[] = [
                    'dzi' => $img['dzi'],
                    'url' =>' https://crsonline.biomedicale.parisdescartes.fr/visio/assets/dzi/'. $img['dzi'] .'/file_files/8/0_0.jpeg'
                ];

            }

        }

        $dziImg = $imgFromServer;

        foreach($imgFromServer AS $dziImg) {

            $pos = array_search($dziImg, $imgFromDb);
            // Remove from array
            //unset($imgNonTraitees[$pos]);

        }
        $this->render('/manage/managePicture/managePictureServerAdd',
            ['dzi' => $dziImg,
                'picture' => $pictureInfo,
                'colorings' => $colorInfo]);
    }

    public function mngPictureDelete($dzi)
    {
        $id_user=$_SESSION['id'];
        $courses = new PictureModel();
        $courses->deletePicture($dzi, $id_user);
        $this->redirectToRoute('managePicture_mngPictureOwner');
    }

    public function mngPictureColor()
    {
        $coloring = new PictureModel();
        $pictures = new PictureModel();
        $pictureInfo = $pictures->getAllPicture();
        $colorInfo = $coloring->getAllColorPicture();
        $this->render('/manage/managePicture/managePictureColor',
            ['coloring' => $colorInfo,
                'picture' => $pictureInfo]);
    }

    public function mngPictureColorAdd()
    {
        $coloring = new PictureModel();
        $pictures = new PictureModel();
        $pictureInfo = $pictures->getAllPicture();
        $colorInfo = $coloring->getAllColorPicture();
        $this->render('/manage/managePicture/managePictureColorAdd',
            ['coloring' => $colorInfo,
                'picture' => $pictureInfo]);
    }

    public function mngPictureColorInsert()
    {
        $label=$_POST['label'];
        $coloring = new PictureModel();
        $coloring->insertColorPicture($label);
        $this->redirectToRoute('managePicture_mngPictureOwner');
    }

    /**
     * Page gestion image modifier
     */
    public function mngPictureEditById($id)
    {
        $picture = new PictureModel();
        $coloring = new PictureModel();
        $pictureInfo = $picture->getPictureById($id);
        $colorInfo = $coloring->getAllColorPicture();
        $this->render('/manage/managePicture/managePictureEdit',
            ['picture' => $pictureInfo,
                'colorings' => $colorInfo,
                'id' => $id]);
    }

    public function mngPictureUpdate($id)
    {
        //var_dump($_POST);exit;
        $title=$_POST['title'];
        $description=$_POST['description'];
        $url=$_POST['url'];
        $id_coloring=$_POST['id_coloring'];
        $picture = new PictureModel();
        $pictureUpdate = $picture->updatePicture($id, $title, $description, $url, $id_coloring);
        if($pictureUpdate) {
            $message ="c'est la teuf";
            $route ='managePicture_mngPicture';
        } else {
            $message ='on a un probleme';
            $route ='manageUser_mngPictureEditById';
        }

        //$this->redirectToRoute($route, ['message' => $message,'id', $id]);
        $this->redirectToRoute('managePicture_mngPictureOwner', ['message' => $message]);
    }

    public function mngPictureInsert()
    {
        //var_dump($_POST);exit;
        $title=$_POST['title'];
        $description=$_POST['description'];
        $dzi=$_POST['dzi'];
        $url=$_POST['url'];
        $id_user=$_SESSION['id'];
        $id_coloring=$_POST['id_coloring'];
        $picture = new PictureModel();
        $pictureInsert = $picture->addPicture($title, $description, $dzi, $url, $id_user, $id_coloring);
        if($pictureInsert) {
            $message ="c'est la teuf";
            $route ='managePicture_mngPicture';
        } else {
            $message ='on a un probleme';
            $route ='manageUser_mngPictureAdd';
        }

        //$this->redirectToRoute($route, ['message' => $message,'id', $id]);
        $this->redirectToRoute('managePicture_mngPicture', ['message' => $message]);
    }
}