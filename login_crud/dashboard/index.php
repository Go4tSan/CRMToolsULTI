<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>DASHBOARD</h1>
    
 <!--INICIO del cont principal-->   
    

 <?php
    include_once "../model/conexion.php";
    $sentencia = $bd -> query("select * from persona");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alerta -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellena todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
            
            

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   



            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Cambiado!</strong> Los datos fueron actualizados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 


            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado'){
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Eliminado!</strong> Los datos fueron borrados.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 

            <!-- fin alerta -->
            <div class="card">
                <div class="card-header">
                    Lista de Reportes
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Fecha recibido</th>
                                <th scope="col">Fecha cierre</th>
                                <th scope="col">dias</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Observaciones</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->recibido; ?></td>
                                <td><?php echo $dato->cierre ?></td>
                                <td><?php echo $dato->dias; ?></td>
                                <td><?php echo $dato->estado; ?></td>
                                <td><?php echo $dato->observaciones; ?></td>
                                <td><a class="text-success" href="editar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?id=<?php echo $dato->id; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Fecha recibido: </label>
                        <input type="date" class="form-control" name="txtRecibido" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha cierre: </label>
                        <input type="date" class="form-control" name="txtCierre" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dias: </label>
                        <input type="text" class="form-control" name="txtDias" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtEstado" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Observaciones: </label>
                        <input type="text" class="form-control" name="txtObservaciones" autofocus required>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <br>
                        <a href="./excel.php" class="btn btn-success"> Descargar excel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>
<a href="./excel.php" class btn small blue></a>


<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>