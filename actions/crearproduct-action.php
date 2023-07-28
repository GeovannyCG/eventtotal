<?php
session_start();
require('../models/inventory-eventtotal-model.php');
if (isset($_SESSION)) {
    $codigo_is = $_POST['codigo_is']; 
    $product_is = $_POST['product_is']; 
    $id_is = $_POST['id_is']; 
    $catego_is = $_POST['catego_is'];
    $cant_is = $_POST['cant_is']; 
    $Object_invenModal = new Inventory();
    $query = $Object_invenModal->crearproduct($codigo_is, $product_is, $id_is, $catego_is, $cant_is);
}
?>