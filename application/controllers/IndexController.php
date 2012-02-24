<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $register = new Application_Model_Register();
        $register->registerUser(array(
            'username' => 'test',
            'password' => 'passord'
        ));
    }


}

