<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace VMP\PortailBundle\Controller;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

/**
 * Description of AdminController
 *
 * @author root
 */
class AdminController extends BaseAdminController {
    //put your code here
     public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function prePersistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
    
    public function preUpdateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}
