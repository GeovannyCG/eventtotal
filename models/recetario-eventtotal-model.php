<?php
session_start();
require('../config/database.php');

class Recetario {
    private $connect;

    public function __construct() {
        $connectObject = new Connection();
        $this->connect = $connectObject->getConn();
    }

    //funcion para insertar recetas
    public function insert_recetas($titulo,$ingredientes,$instrucciones,$tiempo,$porciones,$dificultad,$consejos,$clasificacion){
        $consulta_insert_recetas = ("INSERT INTO recetario_eventtotal SET titulo_r = '$titulo', ingredientes_r = '$ingredientes', instrucciones_r = '$instrucciones', tiempo_preparacion_r = '$tiempo', porciones_r = '$porciones', nivel_dificultad_r = '$dificultad', consejos_adicionales_r = '$consejos', clasificacion_r = '$clasificacion' ");
        $execute_consulta_insert_recetas = $this->connect->query($consulta_insert_recetas); 
    }

    //funcion para obtener todas las recetas
    public function get_recetas(){
        $consulta_get_recetas = ("SELECT * FROM recetario_eventtotal");
        $execute_consulta_get_recetas = $this->connect->query($consulta_get_recetas);
        $recetas = array();
        while ($fila = $execute_consulta_get_recetas->fetch_assoc()) {
            $recetas[] = $fila; 
        }
        return $recetas;
    }

    //funcion para actualizar recetas

    public function update_recetas($id, $titulo, $ingredientes, $instrucciones,$tiempo,$porciones,$dificultad,$consejos,$clasificacion){
        $consulta_update_recetas = ("UPDATE recetario_eventtotal SET titulo_r = '$titulo', ingredientes_r = '$ingredientes', instrucciones_r = '$instrucciones', tiempo_preparacion_r = '$tiempo', porciones_r = '$porciones', nivel_dificultad_r = '$dificultad', consejos_adicionales_r = '$consejos', clasificacion_r = '$clasificacion' WHERE id_r = '$id'");
        $execute_consulta_update_recetas = $this->connect->query($consulta_update_recetas);
    }


    //funcion para borrar recetas
    public function delete_recetas($id){
        $consulta_delete_recetas = ("DELETE FROM recetario_eventtotal WHERE id_r = $id");
        $execute_consulta_delete_recetas = $this->connect->query($consulta_delete_recetas);
    }
}