<?php 
$host = "localhost";
$user = "root";
$pw = "";
$db = "pagos";

$con = mysqli_connect($host,$user,$pw) or die("problemas al conectar con la Base De Datos");
		mysqli_select_db($con,$db) or die ("problemas al conectar con la base de datos");



function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
};
 ?>