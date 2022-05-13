<?php
session_start(); /*  inicio la sesion */
if(empty($_SESSION['usuarioSesion'])){ /* si la variable de sesion esta vacia, me va a redirigir al login. Esta variable se a va a requerir en parte_superior.php*/
    header("location:../index.php");
}
?>