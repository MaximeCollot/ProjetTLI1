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
        $result = "";
        $query = $this->_db->prepare('SELECT `identifiant` FROM user WHERE mail = :mail AND password = :password');
        $query->execute((array(':mail' => $mail, ':password' => $password)));
        $result = $query->fetch();
        if (count($result)>0){
            return $result[0];
        }else{
            return false;
        }
    }

    public function createUser($identifiant, $mail, $password){
        if (!isset($this->_db)) {
            $this->getdb();
        }
        $query = $this->_db->prepare('INSERT INTO user (identifiant, mail, password) VALUES (:identifiant, :mail, :password)');
        $result = $query->execute((array(':identifiant' => $identifiant, ':mail' => $mail, ':password' => $password)));

        if ($result){
            return true;
        }else{
            return false;
        }
    }
}