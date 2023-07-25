<?php
// Inicialización de la sesión.
session_start();

// Inclusión del archivo "model" de "Profile-User-Eventtotal" que contiene la definición de la clase "Profile" para interactuar con los datos relacionados con el perfil del usuario.
require('../models/profile-user-eventtotal-model.php');

// Obtención de los valores por el método POST del formulario de actualización de información de perfil.
$names = $_POST['nombress']; // Variable que almacena el valor del campo "nombress" enviado desde el formulario.
$surnames = $_POST['apellidoss']; // Variable que almacena el valor del campo "apellidoss" enviado desde el formulario.
$email = $_POST['correoss']; // Variable que almacena el valor del campo "correoss" enviado desde el formulario.
$pass = $_POST['contraseniaa']; // Variable que almacena el valor del campo "contraseniaa" enviado desde el formulario.
$date = $_POST['cumpleanioss']; // Variable que almacena el valor del campo "cumpleanioss" enviado desde el formulario.

// Se verifica si hay una sesión activa (usuario autenticado).
if ($_SESSION['email']) {
    try {
        // Crea una instancia del objeto "Profile".
        $ObjectProfile = new Profile();

        // Llama al método "updateInformation()" de la clase "Profile" para actualizar la información del perfil del usuario.
        // Se le pasan como argumentos los datos recuperados del formulario de actualización de información.
        $actualizar = $ObjectProfile->updateInformation($names, $surnames, $email, $pass, $date);

        // Redireccionar al usuario a la página de perfil una vez que se haya actualizado la información.
        echo "<script>location.href='../Profile/'</script>";
    } catch (\Throwable $th) {
        // En caso de que se genere un error durante la ejecución, redireccionar al usuario a la página de perfil (posiblemente para mostrar un mensaje de error).
        echo "<script>location.href='../Profile/'</script>";
    }
} else {
    // Si no hay una sesión activa (usuario no autenticado), redireccionar al usuario a la página de inicio (posiblemente "Login").
    echo "<script>location.href='../'</script>";
}
