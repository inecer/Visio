<?php

namespace Controller;

use Model\RoleModel;
use Model\UserModel;

class ManageUserController extends \W\Controller\Controller
{
    /**
     * Page gestion utilisateur
     */
    public function mngUser()
    {
        $users = new UserModel();
        $allUser = $users->getAllUser();
        $this->render('/manage/manageUser/manageUser',
            ['users' => $allUser]);
    }

    public function mngUserByRole($id)
    {
        $users = new UserModel();
        $userByRole = $users->getAllUserByRole($id);
        $this->render('/manage/manageUser/manageUser',
            ['users' => $userByRole]);
    }

    /**
     * Page gestion utilisateur bannir
     */
    public function mngUserBan($id)
    {
        $blocked=$_POST['blocked'];
        $users = new UserModel();
        $userBan = $users->banUser($id);
        $this->redirectToRoute('manageUser_mngUser');
    }

    public function mngUserUnban($id)
    {
        $blocked=$_POST['blocked'];
        $users = new UserModel();
        $userUnban = $users->unbanUser($id);
        $this->redirectToRoute('manageUser_mngUser');
    }


    /**
     * Page gestion utilisateur modifier
     */
    public function mngUserEditById($id)
    {
        $user = new UserModel();
        $userInfo = $user->getUserById($id);

        $role = new RoleModel();
        $roleList = $role->getRoles();

        $this->render('/manage/manageUser/manageUserEdit',
            ['user' => $userInfo,
                'id' => $id,
                'roles' => $roleList]);
    }

    public function mngUserUpdate($id)
    {
        //var_dump($_POST);exit;
        $name=$_POST['name'];
        $firstName=$_POST['firstName'];
        $email=$_POST['email'];
        $id_status=$_POST['id_status'];
        $user = new UserModel();
        $userUpdate = $user->updateUser($id, $name, $firstName, $email, $id_status);
        //$this->redirectToRoute($route, ['message' => $message,'id', $id]);
        $this->redirectToRoute('manageUser_mngUser');
    }

    public function mngUserDelete($id)
    {
        $user = new UserModel();
        $userDelete = $user->deleteUser($id);
        $this->redirectToRoute('manageUser_mngUser');
    }
}