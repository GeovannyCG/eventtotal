<?php

require('../models/insumos-eventtotal-model.php');

$insumos_Object = new Insumo();

// Verificar si el usuario ha iniciado sesión
if ($_SESSION['email']) {
    try {
        // Comprobar si se hizo clic en el botón "Create"
        if (isset($_POST['create'])) {
            // Manejar la creación del usuario
            $nombre_is = $_POST['Nombre_Insumos'];
            $categoria_is = $_POST['Categoria'];
            $unidad_medida_is = $_POST['unidad_medida'];
            $cantidad = $_POST['Cantidad'];
            $precio = $_POST['Precio'];
            $descripcion = $_POST['Descripcion_Producto'];
                    
            
            $insertinsumos = $insumos_Object->insert_Insumos($nombre_is, $categoria_is, $unidad_medida_is, $cantidad, $precio, $descripcion);
        } elseif (isset($_POST['update'])) {
            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
            // Obtener los datos del formulario
            $nombre_is = $_POST['Nombre_Insumos'];
            $categoria_is = $_POST['Categoria'];
            $unidad_medida_is = $_POST['unidad_medida'];
            $cantidad = $_POST['Cantidad'];
            $precio = $_POST['Precio'];
            $descripcion = $_POST['Descripcion_Producto'];
                    
            $updateinsumos = $insumos_Object->update_Insumos($id, $nombre_is, $categoria_is, $unidad_medida_is, $cantidad, $precio, $descripcion);

        } elseif (isset($_POST['delete'])) {
            // Comprobar si se hizo clic en el botón "Delete"
            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
                    
            $deleteinsumos = $insumos_Object->delete_Insumos($id);
        }

        // Incluir la vista de usuarios después de cualquiera de las operaciones (Create, Update, o Delete)
        echo "<script>location.href='../Insumos/'</script>";

    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}