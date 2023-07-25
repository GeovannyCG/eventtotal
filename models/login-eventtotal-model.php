<?php
//Implementacion de la base de datos.
require('../config/database.php');

//Creacion de clase para este archivo PHP.
class Login
{
    //Variable que almacenara informacion de la conexion con la base de datos.
    private $connect;

    public function __construct()
    {
        $connectionObj = new Connection();
        $this->connect = $connectionObj->getConn();
    }

    //Funcion para validar usuario
    function validationUser($email, $password)
    {
        if ($email == "" || $password == "") { //Validar que ambos campos del formulario sean llenados correctamente
            //Si los campos estan vacios se mostrara un mensaje de alerta para posteriormente redireccionar al login.
            echo "<script>alert('Llena ambos campos con tus credenciles para acceder.')</script>";
            echo "<script>location.href='../'</script>";
        } else {
            //Si los campos estan llenos, se hace la extraccion de las campos "contrasenia_u, restriccion_u, intentos_u" que tengan que ver con el correo ingresado
            $credentials = "SELECT contrasenia_u, restriccion_u, intentos_u FROM usuarios_eventtotal WHERE correo_u = '$email'";
            $restcredentials = $this->connect->query($credentials);

            //Se valida que el correo ingresado este ligado a una cuenta en el sistema
            if ($restcredentials->num_rows == 1) {
                //Asociacion de columnas de los datos consultados que tengan que ver con el correo asociado a una cuenta dentro del sistema
                $rowt = $restcredentials->fetch_assoc();
                $pass = $rowt['contrasenia_u'];
                $restriction = $rowt['restriccion_u'];
                $attempts = $rowt['intentos_u'];

                //Validar que el correo del usuario no cuente con bloqueo ante el sistema.
                if ($restriction == "blocked") {
                    echo '<script>alert("La cuenta: ' . $email . ' cuenta con bloqueo.")</script>';
                    echo "<script>location.href='../'</script>";
                    exit;
                }

                //Validar si la contraseña ingresada por el usuario es igual a la que esta ligada a la cuenta.
                if ($password == $pass) {
                    /* Si esta contraseña es correcta se reiniciaran los intentos de ingreso ademas de que se iniciara un variable de sesion 
                    para finalmente redireccionar al "Home" del usuario*/
                    $resetattempts = "UPDATE usuarios_eventtotal SET intentos_u = 0 WHERE correo_u='$email'";
                    $this->connect->query($resetattempts);
                    sleep(3);
                    $_SESSION['email'] = $email;
                    echo "<script>location.href='../Home/'</script>";
                    exit;
                } else {
                    //De lo contrario se valida que los intentos del usuario no sean mas de 3.
                    if ($attempts >= 2) {
                        $blockeduser = "UPDATE usuarios_eventtotal SET restriccion_u = 'blocked' WHERE correo_u = '$email'";
                        $this->connect->query($blockeduser);
                        echo "<script>alert('La cuenta: " . $email . " ha sido bloqueada debido a múltiples intentos fallidos de inicio de sesión.')</script>";
                        echo "<script>location.href='../'</script>";
                        exit;
                    } else {
                        //Si esto resulta no ser cierto se le sumara un intento mas de ingreso a la cuenta y se le indicaria al usuario
                        $addattemp = "UPDATE usuarios_eventtotal SET intentos_u = (intentos_u+1) WHERE correo_u='$email'";
                        $this->connect->query($addattemp);
                        $attemp = $attempts + 1;
                        echo "<script>alert('Intento de inicio de sesion " . $attemp . " de 3.')</script>";
                        echo "<script>location.href='../'</script>";
                        exit;
                    }
                }
            } else {
                //En caso contrario sera mostrado un mensaje que le indique al usuario que no hay una cuenta asociada con el correo ingresado.
                echo "<script>alert('El correo: " . $email . " no tiene una cuenta asociada.')</script>";
                echo "<script>location.href='../'</script>";
                exit;
            }
        }
    }
}
