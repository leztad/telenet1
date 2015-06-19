<?php
$fecha=date("Y-m-d");
include('conexion.php');
$sql="INSERT INTO pagostelenet (nomape,ci,direccion,telefono,plan,fpago,banco,noperacion,fechapago,fregistro) VALUES (
'$_POST[camp1]','$_POST[camp2]','$_POST[camp3]','$_POST[camp4]','$_POST[camp5]','$_POST[camp6]','$_POST[camp7]','$_POST[camp8]','$_POST[camp9]','$fecha'
	)";

$tel= mysqli_query($con,$sql) or die ($respuesta="No se pudo realizar el registro de pago intente de nuevo si el problema persiste intente mas tarde");
 if ($tel==true) {

 	$respuesta="Datos guardados exitosamente";
 };

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Registro De Pago</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
 </head>
 <body>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
				<?php echo $respuesta;?>
		</div>
	</div>





</div>

 
 </body>
 </html>	