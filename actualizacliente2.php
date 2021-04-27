<?php
include("conect.php");
compruebaLogeado();
echo '<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
</head>
<body>';
$conexion=conectarse();
$idCliente=$_GET["idcliente"];
$nombre=$_GET["nombre"];
$ciudad=$_GET["ciudad"];
$edad=$_GET["edad"];
$fecha_nacimiento=$_GET["fecha_nacimiento"];
$consulta = "UPDATE  CLIENTES SET nombre = '$nombre',
								ciudad='$ciudad',
								edad = $edad,
								fecha_nacimiento='$fecha_nacimiento' WHERE idCliente = $idCliente";
;
echo $consulta;//solo pruebas
$resultado = mysqli_query( $conexion, $consulta ) or die ("Algo ha ido mal al insertar el registro");
echo "<p style='text-align:center' class='alert alert-success' >Cliente $nombre actualizado</p>";
mysqli_close( $conexion );
?>
<p></p><a style='text-align:center' href=listaclientes.php>Volver</a></p>
</body>
</html>