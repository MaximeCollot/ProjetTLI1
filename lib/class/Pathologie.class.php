<?php

/**
 * Created by PhpStorm.
 * User: Nardin
 * Date: 07/03/2017
 * Time: 17:05
 */
class Pathologie  implements JsonSerializable 
{
    //NAME_TYPEPATHO
    private $_categorie;
    //CARAC1_TYPEPATHO & CARAC2_TYPEPATHO
    private $_caracteristiques;
    //[CODE_MERIDIEN, NAME_MERIDIEN]
    private $_meridien;
    //DESCRIPTION_PATHO
    private $_description;
    //[DESC_SYMPTOME]
    private $_symptomes;

    /**
     * Pathologie constructor.
     * @param $_categorie
     * @param $_caracteristiques
     * @param $_meridien
     * @param $_description
     * @param $_symptomes
     */
    public function __construct($_categorie, $_caracteristiques, $_meridien, $_description, $_symptomes)
    {
        $this->_categorie = $_categorie;
        $this->_caracteristiques = $_caracteristiques;
        $this->_meridien = $_meridien;
        $this->_description = $_description;
        $this->_symptomes = array($_symptomes);
    }


    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->_categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->_categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getCaracteristiques()
    {
        return $this->_caracteristiques;
    }

    /**
     * @param mixed $caracteristiques
     */
    public function setCaracteristiques($caracteristiques)
    {
        $this->_caracteristiques = $caracteristiques;
    }

    /**
     * @return mixed
     */
    public function getMeridien()
    {
        return $this->_meridien;
    }

    /**
     * @param mixed $meridien
     */
    public function setMeridien($meridien)
    {
        $this->_meridien = $meridien;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getSymptomes()
    {
        return $this->_symptomes;
    }

    /**
     * @param mixed $symptomes
     */
    public function setSymptomes($symptomes)
    {
        $this->_symptomes[] = $symptomes;
    }

    public function jsonSerialize() {
        return [
            'pathologie' => $this->getDescription(),
            'symptomes' => $this->getSymptomes()
        ];
    }

}