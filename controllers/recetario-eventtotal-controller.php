<?php

require('../models/recetario-eventtotal-model.php');

//verificar si eel usuario a iniciado sesion
if (isset($_SESSION['email'])) {
    try {
        $recetas_Object = new Recetario();

        $get_recetas = $recetas_Object->get_recetas();
        
    } catch (\Throwable $th) {
        echo "<script>location.href='../Error-Internal/'<script>";
    }
    require('../views/recetario-eventtotal-view.php');
} else {
    //si el usuario no iniciado sesion, se redirige a la pantalla de inicio de sesion
    echo "<script>location.href='../'</script>";
}