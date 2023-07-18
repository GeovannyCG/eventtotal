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
    public function countEvents() {
        $sql = "SELECT COUNT(*) as total FROM eventos_eventtotal";
        $execute = $this->connect->query($sql);
        
        if ($execute) {
            $row = $execute->fetch_assoc();
            return $row['total'];
        } else {
            return 0;
        }
    }

    public function countEventroom() {
        $sqlEventsr = "SELECT COUNT(*) as totals FROM salones_eventtotal";
        $executeEventsr = $this->connect->query($sqlEventsr);

        if ($executeEventsr) {
            $row = $executeEventsr->fetch_assoc();
            return $row['totals'];
        } else {
            return 0;
        }
    }

    public function countEmploys() {
        $sqlEmploys = "SELECT COUNT(*) as totale FROM usuarios_eventtotal";
        $executeEmploys = $this->connect->query($sqlEmploys);

        if ($executeEmploys) {
            $row = $executeEmploys->fetch_assoc();
            return $row['totale'];
        } else {
            return 0;
        }
        
    }

    public function countRecipes() {
        $sqlRecipes = "SELECT COUNT(*) as totalr FROM recetario_eventtotal";
        $executeRecipes = $this->connect->query($sqlRecipes);

        if ($executeRecipes) {
            $row = $executeRecipes->fetch_assoc();
            return $row['totalr'];
        } else {
            return 0;
        }
        
        
    }

    //Funciones para demostrar la informacion

    public function showEvents() {
        $sqlshowEvents = "SELECT * FROM eventos_eventtotal LIMIT 6";
        $executeshowEvents = $this->connect->query($sqlshowEvents);

        $events = array();
        while($fila = $executeshowEvents->fetch_assoc()) {
            $events[] = $fila;
        }

        return $events;
    }

    public function showRecipes() {
        $sqlshowRecipes = "SELECT * FROM recetario_eventtotal LIMIT 3";
        $executeRecipes = $this->connect->query($sqlshowRecipes);

        $recipes = array();

        while($fila = $executeRecipes->fetch_assoc()) {
            $recipes[] = $fila ;
        }

        return $recipes;
    }


}

