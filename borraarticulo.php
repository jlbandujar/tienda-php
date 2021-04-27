<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$usuario = "id16351736_admin2";
$contrasena = "Bosco@20202021";
$servidor = "localhost";
$basededatos = "id16351736_tienda2";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

$consulta = "DELETE FROM articulos WHERE idarticulo=".$_REQUEST['idarticulo']; 

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal al borrar el artículo");

echo "<h1>Artículo ".$_REQUEST['idarticulo']." borrado</h1>";

/* echo "<table class='table table-striped table-dark'>";
echo "<tr><th>idcliente</th><th>Nombre</th><th>Ciudad</th></tr>";

while ($fila = mysqli_fetch_array( $resultado ))
{
 echo "<tr>";
 echo "<td>" . $fila['idcliente'] . "</td><td>" . $fila['nombre'] . "</td><td>" . $fila['ciudad'] . "</td>";
 echo "</tr>";
}
echo "</table>";*/
?>
</body>
</html>