
	<?php 
							require '../model/conexion.php';
							$query=mysqli_query($con,"SELECT * FROM persona");
							$docu="reporte.xls";
							header('content-type: application/xls');
							header('content-disposition: attachment; filename= .$docu');
							header('pragma: no-cahe');
							header ('expires: 0');
							echo 'table border=1>';
							echo '<tr>';
							echo '<th colspan=4> reportes </th>';
							echo '</tr>';
							echo '<tr><th>ID</th><th>fecha recibido</th><th>fecha cierre</th><th>dias</th><th>estado</th><th>observaciones</th></tr>';
							while	( $row=mysqli_fetch_array($query)){
								echo '<tr>';
								echo '<td>' .$row['id'].'</td>';
								echo '<td>' .$row['recibido'].'</td>';
								echo '<td>' .$row['cierre'].'</td>';
								echo '<td>' .$row['dias'].'</td>';
								echo '<td>' .$row['estado'].'</td>';
								echo '<td>' .$row['observaciones'].'</td>';
								echo '</tr>';

							}
							echo '</table>';
					
							
							
							?>