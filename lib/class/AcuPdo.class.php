<?php
/**
 * Created by PhpStorm.
 * User: Nardin
 * Date: 06/03/2017
 * Time: 11:00
 */

require("lib/class/Pathologie.class.php");

class AcuPdo {

    public static $_instance;
    private $_db = null;
    public $typePatho;
    public $meridien;
    public $caracteristiques;

    protected function __construct()
    {
        $this->typePatho = array('Tous');
        $this->meridien = array('Tous');
        $this->caracteristiques = array('Tous');
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
        $result = $query->fetchAll();
        $pathos = $this->setPathos($result);
        return $pathos;
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

    public function getListType(){
        return $this->typePatho;
    }

    public function getListMeridien(){
        return $this->meridien;
    }

    public function getListCaracteristique(){
        return $this->caracteristiques;
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

    public function setPathos($pathos) {
        $pathologies = array();
        foreach ($pathos as $patho) {

            if(!array_key_exists($patho['NAME_TYPEPATHO'], $pathologies)){
                $pathologies[$patho['NAME_TYPEPATHO']] = array();
            }
            if (!in_array($patho['NAME_TYPEPATHO'], $this->typePatho)){
                $this->typePatho[] = $patho['NAME_TYPEPATHO'];
            }

            if (!array_key_exists($patho['NAME_MERIDIEN'], $pathologies[$patho['NAME_TYPEPATHO']])){
                $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']] = array();
            }
            if (!in_array($patho['NAME_MERIDIEN'], $this->meridien)){
                $this->meridien[] = $patho['NAME_MERIDIEN'];
            }

            if ($patho['CARAC1_TYPEPATHO'] == '' && $patho['CARAC2_TYPEPATHO'] == ''){
                if (!array_key_exists('neant', $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']])){
                    $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]['neant'] = array();
                }
                $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]['neant'] = $this->setSymptome($pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]['neant'], $patho);
                if (!in_array('neant', $this->caracteristiques)){
                    $this->caracteristiques[] = 'neant';
                }
            }else{
                if ($patho['CARAC2_TYPEPATHO'] == ''){
                    if (!array_key_exists($patho['CARAC1_TYPEPATHO'], $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']])){
                        $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']][$patho['CARAC1_TYPEPATHO']] = array();
                    }
                    $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']][$patho['CARAC1_TYPEPATHO']] = $this->setSymptome($pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']][$patho['CARAC1_TYPEPATHO']], $patho);
                }else{
                    $carac1 = $patho['CARAC1_TYPEPATHO'];
                    $carac2 = $patho['CARAC2_TYPEPATHO'];
                    if (!array_key_exists("$carac1/$carac2", $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']])){
                        $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]["$carac1/$carac2"] = array();
                    }
                    $pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]["$carac1/$carac2"] = $this->setSymptome($pathologies[$patho['NAME_TYPEPATHO']][$patho['NAME_MERIDIEN']]["$carac1/$carac2"], $patho);
                }
                if (!in_array($patho['CARAC1_TYPEPATHO'], $this->caracteristiques)){
                    $this->caracteristiques[] = $patho['CARAC1_TYPEPATHO'];
                }
            }
        }
        return ($pathologies);
    }

    public function setSymptome($array,$patho){
        $find = false;
        foreach ($array as $patho_item) {
            if ($patho_item->getDescription() == $patho['DESCRIPTION_PATHO']){
                $patho_item->setSymptomes($patho['DESC_SYMPTOME']);
                $find = true;
            }
        }
        if (!$find){
            $array[] = new Pathologie($patho['NAME_TYPEPATHO'],
                                        array($patho['CARAC1_TYPEPATHO'],$patho['CARAC2_TYPEPATHO']),
                                        $patho['NAME_MERIDIEN'],
                                        $patho['DESCRIPTION_PATHO'],
                                        $patho['DESC_SYMPTOME']);
        }
        return $array;
    }
}