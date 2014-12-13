<?php

include 'User.php';

class Form{

protected $_arrFormFields = array(
    "login" => array( "required", "unique" ),
    "password" => array("required"),
    "first_name" => array("required"),
    "last_name" => array("required"),
    "email" => array("email"),
    "phone" => array("number"),
    "dob" => array("data")
    );
    
    
    protected $_arrFormData = array();
    protected $_arrParams = array();
    protected $_arrErrors = array();
    
    public function __construct( $arrParams ){
        
        $this->_arrParams = $arrParams;
    }

    public function validate(){
        
        foreach( $this->_arrFormFields as $strField => $arrValidators ){
            foreach( $arrValidators as $strValidator ){
                if ( !$this->$strValidator( $strField ) ){
                    continue 2;
                }
                if( !empty($this->_arrParams[$strField]) )
                    $this->_arrFormData[$strField] = $this->_arrParams[$strField]; 
            }
        }
    }
    
    public function required( $strField ){
        
        if( empty($this->_arrParams[$strField]) ){
            $this->_arrErrors[] = "Field " . $strField . " is required.";
            return false;
        }
        
        return true;
    }
    
    public function createUser(){
        
        $objConnection = Db::getInstance();
        
        $statement = $objConnection->getConnection()->prepare("INSERT INTO customer(".implode(",", array_keys($this->_arrFormData) ).")
            VALUES( :".implode(", :", array_keys($this->_arrFormData) ).")");
        $statement->execute($this->_arrFormData);
        
        $statement = $objConnection->getConnection()->query('SELECT * from customer where id = ' . $objConnection->getConnection()->lastInsertId() );  
        $statement->setFetchMode(PDO::FETCH_CLASS, 'User'); 
        return $statement->fetch();
    }
    
    public function upload( $arrFile, $intID ){
        
        $strDir = "files/" . $intID;
        
        if( is_dir($strDir) ){
            mkdir( $strDir );
        }
        
        var_dump( $arrFile );
        
        return false;
        
    }
    
    public function getErrors(){
        return $this->_arrErrors;
    }
    
    public function hasErrors(){
        return count( $this->_arrErrors );
    }

    public function data( $strField ){
        return true;
    }
    
    public function number( $strField ){
        return true;
    }
    
    public function email( $strField ){
        return true;
    }
    
    public function unique( $strField ){
        return true;
    }


}