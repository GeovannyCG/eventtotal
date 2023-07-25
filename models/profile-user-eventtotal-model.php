<?php
//Inclusion del archivo de configuracion a conexion a la base de datos
require('../config/database.php');

//Creacion de la clase Profile
class Profile
{
    //Declaracion de la variable de conexion
    private $connect;

    //Creacion del constructor de la clase
    public function __construct()
    {
        $ObjectCon = new Connection;
        $this->connect = $ObjectCon->getConn();
    }

    //Funcion para extraer toda la informacion del usuario.
    public function getInformation($email)
    {
        $query_information = "SELECT * FROM usuarios_eventtotal WHERE correo_u='$email'";
        $result = $this->connect->query($query_information);

        if ($result->num_rows === 1) {
            $datos = $result->fetch_assoc();
            return $datos;
        } else {
            return null;
        }
    }

    //Funcion para actualizar los datos del usuario desde el "Actions"
    public function updateInformation($names, $surnames, $email, $pass, $date)
    {
        $query_Update = "UPDATE usuarios_eventtotal SET nombres_u='$names', apellidos_u='$surnames', correo_u='$email', contrasenia_u='$pass', cumpleainos_u='$date' WHERE correo_u='$email'";
        $this->connect->query($query_Update);
    }
}
