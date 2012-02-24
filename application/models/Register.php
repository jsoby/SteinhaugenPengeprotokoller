<?php

class Application_Model_Register
{
    private $_dbUser;
    
    public function __construct(){
        $this->_dbUser = new Application_Model_DbTable_User();
    }
    
    public function registerUser($array){
        $this->_dbUser->insert($array);
    }
    
}

