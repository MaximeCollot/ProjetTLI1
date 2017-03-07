<?php
/**
 * Created by PhpStorm.
 * User: Nardin
 * Date: 06/03/2017
 * Time: 11:00
 */


class AcuPdo {

    public static $_instance;
    private $_db = null;

    protected function __construct()
    {
    }

    public static function getinstance()
    {
        if (!isset(self::$_instance))
        {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    private function getdb(){

        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=acu;charset=utf8', 'root', 'root');
        }
        catch (Exception $exception) {
            die('Erreur : ' . $exception->getMessage());
        }
    }

    public function getpatho(){
        if (!isset($this->_db)) {
            $this->getdb();
        }
        $query = $this->_db->prepare('SELECT `desc` FROM patho');
        $query->execute();


        return $query;
    }

    public function getUser($mail, $password){
        if (!isset($this->_db)) {
            $this->getdb();
        }
        $query = $this->_db->prepare('SELECT `id` FROM user WHERE mail = :mail AND password = :password');
        $query->execute((array(':mail' => $mail, ':password' => $password)));
        $result = $query->fetchAll();
        if (count($result)>0){
            return true;
        }else{
            return false;
        }
    }
}