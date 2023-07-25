<?php
// Requiere el archivo que contiene el modelo de la clase "Home" para interactuar con los datos relacionados con eventos y otras funcionalidades.
require('../models/home-eventtotal-model.php');

// Verifica si existe una sesión activa con el valor 'email'.
if (isset($_SESSION['email'])) {

    try {
        // Crea una instancia del objeto "Home".
        $homeObject = new Home();

        // Obtiene el conteo total de eventos usando el método "countEvents()" de la clase "Home".
        $countEvents = $homeObject->countEvents();

        // Obtiene el conteo total de salones de eventos usando el método "countEventroom()" de la clase "Home".
        $coutnSalones = $homeObject->countEventroom();

        // Obtiene el conteo total de recetas usando el método "countRecipes()" de la clase "Home".
        $countRecipes = $homeObject->countRecipes();

        // Obtiene el conteo total de empleados usando el método "countEmploys()" de la clase "Home".
        $countEmploys = $homeObject->countEmploys();

        // Obtiene una lista de eventos usando el método "showEvents()" de la clase "Home".
        $showEvents = $homeObject->showEvents();

        // Obtiene una lista de recetas usando el método "showRecipes()" de la clase "Home".
        $shoeRecipes = $homeObject->showRecipes();
    } catch (\Throwable $th) {
        // En caso de que ocurra un error, redirecciona al usuario a la página de error interno.
        echo "<script>location.href='../Error-Internal/'</script>";
        // También podríamos usar error_log($th->getMessage()) para registrar el error en el registro de errores del servidor.
    }

    // Requiere el archivo que contiene la vista "home-eventtotal-view.php" para mostrar los resultados obtenidos.
    require('../views/home-eventtotal-view.php');
} else {
    // Si no existe una sesión activa o el valor de 'email' no está establecido, redirecciona al usuario a la página principal.
    echo "<script>location.href='../'</script>";
}
