<?php
// Importa la clase SalonesEventTotal
require('../Salones/');

$salones_Obj = new SalonesEventTotal();

// Verificar si el usuario ha iniciado sesión y la sesión está activa
if (isset($_SESSION['email']) && $_SESSION['email'] !== '') {
    try {
        // Comprobar si se hizo clic en el botón "Create"
        if (isset($_POST['create'])) {
            // Manejar la creación del salón de eventos
            $nombre_s = $_POST['Nombre_Salon'];
            $cap_personas_s = $_POST['Capacidad_Personas'];
            $estado_s = $_POST['Estado'];
            $imagenes_s = $_POST['Imagenes'];
            $id_u = $_POST['id_u'];
            
            $insertSalon = $salones_Obj->insert_Salon($nombre_s, $cap_personas_s, $estado_s, $imagenes_s, $id_u);
        } elseif (isset($_POST['update'])) {
            // Comprobar si se hizo clic en el botón "Update"
            // Obtener el ID del salón de eventos de la URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                // Obtener los datos del formulario
                $nombre_s = $_POST['Nombre_Salon'];
                $cap_personas_s = $_POST['Capacidad_Personas'];
                $estado_s = $_POST['Estado'];
                $imagenes_s = $_POST['Imagenes'];
                    
                $updateSalon = $salones_Obj->update_Salon($id, $nombre_s, $cap_personas_s, $estado_s, $imagenes_s);
            }
        } elseif (isset($_POST['delete'])) {
            // Comprobar si se hizo clic en el botón "Delete"
            // Obtener el ID del salón de eventos de la URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $deleteSalon = $salones_Obj->delete_Salon($id);
            }
        }

        // Redirigir a la página de salones de eventos después de cualquiera de las operaciones (Create, Update o Delete)
        header('Location: ../Salones/');
        exit;

?>
