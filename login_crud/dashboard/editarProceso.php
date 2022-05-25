<?php
    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location: index.php?mensaje=error');
    }

    include '../model/conexion.php';
    $id = $_POST['id'];
    $recibido = $_POST['txtRecibido'];
    $cierre = $_POST['txtCierre'];
    $dias = $_POST['txtDias'];
    $estado = $_POST['txtEstado'];
    $observaciones = $_POST['txtObservaciones'];

    $sentencia = $bd->prepare("UPDATE persona SET recibido = ?, cierre = ?, dias = ?, estado = ?, observaciones = ? where id = ?;");
    $resultado = $sentencia->execute([$recibido, $cierre, $dias, $estado, $observaciones, $id]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=editado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>