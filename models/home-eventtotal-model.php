<?php
//Inicializacion de la sesion actual
session_start();
//Inclusion del archivo de conexion a base de datos
require('../config/database.php');

//Creacion de la clase Home del modelo del apartado Inicio
class Home {

    //Declaracion de la variable que resguardara toda la inforacion de la conexion
    private $connect;

    //Declaracion del constructor de la clase
    public function __construct() {
        $connectObject = new Connection(); //Realizado instanciamiento de la clase de la conexion a la base de datos
        $this->connect = $connectObject->getConn(); //Invocando el metodo de conexion y asignandocelo a la variable declarada para esto
    }

    //Funcion hacer conteo de la cantidad de eventos que estan dados de alta en la base de datos
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

    //Funcion hacer conteo de la cantidad de salones que estan dados de alta en la base de datos
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

    //Funcion hacer conteo de la cantidad de usuarios que estan dados de alta en la base de datos
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

    //Funcion hacer conteo de la cantidad de recetas que estan dados de alta en la base de datos
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

    //Funciones para extraer los eventos que estan dados de alta en la base de datos ademas de toda su informacion acerca del mismo

    public function showEvents() {
        $sqlshowEvents = "SELECT * FROM eventos_eventtotal LIMIT 6";
        $executeshowEvents = $this->connect->query($sqlshowEvents);

        $events = array();
        while($fila = $executeshowEvents->fetch_assoc()) {
            $events[] = $fila;
        }

        return $events;
    }

    //Funciones para extraer las recetas que estan dados de alta en la base de datos ademas de toda su informacion acerca de las mismas
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

