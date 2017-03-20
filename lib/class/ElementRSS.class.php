<?php


/**
 * Created by PhpStorm.
 * User: Nardin
 * Date: 20/03/2017
 * Time: 14:54
 */

class ElementRSS {
    private $_date;

    private $_titre;

    private $_desc;

    private $_lien;

    /**
     * ElementRSS constructor.
     * @param $_date
     * @param $_titre
     * @param $_desc
     * @param $_lien
     */
    public function __construct($_date, $_titre, $_desc, $_lien)
    {
        $this->_date = $_date;
        $this->_titre = $_titre;
        $this->_desc = $_desc;
        $this->_lien = $_lien;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->_desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->_desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->_lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->_lien = $lien;
    }

    


}