<?php

require('../models/users-eventtotal-model.php');

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['email'])){
    try {
        $Users_Object = new Users();

        $getUsers = $Users_Object->get_Users();

    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    // Requiere el archivo que contiene la vista "home-eventtotal-view.php" para mostrar los resultados obtenidos.
    require('../views/users-eventtotal-view.php');
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}