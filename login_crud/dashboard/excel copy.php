<!--INICIO del cont principal-->
<?php 
header("content-type: application/xls");
header('content-type: application/vnd.ms-excel');
header("content-disposition: attachment; filename= reporte.xls");
?>
 <table>
                      
                                 <tr>
								 <th scope="col">ID</th>
                                <th scope="col">Fecha recibido</th>
                                <th scope="col">Fecha cierre</th>
                                <th scope="col">dias</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Observaciones</th>
                            </tr>
							
                       
							<?php 
							include ("../model/conexion.php");
							$sql="SELECT id, recibido, cierre, dias, estado, observaciones * FROM persona";
							$ejecutar=mysqli_query($conexion, $sql);
							while ($fila=mysqli_fetch_array($ejecutar)) {




							?>


							<tr>
							<td scope="row"><?php echo $dato->id; ?></td>
							<td><?php echo $fila[0] ?></td>
							<td><?php echo $fila[1] ?></td>
							<td><?php echo $fila[2] ?></td>
							<td><?php echo $fila[3] ?></td>
							<td><?php echo $fila[4] ?></td>
							<td><?php echo $fila[5] ?></td> 
						</tr>
					<?php } ?>

					</table>