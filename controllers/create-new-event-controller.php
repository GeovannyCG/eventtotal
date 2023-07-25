<?php
// Inicialización de la variable de sesión.
session_start();

// Inclusión del archivo "model" del apartado que contiene la definición de la clase "createEvent" para interactuar con los datos relacionados con la creación de eventos.
require('../models/create-new-event-model.php');

try {
    // Validar si hay una sesión activa (usuario autenticado).
    if (isset($_SESSION['email'])) {

        // Recuperación de la información enviada desde el formulario del Home (formulario de creación de eventos).
        $name_client = $_POST['name_client']; // Variable que almacena el valor del campo "name_client" enviado desde el formulario.
        $num_guests = $_POST['num_invitades']; // Variable que almacena el valor del campo "num_invitades" enviado desde el formulario.
        $tipe_event = $_POST['tematic_party']; // Variable que almacena el valor del campo "tematic_party" enviado desde el formulario.
        $date_event = $_POST['date-event']; // Variable que almacena el valor del campo "date-event" enviado desde el formulario.

        // Obtención de los valores de los campos en el formulario (esto puede variar según la implementación del método "getUser()" y "getSalon()").
        $Object_eventcreate = new createEvent(); // Crea una instancia del objeto "createEvent".
        $information = $Object_eventcreate->getUser(); // Método para obtener información del usuario (puede estar relacionado con la sesión activa).
        $salones = $Object_eventcreate->getSalon(); // Método para obtener información de los salones disponibles para el evento.

        // Redireccionar al view del apartado, donde se mostrará la información del evento y se permitirá al usuario completar la creación del evento.
        require('../views/create-new-event-eventtotal.php');
    } else {
        // Si no hay una sesión activa (usuario no autenticado), redireccionar al usuario a la página de inicio (posiblemente "Login").
        echo "<script>location.href='../'</script>";
    }
} catch (\Throwable $th) {
    // En caso de que se genere un error durante la ejecución, redireccionar a la ventana de error interno del servidor.
    echo "<script>location.href='../Error-Internal/'</script>";
}
