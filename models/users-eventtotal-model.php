<?php

session_start();

require('../config/database.php');

class Users {
    private $connect;

    public function __construct() {
        $connectObject = new Connection();
        $this->connect = $connectObject->getConn();
    }

    //Funcion para insertar nuevos usuarios
    public function insert_Users($nombre, $apellido, $cumpleaños, $correo, $contraseña, $roll, $foto){
        $consulta_insert_Users = ("INSERT INTO usuarios_eventtotal SET nombres_u = '$nombre', apellidos_u = '$apellido', cumpleainos_u = '$cumpleaños', correo_u = '$correo', contrasenia_u = '$contraseña', roll_u = '$roll', foto_u = '$foto'");
        $execute_consulta_insert_Users = $this->connect->query($consulta_insert_Users);
    }

    //Funcion para obtener todos los usuarios de la base de datos
    public function get_Users(){
        $consulta_get_Users = ("SELECT * FROM usuarios_eventtotal");
        $execute_consulta_get_Users = $this->connect->query($consulta_get_Users);
        $usuarios = array();
        while ($fila = $execute_consulta_get_Users->fetch_assoc()) {
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    //Funcion para actualizar usuarios
    public function update_Users($id,$nombre, $apellido, $cumpleaños, $correo, $contraseña, $roll, $foto, $intentos, $restriccion){
        $consulta_update_Users = "UPDATE usuarios_eventtotal SET nombres_u = '$nombre', apellidos_u = '$apellido', cumpleainos_u = '$cumpleaños', correo_u = '$correo', contrasenia_u = '$contraseña', roll_u = '$roll', foto_u = '$foto', intentos_u = '$intentos', restriccion_u = '$restriccion' WHERE id_u = '$id'";
        $execute_consulta_update_Users = $this->connect->query($consulta_update_Users);
    }


    //Funcion para borrar usuarios
    public function delete_Users($id){
        $consulta_delete_Users = "DELETE FROM usuarios_eventtotal WHERE id_u = $id";
        $query4 = mysqli_query($this->connect, $consulta_delete_Users);
    }
}