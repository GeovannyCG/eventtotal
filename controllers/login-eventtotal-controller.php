<?php
//Inicializar sesion creada
session_start();

//Implementacion del archivo "model" del login.
require('../models/login-eventtotal-model.php');

//Declaracion de los campos recibidos desde el "view" del login.
$user = $_POST['emailUser'];
$pass = $_POST['passUser'];

try {
    $loginObj = new Login();
    $acces = $loginObj->validationUser($user, $pass);
} catch (\Throwable $th) {
    echo "<script>location.href='../Error-Internal/'<script>";
}
