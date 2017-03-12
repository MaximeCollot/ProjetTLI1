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

    public function getAll(){
        if (!isset($this->_db)) {
            $this->getdb();
        }
        $query = $this->_db->prepare('SELECT patho.mer as CODE_MERIDIEN,
                                        patho.type as TYPE_PATHO,
                                        patho.desc as DESCRIPTION_PATHO,
                                        meridien.nom as NAME_MERIDIEN,
                                        meridien.element as ELEMENT_MERIDIEN,
                                        meridien.yin as YIN_MERIDIEN,
                                        typepatho.nom as NAME_TYPEPATHO,
                                        typepatho.carac1 as CARAC1_TYPEPATHO,
                                        typepatho.carac2 as CARAC2_TYPEPATHO,
                                        symptome.desc as DESC_SYMPTOME

                                        FROM patho
                                        LEFT JOIN meridien ON patho.mer = meridien.code
                                        LEFT JOIN typepatho ON patho.type = typepatho.code
                                        LEFT JOIN symptPatho ON symptPatho.idP = patho.idP
                                        LEFT JOIN symptome ON symptome.idS = symptPatho.idS

                                        ORDER BY NAME_TYPEPATHO;');
        $query->execute();
        return $query->fetchAll();

    }

    public function createUser($identifiant, $mail, $password){
        if (!isset($this->_db)) {
            $this->getdb();
        }
        $query = $this->_db->prepare('SELECT `mail` FROM user WHERE mail = :mail');
        $query->execute(array(':mail' => $mail));
        $result = $query->fetchAll();
        if (count($result)>0){
            return false;
        }else{
            $query = $this->_db->prepare('INSERT INTO user (identifiant, mail, password) VALUES (:identifiant, :mail, :password)');
            $result = $query->execute((array(':identifiant' => $identifiant, ':mail' => $mail, ':password' => $password)));
            return true;
        }
    }
}