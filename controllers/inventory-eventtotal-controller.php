<?php
session_start();
require('../models/inventory-eventtotal-model.php');
try {
    if (isset($_SESSION['email'])) {
        $codigo_is = $_POST['codigo_is']; 
        $product_is = $_POST['product_is']; 
        $id_is = $_POST['id_is']; 
        $catego_is = $_POST['catego_is']; 
        $cant_is = $_POST['cant_is']; 

        $id_ui = $_POST['id_ui'];
        $codigo_barrasi = $_POST['codigo_barrasi'];
        $producto_ii = $_POST['producto_ii'];
        $categori_ii = $_POST['categori_ii'];
        $canti_is = $_POST['canti_is'];


        $Object_inven = new Inventory();
        $information = $Object_inven->getUser();
        $informa = $Object_inven->getUserp();

        require('../views/inventory-eventtotal-view.php');
    } else {
        echo "<script>location.href='../'</script>";
    }
} catch (\Throwable $th) {
    echo "<script>location.href='../Error-Internal/'</script>";
}
