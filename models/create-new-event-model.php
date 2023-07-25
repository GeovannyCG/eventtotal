<?php

//Implementacion de la base de datos
require('../config/database.php');

//Creacion de la clase del model
class createEvent
{
    //Creacion de la variable que guardara la conexion a la base de datos.
    private $conn;

    //Creacion del constructor de la clase
    public function __construct()
    {
        $ObjectConn = new Connection();
        $this->conn = $ObjectConn->getConn();
    }

    //Funciones para el uso del controler

    //Funcion para extraer los usuarios de la base de datos
    public function getUser()
    {
        $sql_users = "SELECT * FROM usuarios_eventtotal";
        $cursor_users = $this->conn->query($sql_users);

        if ($cursor_users) {

            $iden = array();

            while ($fila = $cursor_users->fetch_assoc()) {
                $iden[] = $fila;
            }

            return $iden;
        } else {
            return 0;
        }
    }

    //Funcion para extraer los salones de la base de datos
    public function getSalon()
    {
        $sql_salones = "SELECT * FROM salones_eventtotal";
        $cursor_saliones = $this->conn->query($sql_salones);

        if ($cursor_saliones) {

            $salo = array();

            while ($row = $cursor_saliones->fetch_assoc()) {
                $salo[] = $row;
            }

            return $salo;
        } else {
            return 0;
        }
    }

    //Funcion que usa el action del apartado para crear el nuevo evento dentro de la base de datos
    public function createEvento($cliente,$evento, $invitados, $fecha, $tematica, $encargado, $salon) {
        $sql_Insertar = "INSERT INTO eventos_eventtotal (cliente_e, fecha_hora_e, tipo_e, invitados_e, tema_e, id_u, id_s) VALUES ('$cliente', '$fecha', '$evento', '$invitados', '$tematica', '$encargado', '$salon')";
        $cursor_Insertar = $this->conn->query($sql_Insertar);

        if($cursor_Insertar) {
            echo"<script>alert('Evento creado correctamente.')</script>";
            echo"<script>location.href='../Home/'</script>";
            
        } else {
            echo"<script>alert('Evento no creado.')</script>";
            echo"<script>location.href='../Home/'</script>";
        }
    }
}
