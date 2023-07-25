<?php
// Inicialización de la variable de sesión.
session_start();

// Inclusión del archivo "model" de "Create-New-Event" que contiene la definición de la clase "createEvent" para interactuar con los datos relacionados con la creación de eventos.
require('../models/create-new-event-model.php');

try {
    // Se valida si hay una sesión activa (usuario autenticado).
    if (isset($_SESSION)) {

        // Recuperación de los valores del formulario del view del apartado (formulario de creación de eventos).
        $cliente = $_POST['name-client-c']; // Variable que almacena el valor del campo "name-client-c" enviado desde el formulario.
        $evento = $_POST['tematic-party-c']; // Variable que almacena el valor del campo "tematic-party-c" enviado desde el formulario.
        $invitados = $_POST['num-invitades-c']; // Variable que almacena el valor del campo "num-invitades-c" enviado desde el formulario.
        $fecha = $_POST['date-event-c']; // Variable que almacena el valor del campo "date-event-c" enviado desde el formulario.
        $tematica = $_POST['tematic']; // Variable que almacena el valor del campo "tematic" enviado desde el formulario.
        $empleado = $_POST['user-ident']; // Variable que almacena el valor del campo "user-ident" enviado desde el formulario.
        $salon = $_POST['salon']; // Variable que almacena el valor del campo "salon" enviado desde el formulario.

        // Creación del objeto de la clase del modelo "createEvent".
        $ObjectModel = new createEvent();

        // Llamada al método "createEvento()" de la clase "createEvent" para crear el evento.
        // Se le pasan como argumentos los datos recuperados del formulario de creación del evento.
        $query = $ObjectModel->createEvento($cliente, $evento, $invitados, $fecha, $tematica, $empleado, $salon);

    } else {
        // Si no hay una sesión activa (usuario no autenticado), redireccionar al usuario a la página de inicio (posiblemente "Login").
        echo "<script>location.href='../'</script>";
    }

} catch (\Throwable $th) {
    // En caso de que se genere un error durante la ejecución, redireccionar a la ventana de error interno del servidor.
    echo "<script>location.href='../Error-Internal/'</script>";
}
