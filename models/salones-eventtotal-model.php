<?php

session_start();

require('../config/database.php');

class salones {
    private $connect;

    public function __construct() {
        $connectObject = new Connection();
        $this->connect = $connectObject->getConn();
    }

    //Funcion para obtener todos los salones de la base de datos
    public function get_salones(){
        $consulta_get_salones = ("SELECT * FROM salones_eventtotal");
        $execute_consulta_get_salones = $this->connect->query($consulta_get_salones);
        $salones = array();
        while ($fila1 = $execute_consulta_get_salones->fetch_assoc()) {
            $salones[] = $fila1;
        }
        return $salones;
    }

    //Funcion para obtener todos los ids de usuarios de la base de datos
    public function get_Id_Users(){
        $consulta_get_idUsers = ("SELECT * FROM usuarios_eventtotal");
        $execute_consulta_get_idUsers = $this->connect->query($consulta_get_idUsers);
        $idusuarios = array();
        while ($fila1 = $execute_consulta_get_idUsers->fetch_assoc()) {
            $idusuarios[] = $fila1;
        }
        return $idusuarios;
    }

    //Funcion para insertar nuevos salones
    public function insert_salones($nombre_s, $cap_personas_s, $estado_s, $imagenes_s, $id_u){
        $consulta_insert_salones = ("INSERT INTO salones_eventtotal SET nombre_s = '$nombre_s', cap_personas_s = '$cap_personas_s', estado_s = '$estado_s', id_u = '$id_u'");
        $execute_consulta_insert_salones = $this->connect->query($consulta_insert_salones);
    }

    //Funcion para actualizar salones
    public function update_salones($id,$nombre_s, $cap_personas_s, $estado_s, $imagenes_s, $id_u){
        $consulta_update_salones = ("UPDATE salones_eventtotal SET nombre_s = '$nombre_s', cap_personas_s = '$cap_personas_s', estado_s = '$estado_s', id_u = '$id_u' WHERE id_s = '$id'");
        $execute_consulta_update_salones = $this->connect->query($consulta_update_salones);
    }

    //Funcion para borrar salones
    public function delete_salones($id){
        $consulta_delete_salones = "DELETE FROM salones_eventtotal WHERE id_s = $id";
        $query4 = mysqli_query($this->connect, $consulta_delete_salones);
    }
}
