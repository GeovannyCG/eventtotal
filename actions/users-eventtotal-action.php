<?php

require('../models/users-eventtotal-model.php');

$User_Object = new Users();

// Verificar si el usuario ha iniciado sesión
if ($_SESSION['email']) {
    try {
        // Comprobar si se hizo clic en el botón "Create"
        if (isset($_POST['create'])) {
            // Manejar la creación del usuario
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $cumpleaños = $_POST['cumpleaños'];
            $roll = $_POST['roll'];
            $contraseña = $_POST['contraseña'];
            $foto = $_POST['img_usuario'];
                    
            $insertUsers = $User_Object->insert_Users($nombre, $apellido, $cumpleaños, $correo, $contraseña, $roll, $foto);
        } elseif (isset($_POST['update'])) {
            // Comprobar si se hizo clic en el botón "Update"
            // Manejar la actualizacion del usuario

            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
            // Obtener los datos del formulario
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $cumpleaños = $_POST['cumpleaños'];
            $roll = $_POST['roll'];
            $contraseña = $_POST['contraseña'];
            $foto = $_POST['img_usuario'];
            $intentos = $_POST['intentos'];
            $restriccion = $_POST['restriccion'];
                    
            $updateUsers = $User_Object->update_Users($id, $nombre, $apellido, $cumpleaños, $correo, $contraseña, $roll, $foto, $intentos, $restriccion);
        } elseif (isset($_POST['delete'])) {
            // Comprobar si se hizo clic en el botón "Delete"
            // Obtener el ID del usuario de la URL
            $id = $_GET['id'];
                    
            $deleteUsers = $User_Object->delete_Users($id);
        }

        // Incluir la vista de usuarios después de cualquiera de las operaciones (Create, Update, o Delete)
        echo "<script>location.href='../Users/'</script>";

    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}
?>