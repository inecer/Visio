<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Visio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <section>
        <?=$this->section('galleryImgHeader_content'); ?>
    </section>
</head>
<nav class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">
    <div class="container mx-auto px-6 py-2 flex justify-between items-center">
        <a href="<?=$this->url("home_home")?>" class="font-bold text-2xl lg:text-4xl text-left">
            Visio
        </a>

        <?php if (in_array($_SESSION['status'],['Administrateur','Enseignant','Auteur'])): ?>
        <!-- Menu gestion -->
        <div class="p-2">

            <div class="dropdown inline-block relative ">
                <button class="bg-white text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center">
                    <span class="mr-1">Gestion</span>
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                </button>
                    <?php if ($_SESSION['status'] == 'Administrateur'): ?>
                    <ul class="dropdown-menu absolute -top-[15px] -right-[120px] hidden text-gray-700 pt-1 ">
                        <li><a class="rounded-t bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("manageUser_mngUser")?>">Utilisateurs</a></li>
                        <li><a class="bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("manageCourse_mngCourse")?>">Cours</a></li>
                        <li><a class="rounded-b bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("managePicture_mngPicture")?>">Images</a></li>
                    <?php endif ?>
                    <?php if ($_SESSION['status'] == 'Enseignant'): ?>
                    <ul class="dropdown-menu absolute -top-[10px] -right-[90px] hidden text-gray-700 pt-1">
                        <li><a class="bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("manageCourse_mngCourse")?>">Cours</a></li>
                        <li><a class="rounded-b bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("managePicture_mngPicture")?>">Images</a></li>
                    <?php endif ?>
                    <?php if ($_SESSION['status'] == 'Auteur'): ?>
                    <ul class="dropdown-menu absolute -top-[10px] -right-[90px] hidden text-gray-700 pt-1">
                        <li><a class="rounded-b bg-white border-solid border-2 hover:bg-indigo-500 hover:text-white py-2 px-4 block whitespace-no-wrap transition ease-in duration-150" href="<?=$this->url("managePicture_mngPicture")?>">Images</a></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
        <?php endif ?>
        <div class="md:block">
    <div>
        <?php if ($_SESSION['id'] == 0): ?>
            <a class="inline-block p-2 text-gray-900 hover:text-gray-500 transition ease-in duration-150" href="<?=$this->url("course_courseList")?>">Cours</a>
            <a class="inline-flex text-white bg-indigo-500 border-0 p-2 focus:outline-none hover:bg-indigo-600 rounded transition ease-in duration-150" href="<?=$this->url("register_register")?>">Inscription</a>
            <a class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 p-2 focus:outline-none hover:bg-gray-300 rounded transition ease-in duration-150" href="<?=$this->url("login_login")?>">Connexion</a>
        <?php else: ?>
            <a class="inline-flex text-white bg-indigo-500 border-0 p-2 focus:outline-none hover:bg-indigo-300 hover:text-indigo-800 rounded transition ease-in duration-150" href="<?=$this->url("course_courseList")?>">Cours</a>
            <a class="inline-flex text-white bg-red-500 border-0 p-2 focus:outline-none hover:bg-red-300 hover:text-red-800 rounded transition ease-in duration-150" href="<?=$this->url("login_exit")?>">Déconnexion</a>
        <?php endif ?>
    </div>
</nav>
    <body>
    <section>
        <!-- CONTENU SPÉCIFIQUE À CHAQUE PAGE ICI -->
        <?=$this->section('home_content'); ?>

        <?=$this->section('login_content'); ?>
        <?=$this->section('loginPwd_content'); ?>

        <?=$this->section('register_content'); ?>

        <?=$this->section('courseList_content'); ?>
        <?=$this->section('course_content'); ?>
        <?=$this->section('courseImg_content'); ?>

        <?=$this->section('manageUser_content'); ?>
        <?=$this->section('manageUserDelete_content'); ?>
        <?=$this->section('manageUserBan_content'); ?>
        <?=$this->section('manageUserEdit_content'); ?>

        <?=$this->section('managePicture_content'); ?>
        <?=$this->section('managePictureAdd_content') ?>
        <?=$this->section('managePictureEdit_content') ?>
        <?=$this->section('managePictureOwner_content') ?>
        <?=$this->section('managePictureServerAdd_content') ?>
        <?=$this->section('managePictureColor_content') ?>
        <?=$this->section('managePictureColorAdd_content') ?>

        <?=$this->section('manageCourse_content'); ?>
        <?=$this->section('manageCourseAdd_content'); ?>
        <?=$this->section('manageCourseDelete_content'); ?>
        <?=$this->section('manageCourseEdit_content'); ?>

    </section>
    </body>
    <footer>
        <div class="container flex mx-auto px-6 py-2 flex justify-evenly items-center">
            <a href="<?=$this->url("home_aboutUs")?>" class="font-bold text-gray-700">A propos</a>
            <a href="<?=$this->url("home_help")?>" class="font-bold text-gray-700">Besoin d'aide ?</a>
        </div>
    </footer>
    </body>
</html>
