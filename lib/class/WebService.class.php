<?php
/**
 * Created by PhpStorm.
 * User: Nardin
 * Date: 08/05/2017
 * Time: 10:08
 */
require("AcuPdo.class.php");
require("AbstractWebService.class.php");

class WebService extends AbstractWebService {

    private $_pdo;

    public function __construct($request) {

        parent::__construct($request);
        $this->_pdo =  AcuPdo::getinstance();
    }

    public function search(){
        if ($this->method == 'GET') {
            if(count($this->args) > 0)
            $pathos = $this->_pdo->getPathoByKeywords($this->args);
            $json = array("status" => 1, "pathos" => $pathos);
            $jsonResponse = json_encode($json, JSON_FORCE_OBJECT);
            return $jsonResponse;
        } else {
            return "Only accepts GET requests";
        }
    }
}