<?php
include("conect.php");
pintaMenu();
compruebaLogeado();
echo '<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css"> 
</head>
<body>';
$conexion=conectarse();
$consulta = "SELECT * FROM CLIENTES WHERE idcliente=".$_GET["idcliente"];
//echo $consulta; //solo para pruebas
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal al borrar el registro");
$fila = mysqli_fetch_array( $resultado );
/* echo "<p>IdCliente: " . $fila['idcliente'] . "</p>";
echo "<p>Nombre: " . $fila['nombre'] . "</p>";
echo "<p>Ciudad: " . $fila['ciudad'] . "</p>";
echo "<p>Edad: " . $fila['edad'] . "</p>";
echo "<p>fecha_nacimiento: " . $fila['fecha_nacimiento'] . "</p>";*/
?>
<main> <!-- todo va en la capa main para poder darle estilos -->
	<h1>Actualiza Cliente</h1>
	<form action="actualizacliente2.php">
	<p>IdCliente:<input type="text" class="form-control" name="idcliente" value="<?php echo $fila['idcliente'] ?>" readonly></p>   
	<p>Nombre:<input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre'] ?>"></p>    
	<p>Ciudad:<input type="text" class="form-control" name="ciudad" value="<?php echo $fila['ciudad'] ?>"></p>     
	<p>Edad:<input type="number" class="form-control" name="edad" value="<?php echo $fila['edad'] ?>"></p>
	<p>Fecha de Nacimiento:<input class="form-control" type="date" name="fecha_nacimiento" value="<?php echo $fila['fecha_nacimiento'] ?>"></p> 

	<input type="submit"  value="Actualizar cliente">
	</form>
</main>
<?php
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
