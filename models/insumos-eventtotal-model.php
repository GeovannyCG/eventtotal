<?php

session_start();

require('../config/database.php');

class Insumo {
    private $connect;

    public function __construct() {
        $connectObject = new Connection();
        $this->connect = $connectObject->getConn();
    }

    //Funcion para obtener todos los insumos de la base de datos
    public function get_Insumos(){
        $consulta_get_Insumos = ("SELECT * FROM insumos_eventtotal");
        $execute_consulta_get_Insumos = $this->connect->query($consulta_get_Insumos);
        $insumos = array();
        while ($fila1 = $execute_consulta_get_Insumos->fetch_assoc()) {
            $insumos[] = $fila1;
        }
        return $insumos;
    }

    //Funcion para insertar nuevos insumos
    public function insert_Insumos($nombre_is, $categoria_is, $unidad_medida_is, $cantidad, $precio, $descripcion){
        $consulta_insert_Insumos = ("INSERT INTO insumos_eventtotal SET nombre_is = '$nombre_is', categoria_is = '$categoria_is', unidad_medida_is = '$unidad_medida_is', cantidad_is = '$cantidad', precio_unitario_is = '$precio', descripcion_is = '$descripcion'");
        $execute_consulta_insert_Insumos = $this->connect->query($consulta_insert_Insumos);
    }

    //Funcion para actualizar insumos
    public function update_Insumos($id,$nombre_is, $categoria_is, $unidad_medida_is, $cantidad, $precio, $descripcion){
        $consulta_update_Users = "UPDATE insumos_eventtotal SET nombre_is = '$nombre_is', categoria_is = '$categoria_is', unidad_medida_is = '$unidad_medida_is', cantidad_is = '$cantidad', precio_unitario_is = '$precio', descripcion_is = '$descripcion' WHERE id_is = '$id'";
        $execute_consulta_update_Users = $this->connect->query($consulta_update_Users);
    }

    //Funcion para borrar insumos
    public function delete_Insumos($id){
        $consulta_delete_Users = "DELETE FROM insumos_eventtotal WHERE id_is = $id";
        $query4 = mysqli_query($this->connect, $consulta_delete_Users);
    }
}
