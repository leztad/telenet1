	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<?php
include('conexion.php');


$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

$sql="SELECT * FROM pagostelenet WHERE fregistro BETWEEN '$desde' AND '$hasta' ORDER BY id ASC";
//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysqli_query($con,$sql);

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">';

if(mysqli_num_rows($registro)>0){
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
				<th min-width="200px">Nombre y Apellido</th> <td><div class="parrafo">'.$registro2['nomape'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Cedula</th><td><div class="parrafo">'.$registro2['ci'].'</p></td>
				</tr>
				<tr>
				<th min-width="200px">direccion</th><td><div class="parrafo">'.$registro2['direccion'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Telefono</th><td><div class="parrafo">'.$registro2['telefono'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Plan Contratado</th><td><div class="parrafo">'.$registro2['plan'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Forma De Pago</th><td><div class="parrafo">'.$registro2['fpago'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Banco</th><td><div class="parrafo">'.$registro2['banco'].'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Numero De Operacion</th><td><div class="parrafo">'.$registro2['noperacion'].'</div></td>
				<tr>
				</tr>
				<th min-width="200px">Fecha De Pago</th><td><div class="parrafo">'.fechaNormal($registro2['fechapago']).'</div></td>
				</tr>
				<tr>
				<th min-width="200px">Fecha De Registro</th><td><div class="parrafo">'.fechaNormal($registro2['fregistro']).'</div></td>
				</tr>
				<tr>
				<td colspan="6">____________________________________________</td>
			</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>