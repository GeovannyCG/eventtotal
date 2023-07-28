<?php

require('../config/database.php');
class Inventory
{
    private $conn;
    public function __construct()
    {
        $ObjectConn = new Connection();
        $this->conn = $ObjectConn->getConn();
    }
    public function getUser()
    {
        $sql_users = "SELECT * FROM usuarios_eventtotal";
        $cursor_users = $this->conn->query($sql_users);

        if ($cursor_users) {

            $iden = array();

            while ($fila = $cursor_users->fetch_assoc()) {
                $iden[] = $fila;
            }

            return $iden;
        } else {
            return 0;
        }
    }
    public function getUserp()
    {
        $sql_users = "SELECT * FROM inventario_eventtotal";
        $cursor_users = $this->conn->query($sql_users);

        if ($cursor_users) {

            $iden = array();

            while ($fila = $cursor_users->fetch_assoc()) {
                $iden[] = $fila;
            }

            return $iden;
        } else {
            return 0;
        }
    }
    public function crearproduct($codigo_is,$product_is, $id_is, $catego_is, $cant_is) {
        $sql_Inser = "INSERT INTO inventario_eventtotal (codigo_barras, producto_i, categoria_i, cantidad_i, id_u) VALUES ('$codigo_is', '$product_is', '$catego_is', '$cant_is', '$id_is')";
        $cursor_Insert = $this->conn->query($sql_Inser);

        if($cursor_Insert) {
            echo"<script>alert('Se realizo correctamente.')</script>";
            echo"<script>location.href='../Inventory/'</script>";
            
        } else {
            echo"<script>alert('No se realizo correctamente.')</script>";
            echo"<script>location.href='../Inventory/'</script>";
        }
    }
    public function updateproduct($id_ui, $codigo_barrasi, $producto_ii, $categori_ii, $canti_is)
    {
        $query_Upda = "UPDATE inventario_eventtotal SET codigo_barras='$codigo_barrasi', producto_i='$producto_ii', categoria_i='$categori_ii', cantidad_i='$canti_is' WHERE id_u='$id_ui'";
        $this->conn->query($query_Upda);
    }
    public function deleteproduct($id_ui, $codigo_barrasi, $producto_ii, $categori_ii, $canti_is)
    {
        $query_delete = "DELETE FROM inventario_eventtotal WHERE id_u = $id_ui";
        $this->conn->query($query_delete);
    }
    
}
