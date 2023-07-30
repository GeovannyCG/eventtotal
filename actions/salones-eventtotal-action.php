<?php

require('../models/salones-eventtotal-model.php');

$salones_Object = new salones();

// Verificar si el usuario ha iniciado sesión
if ($_SESSION['email']) {
    try {
        // Comprobar si se hizo clic en el botón "Create"
        if (isset($_POST['create'])) {
            // Manejar la creación del usuario
            $nombre_s = $_POST['Nombre_s'];
            $cap_personas_s = $_POST['cap_personas_s'];
            $estado_s = $_POST['estado_s'];
            $imagenes_s = $_POST['imagenes_s'];
            $id_u = $_POST['id_u'];
            
            $insertsalones = $salones_Object->insert_salones($nombre_s, $cap_personas_s, $estado_s, $imagenes_s,  $id_u);
        } elseif (isset($_POST['update'])) {
            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
            // Obtener los datos del formulario
            $nombre_s = $_POST['Nombre_s'];
            $cap_personas_s = $_POST['cap_personas_s'];
            $estado_s = $_POST['estado_s'];
            $imagenes_s = $_POST['imagenes_s'];
            $id_u = $_POST['id_u'];
                    
            $updatesalones = $salones_Object->update_salones($id, $nombre_s, $cap_personas_s, $estado_s, $imagenes_s,  $id_u);

        } elseif (isset($_POST['delete'])) {
            // Comprobar si se hizo clic en el botón "Delete"
            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
                    
            $deletesalones = $salones_Object->delete_salones($id);
        }

        // Incluir la vista de usuarios después de cualquiera de las operaciones (Create, Update, o Delete)
        echo "<script>location.href='../Salones/'</script>";

    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}