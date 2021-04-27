<?php
include("conect.php");
compruebaLogeado();
echo '<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>';
$conexion=conectarse();
$nombre=$_GET["nombre"];
$ciudad=$_GET["ciudad"];
$edad=$_GET["edad"];
$fecha_nacimiento=$_GET["fecha_nacimiento"];
$consulta = "INSERT INTO CLIENTES (nombre,ciudad,edad,fecha_nacimiento) VALUES ('$nombre','$ciudad',$edad,'$fecha_nacimiento')";
echo $consulta;
$resultado = mysqli_query( $conexion, $consulta ) or die ("Algo ha ido mal al insertar el registro");
echo "<p style='text-align:center' class='alert alert-success' >Cliente $nombre insertado</p>";
mysqli_close( $conexion );
?>
<p></p><a href=listaclientes.php>Volver</a></p>
</main>
</body>
</html>