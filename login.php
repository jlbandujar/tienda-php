<?php
session_start();

$usuario = $_REQUEST["usuario"];

include("conect.php");
$conexion=conectarse();
$consulta = "SELECT * FROM LOGIN WHERE usuario='$usuario'";
//echo $consulta; //solo para pruebas
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal buscar el registro de login");
$fila = mysqli_fetch_array( $resultado );
$num_filas = mysqli_num_rows($resultado);
if ($num_filas==0) {
	die ( "<p class='alert alert-danger'>No existe el usuario<a href='login.html'>Volver</a></p>");
} else{
	$password = $_REQUEST["password"]; // si el usuario existe comprueba la password
	if ( sha1($password) == $fila['password'] ) { //si los sha1's de la contraseña que paso y la almacenada coinciden
		$_SESSION["usuario_logeado"]=$_REQUEST["usuario"]; //guarda el usuario que se ha pasado y va al index
		header("Location: index.php"); 
	} else {
		
		die ( "<p class='alert alert-danger'>Contraseña incorrecta<a href='login.html'>Volver</a></p>");
		
	}
}
?>

