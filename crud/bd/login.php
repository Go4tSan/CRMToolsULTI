<?php

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = $_POST['usuario'];
$password = $_POST['password'];
print_r($_POST);
$pass = hash('Md5',$password);
 //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();


if($resultado->rowCount() >= 1){
    session_start(); /* si la consulta me devuelve 1 o mas filas, inicio la sesion */
    $_SESSION['usuarioSesion'] = $usuario; /* si la consulta me devuelve 1 o mas filas, iniciaré la varible global $_SESSION con el nombre de "usuarioSesion" la cual va a tener como valor el correo que se insertó mediente el metodo post almacenado en la variable $usuario  */
    header("location:../vistas/index.php");
}else{
    echo'<script type="text/javascript">
alert("Error, usuarios y/o contraseña incorrectas");
window.location.href="../index.php";
</script>';
}

print json_encode($data);
$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin@1 pass:12345


//usuarios de pruebaen la base de datos
//usuario:1@1 pass:1
