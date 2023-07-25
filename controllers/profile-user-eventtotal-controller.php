<?php
// Inicializar la sesión activa actualmente.
session_start();

// Inclusión del archivo "Model del apartado" que contiene la definición de la clase "Profile" para interactuar con los datos relacionados con el perfil del usuario.
require('../models/profile-user-eventtotal-model.php');

// Se valida si existe una sesión activa (usuario autenticado).
if (isset($_SESSION['email'])) {
    // Try-catch que monitoreará que la ejecución de las acciones del modelo ("Profile") se realice correctamente.
    try {
        // Crea una instancia del objeto "Profile".
        $ObjectProfile = new Profile();

        // Obtiene la información del perfil del usuario con el método "getInformation()" de la clase "Profile" y se le pasa el valor del email de la sesión activa.
        $Dates = $ObjectProfile->getInformation($_SESSION['email']);

        // Requiere el archivo que contiene la vista "profile-user-eventtotal-view.php" para mostrar la información del perfil del usuario.
        require('../views/profile-user-eventtotal-view.php');
    } catch (\Throwable $th) { // En caso de que se genere un error durante la ejecución, se redireccionará a la ventana de error interno del servidor.
        echo "<script>location.href='../Error-Internal/'</script>";
    }
} else { // De lo contrario, si no hay sesión activa (usuario no autenticado), se redireccionará al "Login".
    echo "<script>location.href='../'</script>";
}
