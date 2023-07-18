<?php
session_start();//Inicializacion de la sesion.
session_destroy();//Destruccion de la sesion.
unset($_SESSION['email']);//Vaciado de la variable de sesion.

require('../views/logout-view.php');//Redireccionar al usuario al login.
exit; //Terminacion del script.
