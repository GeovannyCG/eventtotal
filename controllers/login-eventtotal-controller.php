<?php
// Inicializar la sesión.
session_start();

// Inclusión del archivo "model" del login que contiene la definición de la clase "Login" para realizar la validación del inicio de sesión.
require('../models/login-eventtotal-model.php');

// Declaración de los campos recibidos desde el "view" del login.
$user = $_POST['emailUser']; // Variable que almacena el valor del campo de correo electrónico (email) proporcionado por el usuario en el formulario de inicio de sesión.
$pass = $_POST['passUser'];  // Variable que almacena el valor del campo de contraseña (password) proporcionado por el usuario en el formulario de inicio de sesión.

try {
    // Crea una instancia del objeto "Login".
    $loginObj = new Login();

    // Llama al método "validationUser()" de la clase "Login" para validar el inicio de sesión.
    // Se le pasan como argumentos el correo electrónico (email) y la contraseña (password) proporcionados por el usuario.
    $acces = $loginObj->validationUser($user, $pass);
} catch (\Throwable $th) {
    // En caso de que se genere un error durante la ejecución, redirecciona a la ventana de error interno del servidor.
    echo "<script>location.href='../Error-Internal/'</script>";
}
