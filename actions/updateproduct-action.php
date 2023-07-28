<?php
session_start();
require('../models/inventory-eventtotal-model.php');
if (isset($_SESSION['email']) && isset($_POST['Actualizar'])){
    $id_ui = $_POST['id_ui'];
    $codigo_barrasi = $_POST['codigo_barrasi'];
    $producto_ii = $_POST['producto_ii'];
    $categori_ii = $_POST['categori_ii'];
    $canti_is = $_POST['canti_is'];
    $Object_invenModal = new Inventory();
    $queryy = $Object_invenModal->updateproduct($id_ui, $codigo_barrasi, $producto_ii, $categori_ii, $canti_is);
    echo "<script>location.href='../Inventory/'</script>";
    
}elseif (isset($_SESSION['email']) && isset($_POST['Eliminar'])){
    $id_ui = $_POST['id_ui'];
    $codigo_barrasi = $_POST['codigo_barrasi'];
    $producto_ii = $_POST['producto_ii'];
    $categori_ii = $_POST['categori_ii'];
    $canti_is = $_POST['canti_is'];
    
    $Object_invenModal = new Inventory();
    $queryyy = $Object_invenModal->deleteproduct($id_ui, $codigo_barrasi, $producto_ii, $categori_ii, $canti_is);
    echo "<script>location.href='../Inventory/'</script>";
}
?>