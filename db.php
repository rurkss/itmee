<?php

class Db{

    protected $_dbHandle = null;
    
    private function __construct(){
        
        try {  
         
         $this->_dbHandle = new PDO("mysql:host=127.0.0.1;dbname=c9", "rurkss");  
         $this->_dbHandle->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
         
        }  
        catch(PDOException $e) {  
            echo $e->getMessage();  
        }
        
    }
    
    protected static $_instance;
    
    public static function getInstance() {
            
        if (null === self::$_instance) {
            
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    public function getConnection(){
        return $this->_dbHandle;
    }
    
    

}