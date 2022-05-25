<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtRecibido"]) || empty($_POST["txtCierre"]) || empty($_POST["txtDias"])|| empty($_POST["txtEstado"])|| empty($_POST["txtObservaciones"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once '../model/conexion.php';
    $recibido = $_POST["txtRecibido"];
    $cierre = $_POST["txtCierre"];
    $dias = $_POST["txtDias"];
    $estado= $_POST["txtEstado"];
    $observaciones = $_POST["txtObservaciones"];
    
    $sentencia = $bd->prepare("INSERT INTO persona(recibido,cierre,dias,estado,observaciones) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$recibido,$cierre,$dias,$estado,$observaciones]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>