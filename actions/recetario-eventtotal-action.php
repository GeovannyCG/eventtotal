<?php

require('../models/recetario-eventtotal-model.php');

$receta_object = new Recetario();

// Verificar si el usuario ha iniciado sesión
if ($_SESSION['email']) {
    try {
        // Comprobar si se hizo clic en el botón "Create"
        if (isset($_POST['create'])) {
            //manejar la creacion o insersion de recetas
            $titulo = $_POST['titulo'];
            $ingredientes = $_POST['ingredientes'];
            $instrucciones = $_POST['instrucciones'];
            $tiempo = $_POST['tiempo'];
            $porciones = $_POST['porciones'];
            $dificultad = $_POST['dificultad'];
            $consejos = $_POST['consejos'];
            $clasificacion = $_POST['clasificacion'];

            $insert_receta = $receta_object->insert_recetas($titulo, $ingredientes, $instrucciones,$tiempo,$porciones,$dificultad,$consejos,$clasificacion);
            
        } elseif (isset($_POST['update'])) {
            // Comprobar si se hizo clic en el botón "Update"
            // Manejar la actualizacion del usuario

            //obtener el Id de la Receta
            $id = $_GET['id'];
            //manejar la creacion o insersion de recetas
            $titulo = $_POST['titulo'];
            $ingredientes = $_POST['ingredientes'];
            $instrucciones = $_POST['instrucciones'];
            $tiempo = $_POST['tiempo'];
            $porciones = $_POST['porciones'];
            $dificultad = $_POST['dificultad'];
            $consejos = $_POST['consejos'];
            $clasificacion = $_POST['clasificacion'];

            $update_receta = $receta_object->update_recetas($id, $titulo, $ingredientes, $instrucciones,$tiempo,$porciones,$dificultad,$consejos,$clasificacion);
        } elseif (isset($_POST['delete'])) {
            // Comprobar si se hizo clic en el botón "Delete"
            //obtener el Id de la Receta
            $id = $_GET['id'];

            $delete_recetas = $receta_object->delete_recetas($id);
        }

        // Incluir la vista de recetario después de cualquiera de las operaciones (Create, Update, o Delete)
        echo "<script>location.href='../Recetario/'</script>";

    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}
