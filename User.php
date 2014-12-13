<?php

include 'db.php';

class User{
    
    public $id;
    public $login;
    public $password;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $dob;
    
    public function findUserByEmail( $strLogin ){
        
        $objConnection = Db::getInstance();
        $objConnection->getConnection()->query('SELECT * from customer');
        
        
        $statement = $objConnection->getConnection()->prepare("select * from customer where login = :login");
        $statement->execute(array(':login' => $strLogin));
        $row = $statement->fetch();
        
        var_dump($row);
                
    }
    
    public function createUser( $arrData ){
        
    }
    
    public function getLastName()
    {
        return $this->last_name;
    }
    
    public function getFirstName()
    {
        return $this->first_name;
    }
    
}