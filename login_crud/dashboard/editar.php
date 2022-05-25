<?php require_once "vistas/parte_superior.php"?>

<?php
    if(!isset($_GET['id'])){
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once '../model/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from persona where id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Fecha de recibido: </label>
                        <input type="date" class="form-control" name="txtRecibido" required 
                        value="<?php echo $persona->recibido; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de cierre: </label>
                        <input type="date" class="form-control" name="txtCierre" autofocus required
                        value="<?php echo $persona->cierre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dias: </label>
                        <input type="text" class="form-control" name="txtDias" autofocus required
                        value="<?php echo $persona->dias; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtEstado" autofocus required
                        value="<?php echo $persona->estado; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observaciones: </label>
                        <input type="text" class="form-control" name="txtObservaciones" autofocus required
                        value="<?php echo $persona->observaciones; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once "vistas/parte_inferior.php"?>