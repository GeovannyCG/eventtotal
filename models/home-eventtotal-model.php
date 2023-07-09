<?php
session_start();

require('../config/database.php');

class Home {
    private $connect;

    public function __construct() {
        $connectObject = new Connection();
        $this->connect = $connectObject->getConn();
    }

    //Funcion para extrarer 


}

