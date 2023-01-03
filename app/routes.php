<?php
$w_routes = [
    //Accueil
    ["GET|POST", "/", "Home#home", "home_home"],

    //Inscription
    ["GET|POST", "/register", "Register#register", "register_register"],
    ["GET|POST", "/register/insertRegister", "Register#registerInsert", "register_registerInsert"],

    //Connexion
    ["GET|POST", "/login", "Login#login", "login_login"],
    ["POST", "/login/logon", "Login#logon", "login_logon"],
    ["GET|POST", "/login/exit", "Login#exit", "login_exit"],
    ["GET|POST", "/login/pwd", "Login#pwd", "login_pwd"],

    //Cours
    ["GET|POST", "/courseList", "Course#courseList", "course_courseList"],
    ["GET|POST", "/courseList/course/[:id]", "Course#courseById", "course_courseById"],
    ["GET|POST", "/courseList/course/dzi/[:dzi]", "Course#courseImg", "course_courseImg"],

    //Gestion
    ["GET|POST", "/manage", "Manage#manage", "manage_manage"],

    //Gestion des utilisateurs
    ["GET|POST", "/manage/manageUser", "ManageUser#mngUser", "manageUser_mngUser"],
    ["GET|POST", "/manage/manageUser/[:id]", "ManageUser#mngUserByRole", "manageUser_mngUserByRole"],
    ["GET|POST", "/manage/manageUser/editUser", "ManageUser#mngUserEdit", "manageUser_mngUserEdit"],
    ["GET|POST", "/manage/manageUser/editUser/[:id]", "ManageUser#mngUserEditById", "manageUser_mngUserEditById"],
    ["GET|POST", "/manage/manageUser/deleteUser/[:id]", "ManageUser#mngUserDelete", "manageUser_mngUserDelete"],
    ["GET|POST", "/manage/manageUser/banUser/[:id]", "ManageUser#mngUserBan", "manageUser_mngUserBan"],
    ["GET|POST", "/manage/manageUser/unbanUser/[:id]", "ManageUser#mngUserUnban", "manageUser_mngUserUnban"],
    ["GET|POST", "/manage/manageUser/updateUser/[:id]", "ManageUser#mngUserUpdate", "manageUser_mngUserUpdate"],

    //Gestion des cours
    ["GET|POST", "/manage/manageCourse", "ManageCourse#mngCourse", "manageCourse_mngCourse"],
    ["GET|POST", "/manage/manageCourse/addCourse", "ManageCourse#mngCourseAdd", "manageCourse_mngCourseAdd"],
    ["GET|POST", "/manage/manageCourse/insertCourse", "manageCourse#mngCourseInsert", "manageCourse_mngCourseInsert"],
    ["GET|POST", "/manage/manageCourse/deleteCourse/[:id]", "ManageCourse#mngCourseDelete", "manageCourse_mngCourseDelete"],
    ["GET|POST", "/manage/manageCourse/editCourse", "ManageCourse#mngCourseEdit", "manageCourse_mngCourseEdit"],
    ["GET|POST", "/manage/manageCourse/editCourse/[:id]", "ManageCourse#mngCourseEditById", "manageCourse_mngCourseEditById"],
    ["GET|POST", "/manage/manageCourse/updateCourse/[:id]", "ManageCourse#mngCourseUpdate", "manageCourse_mngCourseUpdate"],

    //Gestion des images
    ["GET|POST", "/manage/managePicture", "ManagePicture#mngPicture", "managePicture_mngPicture"],
    ["GET|POST", "/manage/managePicture/addPicture", "ManagePicture#mngPictureAdd", "managePicture_mngPictureAdd"],
    ["GET|POST", "/manage/managePicture/insertPicture", "ManagePicture#mngPictureInsert", "managePicture_mngPictureInsert"],
    ["GET|POST", "/manage/managePicture/editPicture", "ManagePicture#mngPictureEdit", "managePicture_mngPictureEdit"],
    ["GET|POST", "/manage/managePicture/editPicture/[:id]", "ManagePicture#mngPictureEditById", "managePicture_mngPictureEditById"],
    ["GET|POST", "/manage/managePicture/updatePicture/[:id]", "ManagePicture#mngPictureUpdate", "managePicture_mngPictureUpdate"],
    //Coloring
    ["GET|POST", "/manage/managePicture/colorPictureAdd", "ManagePicture#mngPictureColorAdd", "managePicture_mngPictureColorAdd"],
    ["GET|POST", "/manage/managePicture/colorPictureInsert", "ManagePicture#mngPictureColorInsert", "managePicture_mngPictureColorInsert"],
    //Section mes images
    ["GET|POST", "/manage/managePicture/ownerPicture", "ManagePicture#mngPictureOwner", "managePicture_mngPictureOwner"],
    ["GET|POST", "/manage/managePicture/serverAddPicture/[:dzi]", "ManagePicture#mngPictureServerAdd", "managePicture_mngPictureServerAdd"],

    //Bas de page
    ["GET|POST", "/aboutUs", "Home#aboutUs", "home_aboutUs"],
    ["GET|POST", "/help", "Home#help", "home_help"]
];