<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include '../model/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST['txtNombre'];
    $edad = $_POST['txtEdad'];
    $signo = $_POST['txtSigno'];

    $sentencia = $bd->prepare("UPDATE persona SET nombre = ?, edad = ?, signo = ? where id = ?;");
    $resultado = $sentencia->execute([$nombre, $edad, $signo, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>