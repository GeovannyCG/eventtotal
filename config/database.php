<?php
error_reporting(0); //Errores controlados

class Connection { //Creacion de la clase "Connection".

    //Declaracion del host ademas de las credenciales de acceso a la db y seleccion de la base de datos para la App.
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dataBase = "eventtotal_db";

    //Declaracion de la variable que llevara la conexion a la base de datos
    private $conn;

    //Constructor de la clase "Connection".
    public function __construct() {
        $this->conn =  new mysqli($this->host, $this->user, $this->password, $this->dataBase); //Se establece conexion con la base de datos.

        if ($this->conn->connect_error) { //Se valida que la conexion sea aprovada 
            echo "<script>location.href='../Error-Connection/'</script>"; //En dado caso de que no se redireccionara a la pantalla de error.
        }
    }

    public function getConn() { //Se declara la funcion "getConn" para el encapsulamiento de los datos.
            return $this->conn;
        }
}